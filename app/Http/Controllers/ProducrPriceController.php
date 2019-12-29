<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
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
        $validation = Validator::make($request->all(),[
            'title'       => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image|mimes:jpeg,bmp,jpg,png,gif,svg'
        ]);
        if (!$validation->fails()) {
            try {
                DB::beginTransaction();
                if ($request->hasFile('image')) {
                    $image = $request->file('image');
                    $imageName = time().'.'.$image->getClientOriginalExtension();
                    $image->move('images/product-image',$imageName);
                    
                    $insertid = Priceplan::insert([
                        'title'       =>  $request->title,
                        'description' =>  $request->description,
                        'price'       =>  $request->price,
                        'product_link'=>  $request->product_link,
                        'image'       =>  $imageName,
                        'status'      =>  $status
                    ]);
                    
                    DB::commit();
                    return back()->with(['alert-type' => 'success','message' => 'Product Added successfull']);
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
        $data = Priceplan::where('id',$id)->first();
        return view('admin.our-product.editpriceplan',compact('data'));
    }

    public function update(Request $request,$id)
    {
        $status = $request->status ? 1 : 0;
        $validation = Validator::make($request->all(),[
            'title'       => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);
        if (!$validation->fails()) {
           try {
                DB::beginTransaction();
                $updated = Priceplan::find($id);
                    $updated->title       =  $request->title;
                    $updated->description =  $request->description;
                    $updated->price       =  $request->price;
                    $updated->product_link=  $request->product_link;
                    $updated->status      =  $status;
                 $updated->update();

                if ($request->hasFile('image')) {

                if(!empty($updated->image) && file_exists('images/product-image/'.$updated->image)){      
                    unlink('images/product-image/'.$updated->image);
                }
                    $image = $request->file('image');
                    $imageName = time().'.'.$image->getClientOriginalExtension();
                    $image->move('images/product-image',$imageName);

                    Priceplan::where('id', $updated->id)
                            ->update([
                                'image' => $imageName
                            ]);
                }
                    DB::commit();
                    return back()->with(['alert-type' => 'success','message' => 'Product Updated successfull']);              
            } catch (Exception $e) {
                DB::rollback();
               return back()->with(['alert-type' => 'error','message' => $e->errorInfo[2]]);
            }
        }
        return back()->with(['alert-type' => 'error','message' => 'Validation Error Occured!']);
    }

    public function destroy($id)
    {
        $data = Priceplan::find($id);
            if(!empty($data->image) && file_exists('images/product-image/'.$data->image)){      
                unlink('images/product-image/'.$data->image);
            }
        $data->delete();
        return back()->with(['alert-type' => 'warning','message' => 'Data Deleted']);
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
        return back()->with(['alert-type' => 'info','message' => 'Product status changed!']);
    }
}
