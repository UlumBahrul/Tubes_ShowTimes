<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
    <div class="container">
      <a class="navbar-brand" href="/"><img src="/img/logo.png" width="50" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About")?'active': ''}}" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Category")?'active': ''}}" href="#">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Contact")?'active': ''}}" href="#">Contact</a>
          </li>
        </ul>
        
        <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item">
            <a href="/login" class="nav-link {{ ($title === "login")?'active': ''}}"><i class="bi bi-box-arrow-in-right"></i>Login</a>
          </li>
        </ul>
    
      </div>
    </div>
  </nav>

