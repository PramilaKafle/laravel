@php  
use App\Http\Controllers\ProductController;

$total=ProductController::cartItem();


@endphp

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">Logo</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Contact US</a>
        </li>
      </ul>
      <div class="d-flex">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
      <a class="nav-link" href="/cartlist">Cart({{$total}})</a>
</li>
</ul>
@if(Session::has('user'))
<li class=" navbar-nav me-auto nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="" role="button" data-bs-toggle="dropdown">{{Session::get('user')['name']}}</a>
  <ul class="dropdown-menu">
    <li><a class=" logout-btn" href="/logout" style="text-decoration:none; color:black;">Logout</a></li>
  
  </ul>
</li>

@else

<a href="/login"><button class="btn btn-primary" type="button">Login</button></a>
<a href="/register"><button class="btn btn-primary" type="button">Register</button></a>
    @endif
</div>
    </div>
  </div>
</nav>