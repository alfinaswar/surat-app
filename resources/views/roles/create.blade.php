@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New Role</h2>
        </div>
        <div class="pull-right">
      
        </div>
    </div>
</div>

<div class="panel panel-light" data-sortable-id="ui-widget-6">
                        <div class="panel-heading ui-sortable-handle">
                            <h4 class="panel-title">
                                Manajemen Role
                            </h4>
                        </div>
                        <div class="col-md-12">
                          <div class="pull-left">
            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
        </div>
     
                        </div>
                           <br>   <br>   <br>
                        <div class="panel-body">
                          <div class="col-lg-12 margin-tb">
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


{!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Permission:</strong>
            <br/>
            @foreach($permission as $value)
                <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                {{ $value->name }}</label>
            <br/>
            @endforeach
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
              <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
    </div>
</div>
{!! Form::close() !!}


<p class="text-center text-primary"><small> </small></p>
@endsection