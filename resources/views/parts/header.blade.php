<header id="header" id="home">
    <div class="container">
      <div class="row align-items-center justify-content-between d-flex">
        <div id="logo">
          <a href="index.html"><img src="img/logo.png" alt="" title="" /></a>
        </div>
        <nav id="nav-menu-container">
          <ul class="nav-menu">
            @if(Auth::guest())
            <li class="menu-has-children"><a href="#">Sign Up</a>
              <ul>
                  <li><a href="#" data-href="{{ url('api/register/employer') }}" data-toggle="modal" data-target="#modalForm" title="Register as Employer">Employer Account</a></li>
                  <li><a href="#" data-href="{{ url('api/register/applicant') }}" data-toggle="modal" data-target="#modalForm" title="Register as Applicant">Applicant Account</a></li>
              </ul>
            </li>
            <li><a href="#" id="login-link" class="ticker-btn" data-href="{{ url('api/login') }}" data-toggle="modal" data-target="#modalForm" title="Login">Login</a></li>
            @else
            <li class="menu-has-children"><a href="#">{{Auth::user()->getFullName()}}</a>
                <ul>
                    <li onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        <a href="{{ url('/logout') }}" >
                            Logout</a>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                                {{ csrf_field() }}
                            </form>
                    </li>
                </ul>
            </li>
            @endif
          </ul>
        </nav><!-- #nav-menu-container -->
      </div>
    </div>
  </header><!-- #header -->
