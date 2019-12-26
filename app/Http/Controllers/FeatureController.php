<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Feature;
use DB;

class FeatureController extends Controller
{
    
    public function index()
    {
        $features = Feature::all();
        return view('admin.feature.allfeature', compact('features'));
    }


    public function changestatus($id)
    {
        $data = Feature::where('id',$id)->first();
            if ($data->status == 0) {
                $data->status = 1;
            }
            else {
                $data->status = 0;
            }
        $data->update();
        return back()->with(['alert-type' => 'info','message' => 'Feature status changed!']);
    }


    public function store(Request $request)
    {
        $status = $request->status ? 1 : 0;
        $validation = Validator::make($request->all(),[
            'title'       => 'required',
            'description' => 'required',
            'feature_icon' => 'required|image|mimes:jpeg,jpg,png,gif,svg'
        ]);
        if (!$validation->fails()) {
        try {
            DB::beginTransaction();
            $insertid = Feature::insertGetId([
                'title'      =>  $request->title,
                'slug'       =>  Str::slug($request->title,'-'),
                'description'=>  $request->description,
                'status'     =>  $status
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move('images/feature-image',$imageName);

                Feature::where('id', $insertid)
                        ->update([
                            'feature_icon' => $imageName
                        ]);
            }
                DB::commit();
                 return back()->with(['alert-type' => 'success','message' => 'Feature Added successfull']);
                        
        } catch (Exception $e) {
            DB::rollback();
            return back()->with(['alert-type' => 'error','message' => $e->errorInfo[2]]);
        }
    }
    return back()->with(['alert-type' => 'error','message' => 'Validation Error Occured!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $data = Feature::where('id',$id)->first();
        return view('admin.feature.showFeature',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Feature::where('id',$id)->first();
        return view('admin.feature.editFeature',compact('data'));
    }

public function update(Request $request, $id)
{
    $status = $request->status ? 1 : 0;
   try {
        DB::beginTransaction();
        $updated = Feature::where('id',$id)->first();
                $updated->title      =  $request->title;
                $updated->slug       =  Str::slug($request->title,'-');
                $updated->description =  $request->description;
                $updated->status     =  $status;
            $updated->update();

        if ($request->hasFile('image')) {

        if(!empty($updated->feature_icon) && file_exists('images/feature-image/'.$updated->feature_icon)){      
            unlink('images/feature-image/'.$updated->feature_icon);
        }
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move('images/feature-image',$imageName);

            Feature::where('id', $updated->id)
                    ->update([
                        'feature_icon' => $imageName
                    ]);
        }
            DB::commit();
        return back()->with(['alert-type' => 'success','message' => 'Feature Updated successfull']);
                    
    } catch (Exception $e) {
        DB::rollback();
        return back()->with(['alert-type' => 'error','message' => $e->errorInfo[2]]);
    }
}


    public function destroy($id)
    {
        $data = Feature::where('id',$id)->first();
            if(!empty($data->feature_icon) && file_exists('images/feature-image/'.$data->feature_icon)){      
                unlink('images/feature-image/'.$data->feature_icon);
            }
        $data->delete();
        return back()->with(['alert-type' => 'warning','message' => 'Data Deleted']);
    }

    public function getFeature()
    {
        return view('admin.feature.addfeature');
        // return "hiee";
    }
}
