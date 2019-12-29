<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use DB;

class PortfolioController extends Controller
{
 
    public function index()
    {
        $portfolios =  Portfolio::all();
         return view('admin.portfolio.allportfolio',compact('portfolios')); 
    }

    public function store(Request $request)
    {
        $status = $request->status ? 1 : 0;
         $validation = Validator::make($request->all(),[
            'link'       => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,bmp,jpg,png,gif,svg'
        ]);
        if (!$validation->fails()) {
            try {
                DB::beginTransaction();
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = time().'.'.$image->getClientOriginalExtension();
                    $image->move('images/portfolio-image',$imageName);
                    
                    $insertid = Portfolio::insert([
                        'link'        =>  $request->link,
                        'description' =>  $request->description,
                        'image'       =>  $imageName,
                        'status'      =>  $status
                    ]);
                    
                    DB::commit();
                     return back()->with(['alert-type' => 'success','message' => 'Portfolio Added successfull']);
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
        $data = Portfolio::find($id);
        return view('admin.portfolio.editportfolio',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $status = $request->status ? 1 : 0;
        $validation = Validator::make($request->all(),[
            'link'       => 'required',
            'description' => 'required'
        ]);
        if (!$validation->fails()) {
           try {
                DB::beginTransaction();
                $updated = Portfolio::find($id);
                    $updated->link        = $request->link;
                    $updated->description = $request->description;
                    $updated->status      = $status;
                $updated->update();

                if ($request->hasFile('image')) {

                if(!empty($updated->image) && file_exists('images/portfolio-image/'.$updated->image)){      
                    unlink('images/portfolio-image/'.$updated->image);
                }
                    $image = $request->file('image');
                    $imageName = time().'.'.$image->getClientOriginalExtension();
                    $image->move('images/portfolio-image',$imageName);

                    Portfolio::where('id', $updated->id)
                            ->update([
                                'image' => $imageName
                            ]);
                }
                    DB::commit();
                return back()->with(['alert-type' => 'success', 'message'=> 'Portfolio Updated successfull']);
                            
            } catch (Exception $e) {
                DB::rollback();
                return back()->with(['alert-type' => 'error', 'message' => $e->errorInfo[2]]);
            }
        }
        return back()->with(['alert-type' => 'error','message' => 'Validation Error Occured!']);
    }

    public function changeStatus($id)
    {
        $data = Portfolio::find($id);
            if ($data->status == 0) {
                $data->status = 1;
            }
            else {
                $data->status = 0;
            }
        $data->update();
        return back()->with(['alert-type' => 'info','message' => 'Portfolio status changed!']);
    }

    public function destroy($id)
    {
        $data = Portfolio::find($id);
            if(!empty($data->image) && file_exists('images/portfolio-image/'.$data->image)){      
                unlink('images/portfolio-image/'.$data->image);
            }
        $data->delete();
        return back()->with(['alert-type' => 'warning','message' => 'Data Deleted']);
    }

    public function getPortfolio()
    {
        return view('admin.portfolio.addportfolio');
    }
}
