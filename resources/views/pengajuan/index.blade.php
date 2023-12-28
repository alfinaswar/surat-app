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
            <a class="btn btn-success" href="{{ route('pengajuan.create') }}"> Ajukan Surat</a>
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
   <th>No Surat</th>
   <th>Perihal</th>
   <th>Status</th>
   <th width="">Action</th>
 </tr>
 </thead>
  <tbody>
 @foreach ($data as $key => $surat)
  <tr>
    <td>{{ ++$i }}</td>
    <td>{{$surat->no_surat}}</td>
    <td>{{ $surat->perihal }}</td>
     <td> @if ($surat->status == 1)
       Baru diajukan
     @elseif($surat->status == 2)
       Diterima
      @else
      Ditolak
     @endif
     </td>
    </td>
    <td>
       <a class="btn btn-info" href="{{ route('pengajuan.show',$surat->id) }}" target="_blank">Print</a>
       <a class="btn btn-primary" href="{{ route('pengajuan.edit',$surat->id) }}">Lihat</a>
        {!! Form::open(['method' => 'DELETE','route' => ['pengajuan.destroy', $surat->id],'style'=>'display:inline']) !!}
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