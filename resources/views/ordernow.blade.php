@extends('master')
@section("content")
<div class="custom-product">
    <div class="col-sm-10">
    <table class="table">
  
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Amount</td>
      <td>$ {{$total}}</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Tax</td>
      <td>$ 0</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Delivery</td>
      <td>$ 10</td>
    </tr>

  </tbod<tr>
      <th scope="row">3</th>
      <td>Total Amount</td>
      <td>$ {{$total+10}}</td>
    </tr>
</table>
<div>
<form action="/orderplace" method="POST"> 
    @csrf
  <div class="form-group">
    <textarea name="address" placeholder="Enter your address" class="form-control"></textarea>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Payment Method</label> <br> <br>
    <input type="radio" value="cash" name="payment"> <span>Online Payment</span> <br><br>
    <input type="radio" value="cash" name="payment"> <span>EMI Payment</span> <br> <br>
    <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br> <br>
  </div>
  <button type="submit" class="btn btn-primary">Order Now</button>
</form>
</div>
</div>
</div>
@endsection