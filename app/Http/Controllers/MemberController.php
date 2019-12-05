<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Team;
use DB;

class MemberController extends Controller
{
    public function index()
    {
        $members = Team::all();
        return view('admin.members.allmember', compact('members'));
    }


    public function changestatus($id)
    {
        $data = Team::find($id);
            if ($data->status == 0) {
                $data->status = 1;
            }
            else {
                $data->status = 0;
            }
        $data->update();
        return back()->with(['message', 'Member statsu changed!']);
    }


    public function store(Request $request)
    {
        $status = $request->status ? 1 : 0;
        try {
            DB::beginTransaction();
            $insertid = Team::insertGetId([
                'name'		  =>  $request->name,
                'designation' =>  $request->designation,
                'fb_link'     =>  $request->fb_link,
                'tw_link'     =>  $request->tw_link,
                'in_link'	  =>  $request->in_link,
                'status'      =>  $status
            ]);

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images/team-member-image'),$imageName);

                Team::where('id', $insertid)
                        ->update([
                            'image' => $imageName
                        ]);
            }
                DB::commit();
            return back()->with(['message', 'Member Added successfull']);
                        
        } catch (Exception $e) {
            DB::rollback();
            return back()->withErrors(['message', $e->errorInfo[2]]);
        }
    }

    public function show($id)
    {
       $data = Team::find($id);
        return view('admin.members.showmember',compact('data'));
    }

  
    public function edit($id)
    {
        $data = Team::find($id);
        return view('admin.members.editmember',compact('data'));
    }

	public function update(Request $request, $id)
	{
	    $status = $request->status ? 1 : 0;
	   try {
	        DB::beginTransaction();
	        $updated = Team::find($id);
	            $updated->update([
	                'name'		  =>  $request->name,
	                'designation' =>  $request->designation,
	                'fb_link'     =>  $request->fb_link,
	                'tw_link'     =>  $request->tw_link,
	                'in_link'	  =>  $request->in_link,
	                'status'      =>  $status
	            ]);

	        if ($request->hasFile('image')) {

	        if(!empty($updated->image) && file_exists('images/team-member-image/'.$updated->image)){      
	            unlink('images/team-member-image/'.$updated->image);
	        }
	            $image = $request->file('image');
	            $imageName = time().'.'.$image->getClientOriginalExtension();
	            $image->move(public_path('images/team-member-image'),$imageName);

	            Team::where('id', $updated->id)
	                    ->update([
	                        'image' => $imageName
	                    ]);
	        }
	            DB::commit();
	        return back()->with(['message', 'Member Added successfull']);
	                    
	    } catch (Exception $e) {
	        DB::rollback();
	        return back()->withErrors(['message', $e->errorInfo[2]]);
	    }
	}


    public function destroy($id)
    {
        $data = Team::find($id);
            if(!empty($data->image) && file_exists('images/team-member-image/'.$data->image)){      
                unlink('images/team-member-image/'.$data->image);
            }
        $data->delete();
        return back()->with(['message', 'Data Deleted']);
    }

    public function getMember()
    {
        return view('admin.members.addmember');
        // return "hiee";
    }
}
