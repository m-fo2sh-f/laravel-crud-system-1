@extends('Layout')

@section('title')
    Home
@endsection

@section('header')
    <div class="col-sm-6">
        <h1 class="m-0 text-dark">Home</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
            <li class="breadcrumb-item active">Starter Page</li>
        </ol>
    </div><!-- /.col -->
@endsection
@section('content')
    <img src="{{ asset('admin/imgs/mainImage.jpg') }}" alt="not found" style="width: 100%; height: 500px;">
@endsection
