@extends('master') 
@section('content')





<div class="container">
    <div class="row mt-4 ">
  <div class="col-sm-6">
<img  class="product-detail-img" src="{{asset('public/images/'.$product->gallery)}}" alt="image">

  </div>
  <div class="col-sm-6">
<a href="/"> Go Back</a>
<h2> Name: {{$product['name']}}</h2>
<h4> Price: {{$product['price']}}</h4>
<h4> Category: {{$product['category']}}</h4>
<h4> Description: {{$product['description']}}</h4>
<br></br>
<form action="/add_to_cart" method="POST">
    @csrf
    <input type="hidden" name="product_id" value= {{$product['id']}}>
    <div class="cart-product-quantity" >
    <div class="input-group quantity">
            <div class="input-group-prepend decrement-btn" style="cursor: pointer">
                <span class="input-group-text">-</span>
            </div>
            <input type="text" class="qty-input form-control " maxlength="2" max="10" value="1" name="quantity"style="width:50px;">
            <div class="input-group-append increment-btn" style="cursor: pointer">
                <span class="input-group-text">+</span>
            </div>
        </div>
</div>
<br></br>
   
<button class="btn btn-success"> Add to Cart</button>
 
</form>

<br></br>



  </div>

       
    </div>
</div>
<script>

$(document).ready(function () {

$('.increment-btn').click(function (e) {
    e.preventDefault();
    var incre_value = $(this).parents('.quantity').find('.qty-input').val();
    var value = parseInt(incre_value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<10){
        value++;
        $(this).parents('.quantity').find('.qty-input').val(value);
    }

});

$('.decrement-btn').click(function (e) {
    e.preventDefault();
    var decre_value = $(this).parents('.quantity').find('.qty-input').val();
    var value = parseInt(decre_value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>1){
        value--;
        $(this).parents('.quantity').find('.qty-input').val(value);
    }
});

});
  </script>


@endsection