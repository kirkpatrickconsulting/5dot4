@extends('back.layouts.default')

@section('content')

<div id="page-wrapper">

    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Users
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

                <h1>Show User</h1>

                {{ Form::model($user) }}

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

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email" class="control-label">E-Mail Address</label>

                    <div class="">
                        {{ Form::text('email', null, ['class' => 'form-control']) }}

                        @if ($errors->has('email'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('address1') ? ' has-error' : '' }}">
                    <label for="address1" class="control-label">Address 1</label>

                    <div class="">
                        {{ Form::text('address1', null, ['class' => 'form-control']) }}

                        @if ($errors->has('address1'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('address1') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('address2') ? ' has-error' : '' }}">
                    <label for="address2" class="control-label">Address 2</label>

                    <div class="">
                        {{ Form::text('address2', null, ['class' => 'form-control']) }}

                        @if ($errors->has('address2'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('address2') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                    <label for="city" class="control-label">City</label>

                    <div class="">
                        {{ Form::text('city', null, ['class' => 'form-control']) }}

                        @if ($errors->has('city'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('state') ? ' has-error' : '' }}">
                    <label for="state" class="control-label">State</label>

                    <div class="">
                        {{ Form::text('state', null, ['class' => 'form-control']) }}

                        @if ($errors->has('state'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('state') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('zip') ? ' has-error' : '' }}">
                    <label for="zip" class="control-label">Zip</label>

                    <div class="">
                        {{ Form::text('zip', null, ['class' => 'form-control']) }}

                        @if ($errors->has('zip'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('zip') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                    <label for="phone" class="control-label">Phone</label>

                    <div class="">
                        {{ Form::text('phone', null, ['class' => 'form-control']) }}

                        @if ($errors->has('phone'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
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
<script src="{{ asset('js/front.js') }}"></script>

@stop