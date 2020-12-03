<nav class="navbar navbar-expand-lg navbar-light " style="background-color:#0f3b84;">

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="container">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link text-light" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-light" href="#">About</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0 ">
      @auth
        <ul class="navbar-nav ml-auto ">
          
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ url('/home') }}">Dashboard</a>
                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                  document.getElementById('logout-form').submit();">
                  {{ __('Logout') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
              </div>
              
          </li>
        </ul>
      @else
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link text-light" href="{{ route('login') }}">Login</a>
        </li>
          @if (Route::has('register'))
          <li class="nav-item active">
            <a class="nav-link text-light" href="{{ route('register') }}">Register</a>
          </li>
          @endif
      </ul>
      @endauth
    </form>
    </div>
  </div>
</nav>