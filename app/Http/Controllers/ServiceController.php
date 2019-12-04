<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;
use DB;

class ServiceController extends Controller
{
 public function index()
    {
        $Services = Service::all();
        return view('admin.services.allservices', compact('Services'));
    }


    public function changestatus($id)
    {
        $data = Service::find($id);
            if ($data->status == 0) {
                $data->status = 1;
            }
            else {
                $data->status = 0;
            }
        $data->update();
        return back()->with(['message', 'Service statsu changed!']);
    }


    public function store(Request $request)
    {
        try {
            DB::beginTransaction();
            Service::create($request->all());
            DB::commit();
            return back()->with(['message', 'Service Added successfull']);
                        
        } catch (Exception $e) {
            DB::rollback();
            return back()->withErrors(['message', $e->errorInfo[2]]);
        }
    }

    public function show($id)
    {
       $data = Service::find($id);
        return view('admin.services.showservices',compact('data'));
    }

    public function edit($id)
    {
        $data = Service::find($id);
        return view('admin.services.editservices',compact('data'));
    }

public function update(Request $request, $id)
{
   try {
        DB::beginTransaction();
        $updated = Service::find($id);
            $updated->update($request->all());
           DB::commit();
        return back()->with(['message', 'Service Updated successfull']);
                    
    } catch (Exception $e) {
        DB::rollback();
        return back()->withErrors(['message', $e->errorInfo[2]]);
    }
}

    public function destroy($id)
    {
        $data = Service::find($id);
        $data->delete();
        return back()->with(['message', 'Data Deleted']);
    }

    public function getService()
    {
    	// return 'hu';
        return view('admin.services.addservices');
    }
}
