<!--navigation-->
<div class="container">
    <div class="navbar-wrapper">
        <div class="container">
            <nav class="navbar navbar-inverse navbar-static-top">
                <div class="container">
                  <div class="collapse navbar-collapse" id="app-navbar-collapse">
                        <!-- Left Side Of Navbar -->
                        <ul class="nav navbar-nav">
                           <li><a href="{{ url('/') }}">Home</a></li>
                        </ul>
                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li><a href="{{ url('/login') }}">Login</a></li>
                                <li><a href="{{ url('/register') }}">Register</a></li>
                            @else
								<li><a href="javascript:void(0)">{{ ucwords(Auth::user()->name) }}</a></li>
                                <li><a href="{{ url('/logout') }}">Logout</a></li>
                               
                            @endif
                        </ul>
                  </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!--/navigation-->