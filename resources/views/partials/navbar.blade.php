<nav class="navbar navbar-expand-lg bg-light shadow-custom sticky-top">
    <div class="container">
      <a class="navbar-brand fw-bold text-p" href="/">atBlog</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link fw-bold {{ ($active === "Home") ? 'text-p' : ''}}"  href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold {{ ($active === "Blog") ? 'text-p' : ''}}"  href="/posts">Blog</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold {{ ($active === "Category") ? 'text-p' : ''}}" href="/categories">Category</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold {{ ($active === "Profile") ? 'text-p' : ''}}" href="/profile">Profile</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fw-bold {{ ($active === "About") ? 'text-p' : ''}}" href="/about">About</a>
          </li>
        </ul>
        

        <ul class="navbar-nav ms-auto">
          @auth
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Welcome Back, {{ auth()->user()->name}} 
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="/dashboard"><i class="fa-solid fa-bars-progress"></i> My Dashboard</a></li>
              <li><a class="dropdown-item" href="#"><i class="fa-solid fa-file-pen"></i> Create Post</a></li>
              <li><hr class="dropdown-divider"></li>
              <li>
                <form action="/logout" method="post" >
                  @csrf
                  <button type="submit" class="dropdown-item">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i> Log Out</a>
                  </button>
                </form>
              </li>
            </ul>
          </li>
          @else            
          <li class="nav-item">
            <a class="nav-link fw-bold {{ ($active === "Login") ? 'text-p' : ''}}" href="/login">
              <i class="fa-solid fa-arrow-right-to-bracket"></i> Login
            </a>
          </li>
          @endauth
        </ul>
      </div>
    </div>
</nav>