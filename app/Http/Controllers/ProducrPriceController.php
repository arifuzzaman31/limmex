<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Priceplan;
use DB;

class ProducrPriceController extends Controller
{
    public function index()
    {
        $priceplans = Priceplan::all();
        return view('admin.our-product.allpriceplan',compact('priceplans'));
    }

    public function create()
    {
        return view('admin.our-product.addpriceplan');
    }

 
    public function store(Request $request)
    {
       $status = $request->status ? 1 : 0;
        try {
            DB::beginTransaction();
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = time().'.'.$image->getClientOriginalExtension();
                $image->move(public_path('images/product-image'),$imageName);
                
                $insertid = Priceplan::insert([
                    'title'       =>  $request->title,
                    'description' =>  $request->description,
                    'price'        =>  $request->price,
                    'image'       =>  $imageName,
                    'status'      =>  $status
                ]);
                
                DB::commit();
                return back()->with(['message', 'product Added successfull']);
            }
                        
        } catch (Exception $e) {
            DB::rollback();
            return back()->withErrors(['message', $e->errorInfo[2]]);
        }
    }

    public function edit($id)
    {
        $data = Priceplan::where('id',$id)->first();
        return view('admin.our-product.editpriceplan',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $status = $request->status ? 1 : 0;
           try {
                DB::beginTransaction();
                $updated = Priceplan::find($id);
                    $updated->update([
                        'title'       =>  $request->title,
                        'description' =>  $request->description,
                        'price'       =>  $request->price,
                        'status'      =>  $status
                    ]);

                if ($request->hasFile('image')) {

                if(!empty($updated->image) && file_exists('images/product-image/'.$updated->image)){      
                    unlink('images/product-image/'.$updated->image);
                }
                    $image = $request->file('image');
                    $imageName = time().'.'.$image->getClientOriginalExtension();
                    $image->move(public_path('images/product-image'),$imageName);

                    Priceplan::where('id', $updated->id)
                            ->update([
                                'image' => $imageName
                            ]);
                }
                    DB::commit();
                return back()->with(['message', 'product Updated successfull']);
                            
            } catch (Exception $e) {
                DB::rollback();
                return back()->withErrors(['message', $e->errorInfo[2]]);
            }
    }

    public function destroy($id)
    {
        $data = Priceplan::find($id);
            if(!empty($data->image) && file_exists('images/product-image/'.$data->image)){      
                unlink('images/product-image/'.$data->image);
            }
        $data->delete();
        return back()->with(['message', 'Data Deleted']);
    }

    public function changeStatus($id)
    {
       $data = Priceplan::find($id);
            if ($data->status == 0) {
                $data->status = 1;
            }
            else {
                $data->status = 0;
            }
        $data->update();
        return back()->with(['message', 'product status changed!']);
    }
}
