@extends('layouts.app')


@section('content')

        <div class="panel panel-light" data-sortable-id="ui-widget-12">
                        <div class="panel-heading ui-sortable-handle">
                            <h4 class="panel-title">
                                Manajemen Pengguna
                            </h4>
                        </div>
                        <div class="col-md-12">
                          <div class="pull-left">
            <a class="btn btn-success" href="{{ route('users.create') }}"> Create New User</a>
        </div>
     
                        </div>
                           <br><br><br>
                        <div class="panel-body">
                          <div class="col-lg-12 margin-tb">
       
        
    

</div>
        </div>
</div>
<div class="panel panel-light">
                        <!-- begin panel-heading -->
                       <div class="row">
        <div class="panel panel-light" data-sortable-id="ui-widget-6">
                        <div class="panel-heading ui-sortable-handle">
                            <h4 class="panel-title">
                                Manajemen Pengguna
                            </h4>
                        </div>
                        <div class="col-md-12">
                        </div>
                           <br>   <br>   <br>
                        <div class="panel-body">
                          <div class="col-lg-12 margin-tb">
       
        
    </div>
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Edit New User</h2>
        </div>
        <div class="pull-right">
            
        </div>
    </div>
</div>
                        <!-- end panel-heading -->
                        <!-- begin panel-body -->
                        <div class="panel-body">
                            @if (count($errors) > 0)
  <div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
       @foreach ($errors->all() as $error)
         <li>{{ $error }}</li>
       @endforeach
    </ul>
  </div>
@endif


{!! Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id]]) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Email:</strong>
            {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Password:</strong>
            {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Confirm Password:</strong>
            {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Role:</strong>
            {!! Form::select('roles[]', $roles,$userRole, array('class' => 'form-control','multiple')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
    </div>
</div>
{!! Form::close() !!}
                        </div></div>

@endsection