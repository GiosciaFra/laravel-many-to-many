@extends('layouts.app')

@section('content')

<div class="container py-5">
    
    <h1 class="text-center">Crea una nuova tipologia</h1>

    <form action="{{route('admin.types.store')}}" method="POST">
        @csrf

        <div>
            <label for="name" class="form-label">Nome</label>
            <input type="text"  class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name')}}">
              @error('name')
              <div class="invalid-feedback">
                  {{$message}}
              </div>
              @enderror
        </div>   

        <div>
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description')}}</textarea>
                @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
        </div>


        <div class="d-flex gap-5 justify-content-center">
          <button type="submit" class="btn btn-outline-success mt-4 ">Aggiungi la tipologia</button>
          <a href="{{route('admin.types.index')}}" class="btn btn-outline-info mt-4">Torna alle tipologie</a>
        </div>
    </form>

@endsection