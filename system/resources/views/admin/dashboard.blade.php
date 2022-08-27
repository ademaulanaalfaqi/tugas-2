@extends('admin.base')

@section('content')
    <h1>
        @if(Auth::check())
          Selamat Datang {{request()->user()->nama}}
        @else
          
        @endif
    </h1>
@endsection