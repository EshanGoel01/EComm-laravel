@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-10 my-5">
        <table class="table">
            <tr>
                <td>Amount</td>
                <td>Rs. {{$total}}</td>
            </tr>
            <tr>
                <td>Tax</td>
                <td>Rs. 0</td>
            </tr>
            <tr>
                <td>Delivery</td>
                <td>Rs. 10</td>
            </tr>
            <tr>
                <td>Total Amount</td>
                <td>Rs. {{$total+10}}</td>
            </tr>
        </table>
    </div>
    <div>
        <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group">
              <textarea name="address" id="address" cols="50" rows="5" placeholder="Enter your address" ></textarea>
            </div>
            <br><br>
            <div class="form-group">
              <label for="payment">Payment Method: </label><br>
              <input type="radio" value="cash" name="payment"><span>Online Payment</span><br>
              <input type="radio" value="cash" name="payment"><span>EMI Payment</span><br>
              <input type="radio" value="cash" name="payment"><span>Cash On Delivery</span><br><br>

            </div>
            
            <button type="submit" class="btn btn-primary">Order Now</button>
          </form>
    </div>
</div>

@endsection
