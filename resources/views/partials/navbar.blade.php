<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
    <div class="container">
      <a class="navbar-brand" href="/"><img src="/img/logo.png" width="50" alt=""></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link {{ ($title === "About")?'active': ''}}" href="/about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Category")?'active': ''}}" href="/categories">Category</a>
          </li>
          {{-- <li class="nav-item">
            <a class="nav-link {{ ($title === "Contact")?'active': ''}}" href="/contact">Contact</a>
          </li> --}}
          <li class="nav-item">
            <a class="nav-link {{ ($title === "Post")?'active': ''}}" href="/posts">Galery</a>
          </li>
        </ul>
        
        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome back, {{ auth()->user()->name }}
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> My Dashboard</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
          @else
          <ul class="navbar-nav mb-2 mb-lg-0">
            <li class="nav-item">
              <a href="/login" class="nav-link {{ ($title === "login")?'active': ''}}"><i class="bi bi-box-arrow-in-right"></i>Login</a>
            </li>
          </ul>
          @endauth
        </ul>
  
    
      </div>
    </div>
  </nav>

