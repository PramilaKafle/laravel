@extends('master') 


@section('content')
@php
    $counter = 0; 
  @endphp
<div class="container product-page">
  
        

<div id="demo" class="carousel slide" data-bs-ride="carousel">


<div class="carousel-indicators">
  <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
  <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
</div>


 <div class="carousel-inner">
    @foreach($products as $item)
    @if($counter < 3)
 <div class="carousel-item {{ $counter == 0 ? 'active' : '' }}">
  <a href="detail/{{$item['id']}}">
  <img class="product-img"  src="{{asset('public/images/'.$item->gallery)}}" alt="image" class="d-block" style="width:100%">
    <div class="carousel-caption" style="color:black;">
      <h3>{{$item['name']}}</h3>
      <p>{{$item['description']}}</p>
    </div>
    @endif
  </a>
 </div>
  @endforeach
</div>


<button class="carousel-control-prev  sidebar-product" type="button" data-bs-target="#demo" data-bs-slide="prev" >
  <span class="carousel-control-prev-icon" style="background-color:black;"></span>
</button>
<button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
  <span class="carousel-control-next-icon" style="background-color:black;"></span>
</button>
</div>
<br> </br>

 <div class="trending-products">
    <h1>Trending Products</h1>

    @foreach($products as $item)
  <div class="trending-item">
     <a href="detail/{{$item['id']}}">
    <img class="trending-product-img" src="{{asset('public/images/'.$item->gallery)}}" alt="image" class="d-block"  width="200px" height="200px">
  
    </a>
  </div>
  @endforeach

 </div>
       
</div>

</div> 




@endsection