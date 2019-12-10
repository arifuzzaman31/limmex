<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Service;
use DB;

class ServiceController extends Controller
{
 public function index()
    {
        $Services = Service::all();
        return view('admin.services.allservices', compact('Services'));
    }


    public function changestatus($slug)
    {
        $data = Service::where('slug',$slug)->first();
            if ($data->status == 0) {
                $data->status = 1;
            }
            else {
                $data->status = 0;
            }
        $data->update();
        return back()->with(['alert-type' => 'success', 'message' => 'Service statsu changed!']);
    }


    public function store(Request $request)
    {
        $status = $request->status ? 1 : 0;
        try {
            DB::beginTransaction();
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images/service-image'),$imageName);
                Service::insert([
                    'sort_description' => $request->sort_description ,
                    'slug'             => Str::slug($request->sort_description,'-'),
                    'description'      => $request->description ,
                    'image'            => $imageName ,
                    'status'           => $status
                ]);
                DB::commit();
                return back()->with(['message', 'Service Added successfull']);
           }             
        } catch (Exception $e) {
            DB::rollback();
            return back()->withErrors(['message', $e->errorInfo[2]]);
        }
    }

    public function show($slug)
    {
       $data = Service::where('slug',$slug)->first();
        return view('admin.services.showservices',compact('data'));
    }

    public function edit($slug)
    {
        $data = Service::where('slug',$slug)->first();
        return view('admin.services.editservices',compact('data'));
    }

public function update(Request $request, $id)
{
   try {
        DB::beginTransaction();
        $updated = Service::where('id',$id)->first();
            $updated->update([
                'sort_description' => $request->sort_description ,
                'slug'             => Str::slug($request->sort_description,'-'),
                'description'      => $request->description
            ]);

            if ($request->hasFile('image')) {

                if(!empty($updated->image) && file_exists('images/service-image/'.$updated->image)){      
                    unlink('images/service-image/'.$updated->image);
                }
                    $image = $request->file('image');
                    $imageName = time().'.'.$image->getClientOriginalExtension();
                    $image->move(public_path('images/service-image'),$imageName);

                    Service::where('id', $updated->id)
                            ->update([
                                'image' => $imageName
                            ]);
            }
           DB::commit();
        return back()->with(['message', 'Service Updated successfull']);
                    
    } catch (Exception $e) {
        DB::rollback();
        return back()->withErrors(['message', $e->errorInfo[2]]);
    }
}

    public function destroy($slug)
    {
        $data = Service::where('slug',$slug)->first();
        $data->delete();
        return back()->with(['message', 'Data Deleted']);
    }

    public function getService()
    {
    	// return 'hu';
        return view('admin.services.addservices');
    }
}
