@extends('layouts.app')

@section('content')
<div class="container py-5 d-flex flex-column justify-content-center w-50 ">
    <h1 class="text-center pb-4">{{$technology->name}}</h1>
    
    <p><strong>Colore </strong>{{$technology->color}}</p>
   

    <div class="d-flex justify-content-center gap-5 pt-5">

        <a href="{{route('admin.technologies.index')}}" class="btn btn-outline-success">Torna alla lista delle tecnologie</a>
        <a href="{{route('admin.technologies.edit', $technology->id)}}" class="btn btn-outline-warning  ">Modifica la tecnologia</a>
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Elimina questa tecnologia</button>
    </div>
    
    <!-- Modale -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered ">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Elimina questa tecnologia</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    Sei sicuro di voler eliminare questa tecnologia?
                    <br>
                    {{$technology->name}}
                </div>


                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                    <form action="{{route('admin.technologies.destroy', $technology->id)}}" method="POST">
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