@extends('layouts.app')


@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Role Management</h2>
        </div>
        <div class="pull-right">
        {{-- @can('role-create') --}}
            <a class="btn btn-success" href="{{ route('roles.create') }}"> Create New Role</a>
            {{-- @endcan --}}
        </div>
    </div>
</div>

        <div class="panel panel-light" data-sortable-id="ui-widget-12">
                        <div class="panel-heading ui-sortable-handle">
                            <h4 class="panel-title">
                                Manajemen Pengguna
                            </h4>
                        </div>
                        <div class="col-md-12">
     
                        </div>
                           <br><br><br>
                        <div class="panel-body">
                          <div class="col-lg-12 margin-tb">

       
        @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
@endif


<table id="data-table-combine" class="table table-striped table-bordered">
    <thead>
  <tr>
     <th>No</th>
     <th>Name</th>
     <th width="280px">Action</th>
  </tr>
  </thead>
  <tbody>
    @foreach ($roles as $key => $role)
    <tr>
        <td>{{ ++$i }}</td>
        <td>{{ $role->name }}</td>
        <td>
            <a class="btn btn-info" href="{{ route('roles.show',$role->id) }}">Show</a>
            @can('role-edit')
                <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}">Edit</a>
            @endcan
            @can('role-delete')
                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                {!! Form::close() !!}
            @endcan
        </td>
    </tr>
    </tbody>
    @endforeach
</table>


{!! $roles->render() !!}


<p class="text-center text-primary"><small> </small></p>
@endsection
    

</div>
        </div>
</div>
