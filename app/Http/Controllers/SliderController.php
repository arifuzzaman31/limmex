<?php

namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        $validation = Validator::make($request->all(),[
            'name'       => 'required',
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,bmp,jpg,png,gif,svg'
        ]);
        if (!$validation->fails()) {
            try {
                DB::beginTransaction();
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = time().'.'.$image->getClientOriginalExtension();
                    $image->move('images/slider-image',$imageName);
                    
                    $insertid = Slider::insert([
                        'name'        =>  $request->name,
                        'title'       =>  $request->title,
                        'description' =>  $request->description,
                        'image'       =>  $imageName,
                        'status'      =>  $status
                    ]);
                    
                    DB::commit();
                    return back()->with(['alert-type' => 'success','message' => 'Slider Added successfull']);
                }
                            
            } catch (Exception $e) {
                DB::rollback();
                return back()->with(['alert-type' => 'error','message' => $e->errorInfo[2]]);
            }
        }
        return back()->with(['alert-type' => 'error','message' => 'Validation Error Occured!']);
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
        $validation = Validator::make($request->all(),[
            'name'       => 'required',
            'title' => 'required',
            'description' => 'required' 
        ]);
        if (!$validation->fails()) {
           try {
                DB::beginTransaction();
                $updated = Slider::find($id);
                $updated->name        =  $request->name;
                $updated->title       =  $request->title;
                $updated->description =  $request->description;
                $updated->status      =  $status;
                $updated->update();

                if ($request->hasFile('image')) {

                if(!empty($updated->image) && file_exists('images/slider-image/'.$updated->image)){      
                    unlink('images/slider-image/'.$updated->image);
                }
                    $image = $request->file('image');
                    $imageName = time().'.'.$image->getClientOriginalExtension();
                    $image->move('images/slider-image',$imageName);

                    Slider::where('id', $updated->id)
                            ->update([
                                'image' => $imageName
                            ]);
                }
                    DB::commit();
                    return back()->with(['alert-type' => 'success','message' => 'Slider Updated successfull']);
                            
            } catch (Exception $e) {
                DB::rollback();
                return back()->with(['alert-type' => 'error','message' => $e->errorInfo[2]]);
            }
        }
        return back()->with(['alert-type' => 'error','message' => 'Validation Error Occured!']);
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
        return back()->with(['alert-type' => 'warning','message' => 'Data Deleted']);
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
        return back()->with(['alert-type' => 'info','message' => 'Slider status changed!']);
    }
}
