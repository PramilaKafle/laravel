<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\facades\DB;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        //$products = DB::table('products')->get();


       return view('admin.category');
    }
    public function Insert(Request $request)
    {

        //return $request;

        $product = new Product;
        $product->name = $request->input('name');
        $product->price = $request->input('price');
        $product->category = $request->input('category');
        $product->description = $request->input('description');

        if($request->hasfile('image')){
            $file = $request->file('image');
            $extention= $file->getClientOriginalExtension();
            $filename=time().''.$extention;
            $file->move('public/images/',$filename);
            $product->gallery =  $filename;

        }
          
            $product->save();
            $request->session()->flash('message','Product inserted');
            return redirect('admin.category');
    
          
        }
            

        public function editProduct($id){
             $product = Product::find($id);
             return view('admin.editproduct',compact('product'));
            //echo "hello";

        }
        public function Update(Request $request ,$id)
        {
    
            //return $request;
            $product = Product::find($id);
           
            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->category = $request->input('category');
            $product->description = $request->input('description');
    
            if($request->hasfile('image')){
                $destination ='public/images/'.$product->gallery ;
                if(File::exists($destination))
                {
                    File::delete($destination);
                }
                $file = $request->file('image');
                $extention= $file->getClientOriginalExtension();
                $filename=time().''.$extention;
                $file->move('public/images/',$filename);
                $product->gallery =  $filename;
    
            }
              
                $product->update();
               // $request->session()->flash('message','Product Updated Successfuly');
                return redirect()->back()->with('message',"Product Updated Successfuly");
        
              
            }

            public function deleteProduct($id){
                 $products = Product::find($id);
                 $destination ='public/images/'.$products->gallery ;
                 if(File::exists($destination))
                 {
                    File::delete($destination);
                 }


                 $products->delete();
                 return redirect()->back()->with('message',"Product deleted Successfuly");
               // return view('admin.dashboard',compact('products'));
               
   
           }
                
    
     
    }
   
