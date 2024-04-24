@extends('layouts/app')

@section('content')
<div class="container py-5 ">
    <h1 class="mb-3">Elenco dei tipi di progetto</h1>

    <table class="table mb-5 ">
        <thead>
            <tr>
                <th class="col">Nome</th>
                <th class="col">Descrizione</th>

                <th class="col"></th>
                <th class="col"></th>
            </tr>
         </thead>

         {{-- @dump($types) --}}
        <tbody>
            @foreach ($types as $type)
            <tr>

                <td>{{$type->name}}</td>
                <td>{{$type->description}}</td>
                <td><a href="{{route('admin.types.edit', $type->id)}}" class="btn btn-outline-primary">Modifica</a></td>
                <td><a href="{{route('admin.types.show', $type->id)}}" class="btn btn-outline-info">Mostra</a></td>

            </tr>
            @endforeach
        </tbody>
    </table>

    <a href="{{route('admin.types.create')}}" class="btn btn-primary">Aggiungi una tipologia!</a>
</div>
@endsection