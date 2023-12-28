@extends('layouts.app')


@section('content')
  <div class="panel panel-light" data-sortable-id="ui-widget-6">
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
                           <br>   <br>   <br>
                        <div class="panel-body">
                          <div class="col-lg-12 margin-tb">
       
        
    </div>
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
   <th>Email</th>
   <th>Roles</th>
   <th width="">Action</th>
 </tr>
 </thead>
  <tbody>
 @foreach ($data as $key => $user)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{ $user->name }}</td>
    <td>{{ $user->email }}</td>
    <td>
      @if(!empty($user->getRoleNames()))
        @foreach($user->getRoleNames() as $v)
           <label class="badge badge-success">{{ $v }}</label>
        @endforeach
      @endif
    </td>
    <td>
       <a class="btn btn-info" href="{{ route('users.show',$user->id) }}">Show</a>
       <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}">Edit</a>
        {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
    </td>
  </tr>
</tbody>
 @endforeach
</table>


{!! $data->render() !!}


<p class="text-center text-primary"><small> </small></p>
@endsection
                        </div></div>

            </div>
        </div>
    </div>