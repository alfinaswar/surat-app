@extends('layouts.app')


@section('content')
<header class="page-header">

    <div class="right-wrapper text-left">
        <ol class="breadcrumbs">
           
        </ol>
    </div>
	
	<style>
		hr{
		   display: block;
		   margin-top: 0em;
		   margin-bottom: 0em;
		   margin-left: auto;
		   margin-right: auto;
		   border-top: 1px solid black;
		}
		
		input{
			width:97%;
			height:auto;
			border:0px dotted #f30; 
			border-radius:4px; 
			-moz-border-radius:8px;			
			margin-right:0px;
			//font-family:Garamond;
			//background:#363;
		}
		
		.myinput{
			width:97%;
			height:auto;
			border:0px solid #000;
			border-radius:0px; 
			-moz-border-radius:8px;
			margin-left:0px;
			background:#b7d5ac;
		}
		
		.myselect{
			width:97%;
			height:auto;
			border:0px solid #000; 
			border-radius:4px; 
			-moz-border-radius:8px;
			margin:0px;
			//background:#b7d5ac;
		}
		
		.mydiv br {
			display: none;
		}
		
		.mydiv p {
			padding: 0;
			margin: 0;
		}
	</style>
</header>
<div class="col-xl-10 mb-8 mb-xl-0;" style=" margin: auto;">
	<div class="card-body" style="background-color:#FFFFFF; padding:5%;">
	    <div class="table-responsive">
        <div class="text-center mt-0">
            <h2><font color='#000000' face='Times New Roman'>Pengajuan SKHP</font></h2>
        </div>
		<font color='#000000'>
            <form action="{{ route('pengajuan.store') }}" method="POST">
                @csrf
			<table id="tbl_1" style="font-family:Times New Roman; font-size:15px" border="0" width="100%" color="red">
				<tr>
					<td colspan="3" style="text-align:left">
						<font color='#000000'>Dengan ini saya mengajukan permintaan surat keterangan hasil penelitian sebagai berikut :</font>
					</td>
				</tr>
				<tr>					
						
					</font>
					<td rowspan="10" width="7%"></td>
					<tr>
						<td>Nomor</td>
						<td>:<input type="text" name="no_surat" value="B / {{$id}} / VIII / HUK.12.10/ 2023 / SIPROPAM  " id="no_surat" placeholder="&nbsp; " required></td>
					</tr>
					<tr>
						<td>Klasifikasi </td>
						<td>:<input type="text" name="klasifikasi" id="klasifikasi" placeholder=" &nbsp;Ketik Klasifikasi Surat" required></td>
					</tr>
					<tr>
						<td>Lampiran </td>
						<td>:<input type="text" name="lampiran" id="Lampiran" placeholder=" &nbsp;Ketik Lampiran Surat" required></td>
					</tr>
					<tr>
						<td>Perihal </td>
						<td>:<input type="text" name="perihal" id="perihal" placeholder=" &nbsp;Ketik Jenis Perihal Surat" required></td>
					</tr>
					<tr>
						<td>Provinsi</td>
						<td>:<input type="text" name="provinsi" id="provinsi" placeholder=" &nbsp;Ketik Provinsi Anda" required></td>
					</tr>
					<tr>
						<td>Kota </td>
						<td>:<input type="text" name="kota" id="kota" placeholder=" &nbsp;Ketik Kota" required></td>
					</tr>

					<tr>
						<td><font color="white">i </font></td>
					</tr>
				</tr>
			</table>
		
			<table id="myTable1" style="font-family:Times New Roman; font-color:black; font-size:15px" border="1" width="100%">
                        <thead>
                            <tr>
                                <th style="text-align:center" bgcolor="#C6DEFF" width="10%"> NAMA</th>
                                <th style="text-align:center" bgcolor="#C6DEFF" width="15%"> PANGKAT </th>
                                <th style="text-align:center" bgcolor="#C6DEFF" width="25%"> NRP </th>
                                <th style="text-align:center" bgcolor="#C6DEFF" width="25%"> JABATAN</th>
                                <th style="text-align:center" bgcolor="#C6DEFF" width="5%"> KETERANGAN </th>
                                
                            </tr>
                        </thead>
                        <tbody>
								<tr>
                                    <td>
                                    	<input type="text" name="nama" Style="width:100%">
                                    </td>
                                    <td style="text-align:center">
										<input type="text" name="pangkat" Style="width:100%; text-align:center" >										
									</td>
                                    <td>
                                    	<input type="text" name="nrp" Style="width:100%">
                                    </td>
                                    <td>
                                    	<input type="text" name="jabatan" Style="width:100%">
                                    </td>
                                    
                                    <td>
                                    	<input type="text" name="keterangan" Style="width:100%">
                                    </td>
                                </tr>
						
                        </tbody>
					</table>
			
            <table id="tbl_3" border="0" style="width:100%; font-family:Times New Roman; font-color:black; font-size:15px;">
				<tbody>
					<tr>
						<td height="20px"></td>
					</tr>
					<tr style="height: 35px;">
						
					</tr>
					<tr style="height: 18px;">
						<td style="text-align:center; width:25.5%;" colspan="2"></td>
						<td style="text-align:center; width:49%;" colspan="3"> </td>
						<td style="text-align:center; width:25.5%;" colspan="2"><b>Dibuat Oleh,</b></td>
					</tr>
					<tr style="height:60px;">

						<td style="text-align:center; width:23%;"></td>
						<td style="text-align:center; width:2.5%;"></td>
						<td style="text-align:center; width:23%;"> </td>
						<td style="text-align:center; width:2%;"></td>
						<td style="text-align:center; width:24%;"> </td>
						<td style="text-align:center; width:2.5%;"></td>
						<td style="text-align:center; width:23%;"><?php echo'<img src="" height="70">';?></td>
					</tr>
					<tr>
						<td style="text-align:center; "></td>
						<td style="text-align:center; "></td>
						<td style="text-align:center; "></td>
						<td style="text-align:center; "></td>
						<td style="text-align:center; "></td>
						<td style="text-align:center; "></td>
						<td style="text-align:center; "><hr></hr></td>
					</tr>
					<tr>
						<td style="text-align:center; vertical-align:top;"></td>
						<td style="text-align:center; "></td>
						<td style="text-align:center; vertical-align:top;"></td>
						<td style="text-align:center; "></td>
						<td style="text-align:center; vertical-align:top;"></td>
						<td style="text-align:center; "></td>
						<td style="text-align:center; vertical-align:top;"><i></i></td>
					</tr>
				</tbody>
				
			</table>
            
			</div>
		
			<br><br>
		<div role="document">
			<button type="submit" class="btn btn-success btn-save float-right btn-ajukan" style="margin-left:12px;"> <i class="fas fa-check"></i> Ajukan </button>
        </div>
		<br><br>
		</div>
		</form>
    </div>	
</div>
{{-- <div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Create New User</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('users.index') }}"> Back</a>
        </div>
    </div>
</div>


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



{!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
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
    
    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
{!! Form::close() !!}


<p class="text-center text-primary"><small> </small></p> --}}
@endsection