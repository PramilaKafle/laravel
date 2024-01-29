@extends('master') 
@section('content')



<div class="container mt-3">
  <h2>Products</h2>
     
  <table class="table table-hover">
    <thead>
      <tr>
      <th>Product</th>
        <th>Name</th>
      
        <th>Price</th>
        <th>Quantity</th>
        <th>TotalPrice</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
        @foreach($products as $item)
      <tr>

        <td><a href="detail/{{$item->id}}"><img src="{{asset('public/images/'.$item->gallery)}}" width="80px" height="80px"></a> </td>
        <td>{{ $item->name}}</td>
       
        <td>{{ $item->price}}</td>
        <td >{{ $item->quantity}}</td>
<td>{{ $item->quantity * $item->price}}</td>
        <td><a href="/removecart/{{$item->cart_id}}"> <button class="btn btn-warning">Remove from Cart</button> </a></td>
      </tr>
   @endforeach
    </tbody>
  
  </table>
  <a href="/ordernow">  <button class="btn btn-success float-end">Order Now</button></a>
  <br></br>
</div>


@endsection


