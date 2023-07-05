<?php
  use App\Http\Controllers\ProductController;
  $total=0;
  if(Session::has('user'))
  {
    $total=ProductController::cartItem();
  }
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <h1 class="mx-3">
        <a class="navbar-brand" href="/">EComm</a>
      </h1>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/myorders">Orders</a>
          </li>
        </ul>
        <form class="d-flex" action="/search" role="search">
          <div class="form-group">
            <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
          </div>
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right mx-4">
            @if(Session::has('user'))
            <li class="nav-item mx-4">
              <button class="btn btn-success"><a class="dropdown-item" href="/cartlist">Cart({{$total}}) </a></button>
            </li>
          <li class="nav-item">
              <button class="btn btn-outline-primary">
                <a class="dropdown-item" href="/logout">Logout</a>
              </button>
          </li>
          <li class="nav-item mx-4">
            <button class="btn btn-dark"> 
              {{Session::get('user')['name']}}
            </button>
        </li>
            @else
            <li class="mx-3">
              <button class="btn btn-outline-primary">
                <a class="dropdown-item" href="/login">Login</a>
              </button>
            </li>
            <li>
              <button class="btn btn-outline-primary">
                <a class="dropdown-item" href="/register">Register</a>
              </button>
            </li>
            @endif
        </ul>
      </div>
    </div>
  </nav>
