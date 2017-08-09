        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">App Home Page</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="{{ url('/contact') }}">Contact</a>
                    </li>
                    @if (Auth::user())
                    <li>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    @endif
                    <li class="dropdown">
                        @if (Auth::guest())
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> Guest <b class="caret"></b></a>
                        @else
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->email }} <b class="caret"></b></a>
                        @endif
                    <ul class="dropdown-menu">
                        @if (Auth::guest())
                        <li><a href="{{ url('/login') }}"><i class="fa fa-fw fa-power-off"></i> Login</a></li>
                        <li><a href="{{ url('/register') }}"><i class="fa fa-fw fa-power-off"></i> Register</a></li>
                        @else
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                        @endif
                    </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->