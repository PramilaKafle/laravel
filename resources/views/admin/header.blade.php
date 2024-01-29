@php  
use App\Http\Controllers\ProductController;

$total=ProductController::cartItem();


@endphp


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
        <a class="nav-link" href="admin.dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
        <a href="/admin.category" class="nav-link">  Category</a>
        </li>
      
      </ul>
      <span class="navbar-text">
      <a class="nav-link" href="/admin.logout"><button class="btn btn-primary" type="button" >Logout</button></a>
      </span>
    </div>
  </div>
</nav>