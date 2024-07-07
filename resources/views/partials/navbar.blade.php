<nav class="navbar navbar-expand-lg navbar-dark">
    <div class="container justify-content-center">
      <a class="navbar-brand fs-4" href="/">VASTRA</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="sidebar offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header text-white border-bottom">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">VASTRA</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body d-flex flex-column flex-lg-row p-4 p-lg-0">
          <ul class="navbar-nav justify-content-center align-items-center fs-5 flex-grow-1 pe-3">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/home">Home</a>
            </li>
            <li class="nav-item mx-2">
              <a class="nav-link" href="#">News</a>
            </li>
            <li class="nav-item mx-2">
                <a class="nav-link" href="#">Stories</a>
            </li>
          </ul>

          {{-- Login/SignUp --}}
          <div class="nav-sign d-flex justify-content-center align-items-center gap-3">
            <a href="/login" class="login text-decoration-none">Sign In</a>
            <a href="/register" class="signup text-decoration-none px-3 py-1 rounded-4" style="background-color: #FFA800">Sign Up</a>
          </div>
        </div>
      </div>
    </div>
</nav>