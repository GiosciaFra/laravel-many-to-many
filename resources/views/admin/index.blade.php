@extends('layouts.app')

@section('content')
    <div class="container py-5 text-center ">
        <h1>Admin page</h1>

        <h2 class="pt-5">Benvenuto {{$user->name}}</h2>

        <div class="pt-5 d-flex gap-5 justify-content-center ">
            
            <a href="{{route('admin.projects.index')}}" class="btn btn-outline-info p-3 ">Vai ai miei progetti</a>
            <a href="{{route('admin.types.index')}}" class="btn btn-outline-primary p-3 ">Vai alle mie tipologie di progetti</a>
            <a href="{{route('admin.technologies.index')}}" class="btn btn-outline-light p-3 ">Vai alle mie tecnologie</a>


        </div>
    </div>
@endsection