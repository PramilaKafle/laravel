@extends('admin.layout') 
@section('content')


<div class="container user-login">
    <div class="row">
    <form action="">
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
  <div class="mb-3">
    <label for="image" class="form-label">Picture:</label>
    <input type="" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me
    </label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection