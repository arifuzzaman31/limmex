<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use DB;

class SliderController extends Controller
{
  
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.sliders.allslider',compact('sliders'));
    }

    public function create()
    {
        return view('admin.sliders.addslider');
    }

 
    public function store(Request $request)
    {
       $status = $request->status ? 1 : 0;
        try {
            DB::beginTransaction();
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images/slider-image'),$imageName);
                
                $insertid = Slider::insert([
                    'name'        =>  $request->name,
                    'title'       =>  $request->title,
                    'description' =>  $request->description,
                    'image'       =>  $imageName,
                    'status'      =>  $status
                ]);
                
                DB::commit();
                return back()->with(['message', 'Slider Added successfull']);
            }
                        
        } catch (Exception $e) {
            DB::rollback();
            return back()->withErrors(['message', $e->errorInfo[2]]);
        }
    }

    public function edit($id)
    {
        $data = Slider::where('id',$id)->first();
        return view('admin.sliders.editslider',compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $status = $request->status ? 1 : 0;
           try {
                DB::beginTransaction();
                $updated = Slider::find($id);
                    $updated->update([
                        'name'        =>  $request->name,
                        'title'       =>  $request->title,
                        'description' =>  $request->description,
                        'status'      =>  $status
                    ]);

                if ($request->hasFile('image')) {

                if(!empty($updated->image) && file_exists('images/slider-image/'.$updated->image)){      
                    unlink('images/slider-image/'.$updated->image);
                }
                    $image = $request->file('image');
                    $imageName = time().'.'.$image->getClientOriginalExtension();
                    $image->move(public_path('images/slider-image'),$imageName);

                    Slider::where('id', $updated->id)
                            ->update([
                                'image' => $imageName
                            ]);
                }
                    DB::commit();
                return back()->with(['message', 'Slider Updated successfull']);
                            
            } catch (Exception $e) {
                DB::rollback();
                return back()->withErrors(['message', $e->errorInfo[2]]);
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Slider::find($id);
            if(!empty($data->image) && file_exists('images/slider-image/'.$data->image)){      
                unlink('images/slider-image/'.$data->image);
            }
        $data->delete();
        return back()->with(['message', 'Data Deleted']);
    }

    public function changeStatus($id)
    {
       $data = Slider::find($id);
            if ($data->status == 0) {
                $data->status = 1;
            }
            else {
                $data->status = 0;
            }
        $data->update();
        return back()->with(['message', 'Slider status changed!']);
    }
}
