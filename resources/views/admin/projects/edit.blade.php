@extends('layouts.app')

@section('content')
    <div class="container edit mt-5">
        {{-- @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-unstyled m-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif --}}

        <form action="{{ route('admin.projects.update', ['project' => $project->id]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row gy-4">

                <div class="col-12 col-md-6">
                    <label for="name" class="form-label">Nome Progetto</label>
                    <input value="{{ old('name', $project->name) }}" type="text"
                        class="form-control rounded-pill @error('name') is-invalid @enderror" name="name" id="name"
                        placeholder="Nome">
                    @error('name')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="col-12 col-md-6">
                    <label for="date" class="form-label">Data di Creazione</label>
                    <input value="{{ old('date', $project->date) }}" type="date" class="form-control rounded-pill"
                        name="date" id="date">
                    @error('date')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                {{-- Tipo progetto --}}
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="" class="form-label">Seleziona tipo progetto</label>
                        <select name="type_id" id="type" class="form-select form-select-lg">
                            <option value="">-Seleziona un tipo-</option>
                            @foreach ($types as $type)
                                <option value="{{ $type->id }}" @selected($type->id == old('type_id'))>{{ $type->name }}
                                </option>
                            @endforeach
                        </select>
                        @error('type_id')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>

                {{-- Tecnologie del progetto --}}
                <div class="col-md-6">
                    <div class="mb-4">
                        <label for="" class="control-label">Selezione Tecnologia</label>
                        <div>
                            @foreach ($technologies as $technology)
                                <div class="form-check-inline">
                                    @if ($errors->any())
                                        <input type="checkbox" name="technologies[]" id="" class="form-check-input"
                                            value="{{ $technology->id }}"
                                            {{ in_array($technology->id, old('technologies') ? 'checked' : '') }}>
                                    @else
                                        <label for="" class="form-check-label">{{ $technology->name }}</label>
                                        <input type="checkbox" name="technologies[]" id="" class="form-check-input"
                                            value="{{ $technology->id }}"
                                            {{ $project->technologies->contains($technology->id) ? 'checked' : '' }}>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <label for="image_project" class="form-label">Immagine progetto</label>
                    <input type="file" class="form-control rounded-pill" name="image_project" id="image_project"
                        placeholder="URL Immagine progetto">
                    @error('image_project')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="col-12 col-md-6">
                    <label for="description" class="form-label">Descrizione Progetto</label>
                    <input value="{{ old('description', $project->description) }}" type="text"
                        class="form-control rounded-pill" name="description" id="description" placeholder="Tipo">
                    @error('description')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success btn-lg rounded-pill px-5">Salva</button>
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary btn-lg rounded-pill">Torna
                        indietro</a>
                </div>
            </div>
        </form>
    </div>
@endsection
