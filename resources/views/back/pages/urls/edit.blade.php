@extends('back.layouts.default')

@section('content')

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    URLs
                </h1>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-dashboard"></i>  <a href="{{ url('/dashboard') }}">Dashboard</a>
                    </li>
                    <li class="active">
                        <i class="fa fa-table"></i> Edit
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->  
        
        <div class="row">
            <div class="col-lg-6">

                <h1>Edit URL</h1>

                {{ Form::model($url, array('method' => 'PATCH', 'route' => array('urls.update', $url->id))) }}
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="name" class="control-label">Name</label>

                        <div class="">
                            {{ Form::text('name', null, ['class' => 'form-control']) }}

                            @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('link') ? ' has-error' : '' }}">
                        <label for="link" class="control-label">Link</label>

                        <div class="">
                            {{ Form::text('link', null, ['class' => 'form-control']) }}

                            @if ($errors->has('link'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('link') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('panel') ? ' has-error' : '' }}">
                        <label for="panel" class="control-label">Panel</label>

                        <div class="">
                            {{ Form::text('panel', null, ['class' => 'form-control']) }}

                            @if ($errors->has('panel'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('panel') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                        {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
                        {{ link_to_route('urls.index', 'Cancel', $url->id, array('class' => 'btn')) }}
                        </div>
                    </div>

                {{ Form::close() }}       
            
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