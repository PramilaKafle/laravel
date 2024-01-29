@extends('master') 
@section('content')



<div class="container mt-3">
<div class="col-sm-10">
  <a href="cartlist" >GoBack </a>
<table class="table ">
    <tbody>  
         <tr>

<td>Amount</td>
<td>${{$total}}</td>
</tr>
<tr>

<td>Tax</td>
<td>$0</td>
</tr>
<tr>
<td>Delivery</td>
<td>$10</td>
</tr>

<tr>
<td>Total Amount</td>
<td>${{$total + 10}}</td>
</tr>
    </tbody>
   
  </table>
  <div>
  <form action="/orderplace" method="POST">
    @csrf
  <div class="mb-3 mt-3">
   
    <textarea class="form-control" placeholder="Enter Your Address" name="address"></textarea>
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Payment Method</label><br></br>
    <input type="radio"name="payment" value="cash"><span>Khalti</span>&nbsp;&nbsp;
    <input type="radio" name="payment" value="cash"><span>Esewa</span>&nbsp;&nbsp;
    <input type="radio"  name="payment" value="cash"><span>Credit card</span>&nbsp;&nbsp;
    <input type="radio"  name="payment" value="cash"><span>Cash on delivery</span>&nbsp;
  </div>
  <button type="submit" class="btn btn-primary">Order Now</button>
</form>
  </div>
</div>

</div>



@endsection