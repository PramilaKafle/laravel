@extends('admin.layout') 
@include('admin.header')
@section('content')


<div class="container mt-3">

  <h2>Products


  <a href="/admin.category"  ><button class="btn btn-success float-end">ADD Product</button></a> 
  </h2>
  <table class="table table-hover">
    <thead>
      <tr>
      
        <th>Name</th>
        <th>description</th>
        <th>Price</th>
        <th>Product</th>
        <th>Edit</th>
        <th>Delete</th>

      </tr>
    </thead>
    <tbody>
        @foreach($products as $item)
      <tr>

       
        <td>{{ $item->name}}</td>
        <td>{{ $item->description}}</td>
       <td>{{ $item->price}}</td>
       <td><a href=""><img src="{{asset('public/images/'.$item->gallery)}}" width="70px" height="70px"></a> </td>
     <td><a href="/admin.editproduct/{{ $item->id}}"><button class="btn btn-primary">Edit</button></a></td>
     <td>
      <form action ="/admin.deleteproduct/{{ $item->id}}" method="POST" >
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger">Delete</button></a>

</form>

     <!-- <a href="/admin.deleteproduct/{{ $item->id}}"><button class="btn btn-danger">Delete</button></a>-->
    </td>
      </tr>
   @endforeach
    </tbody>
    {{Session('message')}}
  </table>

  
</div>





@endsection