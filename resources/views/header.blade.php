<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Navbar</a>
      <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active">Orders</a>
          </li>
        </ul>
        <form class="d-flex" action="/search" role="search">
          <div class="form-group">
            <input class="form-control me-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
          </div>
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        <ul class="nav navbar-nav navbar-right mx-4">
            <li class="nav-item">
                <button class="btn btn-success">Add to Cart</button>
            </li>
        </ul>
      </div>
    </div>
  </nav>
