@extends('master')
@section('content')
<div class="container my-5 custom-login">
    <div class="row">
        <div class="col-6">
            <form class="login-form" action="/register"  method="POST">
                @csrf
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">User Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Username" id="exampleInputEmail1" aria-describedby="emailHelp">
                  </div>
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" name="email" class="form-control" placeholder="Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password"  name="password" class="form-control" placeholder="Password" id="exampleInputPassword1">
                </div>
                <br><br>
                <button type="submit" class="btn btn-primary">Register</button>
              </form>
        </div>
    </div>
      
</div>
@endsection