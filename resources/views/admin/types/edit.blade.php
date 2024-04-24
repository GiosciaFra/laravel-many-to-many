@extends('layouts/app')

@section('content')

<div class="container py-5">
    
    <h1 class="text-center">Modifica la tipologia</h1>

    <form action="{{route('admin.types.update', $type->id)}}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label for="name" class="form-label">Nome</label>
            <input type="text"  class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name') ?? $type->name}}">
              @error('name')
              <div class="invalid-feedback">
                  {{$message}}
              </div>
              @enderror
        </div>
        
        <div>
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description') ?? $type->description}}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
        </div>

        <div class="d-flex gap-5 justify-content-center mt-4">

          <button type="submit" class="btn btn-primary">Salva la tipologia</button>

          <a href="{{route('admin.types.index')}}" class="btn btn-outline-info">Torna alla lista delle tipologie</a>
        </div>
    </form>

@endsection