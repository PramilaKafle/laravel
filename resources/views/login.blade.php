@extends('master') 
@section('content')





<div class="container user-login">
    <div class="row">
        <div class="col-sm-4 mx-auto">
            <form action="login" method="POST">
                <div class="mb-3 mt-3">
                    @csrf
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>
                <div class="mb-3">
                    <label for="pwd" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
                </div>
              
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
            {{session('loginerror')}}
        </div>
    </div>
</div>


@endsection