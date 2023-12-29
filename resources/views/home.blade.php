@extends('layouts.app')

@section('content')

   
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
               
                <div class="jumbotron text-center bg-white">
                     <img src="{{ Storage::url('public/login-bg/home.png')}}" width="100" height="100">
                <h3 class="text-inverse" data-step="1" data-intro="Hello world! I'm Intro.js" data-hint="Hello world! I'm Intro.js" data-hintposition="top-middle" data-position="bottom-right-aligned">Selamat Datang</h3>
                <p class="lead m-b-20" data-step="2" data-intro="This is a simple step-by-step guide made using Intro.js" data-hint="This is a simple step-by-step guide made using Intro.js" data-hintposition="top-middle" data-position="bottom-right-aligned">Aplikasi Pengajuan Aplikasi Surat</p>
                
            </div>
            </div>
        </div>
 
@endsection
