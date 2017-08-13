@extends('back.layouts.default')

@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Blank Page
                        <small></small>
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-file"></i> Blank Page
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-12">
                    @if(Session::has('message'))
                    <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">

                    <p>Notifications</p>
                    <ul>
                        <li>1</li>
                        <li>2</li>
                        <li>3</li>
                    </ul>
                    <p>Events/Listeners</p>
                    <p>Queue</p>
                    <p>Service Container</p>
                    <p>Service Provider</p>
                    <p>Contracts/Interfaces</p>
                    <p>Errors</p>
                    <p>Exceptions</p>
                    <ul>
                        <li>Log to Sentry?</li>
                    </ul>
                    <p>Logging</p>
                    <ul>
                        <li>Log through events?</li>
                        <li>Log outside of events?</li>
                        <li>Log Viewer?</li>
                    </ul>
                    <p>Socialite/Google</p>
                    <p>API/Dingo?</p>
                    <p>Broadcasting</p>
                    <p>Mail</p>
                    <p>SMS</p>
                    <p>Repository</p>
                    <p>Code Examples</p>
                    <p>phpdoc</p>

                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <pre>
                        <code class="language-css">

                        </code>
                    </pre>

                </div>
            </div>
            <!-- /.row -->

            <div class="row">
                <div class="col-lg-12">
                    <table border="1">                   
                        @foreach ( $data as $key => $value )
                           <tr>
                             <td>{{ $key }}</td>
                             <td>{{ $value }}</td> 
                           </tr>
                        @endforeach
                     </table>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/back.js') }}"></script>

@stop