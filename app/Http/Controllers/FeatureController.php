<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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


    public function changestatus($slug)
    {
        $data = Feature::where('slug',$slug)->first();
            if ($data->status == 0) {
                $data->status = 1;
            }
            else {
                $data->status = 0;
            }
        $data->update();
        return back()->with(['message', 'Feature statsu changed!']);
    }


    public function store(Request $request)
    {
        $status = $request->status ? 1 : 0;
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
                $image->move(public_path('images/feature-image'),$imageName);

                Feature::where('id', $insertid)
                        ->update([
                            'feature_icon' => $imageName
                        ]);
            }
                DB::commit();
            return back()->with(['message', 'Feature Added successfull']);
                        
        } catch (Exception $e) {
            DB::rollback();
            return back()->withErrors(['message', $e->errorInfo[2]]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
       $data = Feature::where('slug',$slug)->first();
        return view('admin.feature.showFeature',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $data = Feature::where('slug',$slug)->first();
        return view('admin.feature.editFeature',compact('data'));
    }

public function update(Request $request, $slug)
{
    $status = $request->status ? 1 : 0;
   try {
        DB::beginTransaction();
        $updated = Feature::where('slug',$slug)->first();
            $updated->update([
                'title'      =>  $request->title,
                'slug'       =>  Str::slug($request->title,'-'),
                'description'=>  $request->description,
                'status'     =>  $status
            ]);

        if ($request->hasFile('image')) {

        if(!empty($updated->feature_icon) && file_exists('images/feature-image/'.$updated->feature_icon)){      
            unlink('images/feature-image/'.$updated->feature_icon);
        }
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/feature-image'),$imageName);

            Feature::where('id', $updated->id)
                    ->update([
                        'feature_icon' => $imageName
                    ]);
        }
            DB::commit();
        return back()->with(['message', 'Feature Added successfull']);
                    
    } catch (Exception $e) {
        DB::rollback();
        return back()->withErrors(['message', $e->errorInfo[2]]);
    }
}


    public function destroy($slug)
    {
        $data = Feature::where('slug',$slug)->first();
            if(!empty($data->feature_icon) && file_exists('images/feature-image/'.$data->feature_icon)){      
                unlink('images/feature-image/'.$data->feature_icon);
            }
        $data->delete();
        return back()->with(['message', 'Data Deleted']);
    }

    public function getFeature()
    {
        return view('admin.feature.addfeature');
        // return "hiee";
    }
}
