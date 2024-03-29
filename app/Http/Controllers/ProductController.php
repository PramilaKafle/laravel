<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\cart;
use App\Models\order;
use Session;
use Illuminate\Support\facades\DB;

class ProductController extends Controller
{
    function index()
    {
        $data =Product ::all();
        return view('product',['products'=>$data]);
    }
    function detail($id)
    {
        $data = Product::find($id);
        return view('productdetail',['product'=>$data]);
    }
    function addToCart(Request $req)
    {

        if($req->session()->has('user'))
        {
          $cart =new Cart;
          $cart->user_id= $req->session()->get('user')['id'];
          $cart->product_id=$req->product_id;
          $cart->quantity=$req->input('quantity');
          $cart->save();
          return redirect('/');
        }
        else{
            return redirect('/login');
        }
       
      
    }
    static function cartItem() {
        $user = Session::get('user');
        if ($user && isset($user['id'])) {
            $userId = $user['id'];
            return cart::where('user_id', $userId)->count();
        }
        return 0; 
    }
    function cartList()
    {
        $userId=Session::get('user')['id'];
       $products =DB::table('cart')->join('products','cart.product_id','=','products.id')
       ->where('cart.user_id',$userId)
       ->select('products.*','cart.id as cart_id','cart.quantity as quantity')
       ->get();

       //echo $products;
       
       return view('cartlist',['products'=>$products]);
    }
    function removeCart($id)
    {
Cart::destroy($id);
return redirect('cartlist');
    }
        
function orderNow(){
    
    $userId=Session::get('user')['id'];
   $total = $products =DB::table('cart')->join('products','cart.product_id','=','products.id')
    ->where('cart.user_id',$userId)
    ->sum(DB::raw('cart.quantity * products.price'));
 
//echo $total;
    return view('ordernow',['total'=>$total]);
}

function orderPlace(Request $req)
{
    $userId=Session::get('user')['id'];
    $allCart = Cart::where('user_id',$userId)->get();
    foreach($allCart as $cart)
    {
$order = new order;
$order->product_id=$cart['product_id'];
$order->user_id=$cart['user_id'];
$order->status="pending";
$order->payment_method=$req->payment;
$order->payment_status="pending";
$order->address=$req->address;
$order->save();
Cart::where('user_id',$userId)->delete();


    }

 $req->input();
 return redirect("/");
}
}