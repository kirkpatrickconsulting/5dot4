            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/dashboard') }}">App Dashboard</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> {{ Auth::user()->email }} <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i> Profile</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li>
                        <a href="{{ url('/dashboard') }}"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="{{ url('/charts') }}"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="{{ url('/tables') }}"><i class="fa fa-fw fa-table"></i> Tables</a>
                    </li>
                    <li>
                        <a href="{{ url('/forms') }}"><i class="fa fa-fw fa-edit"></i> Forms</a>
                    </li>
                    <li>
                        <a href="{{ url('/bootstrapelements') }}"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
                    </li>
                    <li>
                        <a href="{{ url('/bootstrapgrid') }}"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
                    </li>
                    <li>
                        <a href="{{ url('/blankpage') }}"><i class="fa fa-fw fa-file"></i> Blank Page</a>
                    </li>
                    <li>
                        <a href="{{ url('/users') }}"><i class="fa fa-fw fa-file"></i> Users</a>
                    </li>
                    <li>
                        <a href="{{ url('/roles') }}"><i class="fa fa-fw fa-file"></i> Roles</a>
                    </li>
                    <li>
                        <a href="{{ url('/permissions') }}"><i class="fa fa-fw fa-file"></i> Permissions</a>
                    </li>
                    <li>
                        <a href="{{ url('/urls') }}"><i class="fa fa-fw fa-file"></i> URLs</a>
                    </li>
                    <li>
                        <a href="{{ url('/links') }}"><i class="fa fa-fw fa-file"></i> Links</a>
                    </li>
                    <li>
                        <a href="{{ url('/logs') }}"><i class="fa fa-fw fa-file"></i> Logs</a>
                    </li>
                    <li>
                        <a href="{{ url('/weather') }}"><i class="fa fa-fw fa-file"></i> Weather</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->