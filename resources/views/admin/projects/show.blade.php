@extends('layouts.app')

@section('content')
<div class="container py-5 d-flex flex-column justify-content-center w-50 ">
    <h1 class="text-center pb-4">{{$project->name}}</h1>

    <div class="mb-4 text-center">
        <img src="{{asset('storage/' . $project->img)}}" alt="Copertina immagine">
    </div>
    
    <p><strong>Descrizione: </strong>{{$project->description}}</p>
    <p><strong>Tipo di progetto: </strong>{{$project->type?->name}}</p>
    <p><strong>Link repo:</strong><a href="{{$project->url}}"></a></p>

    <div class="d-flex gap-2 mb-5">
        <strong>Tecnologie:</strong>
        @foreach ($project->technologies as $technology)
            
        <span class="badge rounded-pill" style="background-color: {{$technology->color ?? 'red'}}">{{$technology->name}}</span>
        @endforeach
    </div>

    <div class="d-flex justify-content-center gap-5 pt-5">

        <a href="{{route('admin.projects.index')}}" class="btn btn-outline-success">Torna alla lista dei progetti</a>
        <a href="{{route('admin.projects.edit', $project->id)}}" class="btn btn-outline-warning  ">Modifica il progetto</a>
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina questo progetto</button>
    </div>
    
    <!-- Modale -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina questo progetto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    Sei sicuro di voler eliminare questo progetto?
                    <br>
                    {{$project->name}}
                </div>


                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{route('admin.projects.destroy', $project->id)}}" method="POST">
                        @csrf
                        @method("DELETE")

                        <button class="btn btn-danger">Elimina</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


</div>
    
@endsection