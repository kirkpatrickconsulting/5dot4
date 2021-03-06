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
                        <i class="fa fa-table"></i> Show
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <div class="row">
            <div class="col-lg-6">

                <h1>Show URL</h1>

                {{ Form::model($url) }}
                <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                    <label for="title" class="control-label">Title</label>

                    <div class="">
                        {{ Form::text('title', null, ['class' => 'form-control']) }}

                        @if ($errors->has('title'))
                            <span class="help-block">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('url') ? ' has-error' : '' }}">
                    <label for="url" class="control-label">URL</label>

                    <div class="">
                        {{ Form::text('url', null, ['class' => 'form-control']) }}

                        @if ($errors->has('url'))
                            <span class="help-block">
                                <strong>{{ $errors->first('url') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
                    <label for="description" class="control-label">Description</label>

                    <div class="">
                        {{ Form::text('description', null, ['class' => 'form-control']) }}

                        @if ($errors->has('description'))
                            <span class="help-block">
                                <strong>{{ $errors->first('description') }}</strong>
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