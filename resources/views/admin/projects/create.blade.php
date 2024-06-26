@extends('layouts.app')

@section('content')

<div class="container  py-5">
    <h1 class="text-center">Aggiungi un progetto</h1>

    <form action="{{route('admin.projects.store')}}" method="POST" enctype="multipart/form-data" class="d-flex flex-column gap-4 " >
        @csrf

        <div>
          <label for="title" class="form-label">Nome progetto</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
            @error('name')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div>
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="textarea" class="form-control @error('description') is-invalid @enderror" id="description" name="description" >{{old('description')}}</textarea>
            @error('description')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div>
            <label for="img" class="form-label">Aggiungi un'immagine di copertina  </label>
            <input type="file" class="form-control @error('img') is-invalid @enderror" id="img" name="img">
            @error('img')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div>
            <label for="url" class="form-label">Link repo</label>
            <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url" value="{{old('url')}}">
            @error('url')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror
        </div>

        <div>
            <label for="type_id">Tipologia</label>
            <select class=" form-select mt-2" name="type_id" id="type_id">
                <option value=""></option>
                @foreach ($types as $type)
                    <option value="{{$type->id}}" {{$type->id == old('type_id') ? 'selected' : ''}}>{{$type->name}}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="type_id">Tecnologie</label>

            <div class="d-flex gap-4">
                @foreach ($technologies as $technology)

                    <div class="form-check">
                        <input
                        type="checkbox" 
                        name="technologies[]" 
                        value="{{$technology->id}}" 
                        id="technology-{{$technology->id}}" 
                        class="form-check-input"
                        {{ in_array($technology->id, old('technologies', [])) ? 'checked' : '' }}
                        >
                        <label class="form-check-label">{{$technology->name}}</label>
                    </div>
                    
                @endforeach
            </div>
        </div>

        <div class="d-flex gap-5 justify-content-center  ">
            <button type="submit" class="btn btn-outline-success mt-4 ">Aggiungi Progetto</button>
            <a href="{{route('admin.projects.index')}}" class="btn btn-outline-info mt-4">Torna ai miei progetti</a>
        </div>
    </form>

</div>
    
@endsection