@extends('layouts.app')

@section('content')

<div class="container py-5">
    
    <h1 class="text-center">Crea una nuova tecnologia</h1>

    <form action="{{route('admin.technologies.store')}}" method="POST" class="d-flex flex-column gap-4 ">
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
            <label for="color" class="form-label">Colore</label>
            <input type="color" class="form-control form-control-color  @error('color') is-invalid @enderror" id="color" name="color" value="{{old('color')}}">
                @error('color')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
                @enderror
        </div>


        <div class="d-flex gap-5 justify-content-center">
          <button type="submit" class="btn btn-outline-success mt-4 ">Aggiungi la tecnologia</button>
          <a href="{{route('admin.technologies.index')}}" class="btn btn-outline-info mt-4">Torna alle tecnologie</a>
        </div>
    </form>

@endsection