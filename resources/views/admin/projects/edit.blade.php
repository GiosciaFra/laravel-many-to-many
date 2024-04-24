@extends ('layouts.app')

@section('content')

<div class="container py-5">
    <h1 class="text-center">Modifica il progetto </h1>

    <form action="{{route('admin.projects.update', $project->id)}}" method="POST" class="d-flex flex-column gap-4 " >
        @csrf
        @method('PUT')


        <div>
          <label for="name" class="form-label">Nome progetto</label>
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value='{{old('name') ?? $project->name}}' >
            @error('name')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div>
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="textarea" class="form-control @error('description') is-invalid @enderror" id="description" name="description" > {{old('description') ?? $project->description}}</textarea>
             @error('description')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div>
            <label for="img" class="form-label">Aggiungi una URL per inserire la copertina</label>
            <input type="text" class="form-control @error('img') is-invalid @enderror" id="img" name="img" value='{{$project->img}}'>
             @error('img')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div>
            <label for="used_technologies" class="form-label">Tecnologie utilizzate</label>
            <textarea type="textarea" class="form-control @error('used_technologies') is-invalid @enderror" id="used_technologies" name="used_technologies" > {{old('used_technologies') ?? $project->used_technologies}}</textarea>
             @error('used_technologies')
                <div class="invalid-feedback">
                    {{$message}}
                </div>
            @enderror
        </div>

        <div>
            <label for="url" class="form-label">Link repo</label>
            <input type="text" class="form-control @error('url') is-invalid @enderror" id="url" name="url" value='{{old('url') ?? $project->url}}' >
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
                    <option value="{{$type->id}}" {{ $type->id == old('type_id', $project->type ? $project->type->id : '') ? 'selected' : '' }}>
                        {{$type->name}}
                    </option>
                @endforeach
            </select>
        </div>



        <div class="d-flex gap-5 justify-content-center mt-4 ">

            <button type="submit" class="btn btn-outline-success ">Salva la tua modifica</button>

            <a href="{{route('admin.projects.index')}}" class="btn btn-outline-info">Torna alla lista dei progetti</a>
        </div>

    </form>
</div>
</div>
    
@endsection