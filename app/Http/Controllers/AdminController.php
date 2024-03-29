<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\facades\DB;
use App\Models\Product;

class AdminController extends Controller
{
    public function index()
    {
       return view('admin.login');
    }

    public function auth(Request $request)
    {

   
$email=$request->post('email');
$password=$request->post('password');
$result = Admin::where(['email'=>$email,'password'=>$password])->get();
if(isset($result['0']->id))
{
    $request->session()->put('ADMIN_LOGIN',true);
    $request->session()->put('ADMIN_ID',$result['0']->id);
 

 return redirect('admin.dashboard');
}
else{
    $request->session()->flash('error',' Invalid login detail');
    return redirect('admin');
}
    }

    public function dashboard()
    {

       // $products = DB::table('products')->get();
        $products = Product::all();


        //return view('admin.dashboard',['products' => $products]);
        return view('admin.dashboard',compact('products'));
    }

    
   
}
