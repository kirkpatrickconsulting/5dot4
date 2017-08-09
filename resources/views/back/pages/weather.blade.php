@extends('back.layouts.default')

@section('content')

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Weather
                    </h1>
                    <ol class="breadcrumb">
                        <li>
                            <i class="fa fa-dashboard"></i>  <a href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <li class="active">
                            <i class="fa fa-table"></i> Weather
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->

            <div class="row">
 
            <div id="weather"></div>
                
            </div>
            
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