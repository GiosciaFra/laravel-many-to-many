@extends('layouts/app')

@section('content')
<div class="container py-5 ">
    <h1 class="mb-3">Elenco dei tipi di tecnologie</h1>

    <table class="table mb-5 ">
        <thead>
            <tr>
                <th class="col">Nome</th>
                <th class="col">Colore</th>

                <th class="col"></th>
                <th class="col"></th>
            </tr>
         </thead>

         {{-- @dump($technologies ) --}}
        <tbody>
            @foreach ($technologies  as $technology)
            <tr>

                <td>{{$technology->name}}</td>
                <td>{{$technology->color}}</td>
                <td><a href="{{route('admin.technologies.edit', $technology->id)}}" class="btn btn-outline-primary">Modifica</a></td>
                <td><a href="{{route('admin.technologies.show', $technology->id)}}" class="btn btn-outline-info">Mostra</a></td>

            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{route('admin.technologies.create')}}" class="btn btn-primary me-3">Aggiungi una tecnologia!</a>
    <a href="{{route('admin.projects.index')}}" class="btn btn-info me-3">Vai ai miei progetti</a>
    <a href="{{route('admin.types.index')}}" class="btn btn-light ">Vai alle mie tipologie di progetti</a>



</div>
@endsection