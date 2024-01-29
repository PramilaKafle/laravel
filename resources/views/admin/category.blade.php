@extends('admin.layout') 
@include('admin.header')
@section('content')




<div class="container user-login">
    <div class="row">

    <form action="admin.insert" method="POST" enctype="multipart/form-data">
        @csrf
  <div class="mb-3 mt-3">
    <label for="name" class="form-label">Name:</label>
    <input type="text" class="form-control"  placeholder="Product Name" name="name">
  </div>
  <div class="mb-3 mt-3">
    <label for="price" class="form-label">Price:</label>
    <input type="text" class="form-control"  placeholder="Product Price" name="price">
  </div>
  <div class="mb-3 mt-3">
    <label for="category" class="form-label">category:</label>
    <input type="text" class="form-control"  placeholder="Product Category" name="category">
  </div>
  <div class="mb-3 mt-3">
    <label for="category" class="form-label">description:</label>
    <input type="text" class="form-control"  placeholder="Product Description" name="description">
  </div>
  <div class="mb-3">
  <label for="img">Image:</label>
    <input type="file" class="form-control"  name="image"  accept=".png,.gif,.jpg" required>
  </div>
 
  <button type="submit" class="btn btn-primary">ADD</button>
</form>
{{Session('message')}}
</div>
</div>


     
  
@endsection