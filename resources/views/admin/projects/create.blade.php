@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0 text-center">Create New Project</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.projects.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <!-- Nome Progetto -->
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="name"><i class="bi bi-pencil-fill me-2"></i>
                                            Nome</label>
                                        <input class="form-control form-control-lg @error('name') is-invalid @enderror"
                                            type="text" name="name" id="name" value="{{ old('name') }}"
                                            placeholder="Inserisci il nome del progetto">
                                        @error('name')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Data Progetto -->
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="date"><i
                                                class="bi bi-calendar-date-fill me-2"></i> Data</label>
                                        <input class="form-control form-control-lg @error('date') is-invalid @enderror"
                                            type="date" name="date" id="date" value="{{ old('date') }}">
                                        @error('date')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                {{-- Tipo progetto --}}
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="" class="form-label">Seleziona tipo progetto</label>
                                        <select name="type_id" id="type" class="form-select form-select-lg">
                                            <option value="">-Seleziona un tipo-</option>
                                            @foreach ($types as $type)
                                                <option value="{{ $type->id }}">{{ $type->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                {{-- Tecnologie del progetto --}}
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label for="" class="control-label">Selezione Tecnologia</label>
                                        <div>
                                            @foreach ($technologies as $technology)
                                                <div class="form-check-inline">
                                                    <label for=""
                                                        class="form-check-label">{{ $technology->name }}</label>
                                                    <input type="checkbox" name="technologies[]" id=""
                                                        class="form-check-input" value="{{ $technology->id }}"
                                                        @checked(is_array(old('technologies')) && in_array($technology->id, old('technologies')))>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <!-- Descrizione Progetto -->
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="description"><i
                                                class="bi bi-chat-right-text-fill me-2"></i> Descrizione</label>
                                        <textarea name="description" id="description" cols="30" rows="3"
                                            class="form-control form-control-lg @error('description') is-invalid @enderror" placeholder="Descrivi il progetto">{{ old('description') }}</textarea>
                                        @error('description')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Immagine del Progetto -->
                                <div class="col-md-6">
                                    <div class="mb-4">
                                        <label class="form-label" for="image_project"><i class="bi bi-image-fill me-2"></i>
                                            Immagine del Progetto</label>
                                        <input
                                            class="form-control form-control-lg @error('image_project') is-invalid @enderror"
                                            type="file" name="image_project" id="image_project"
                                            placeholder="Inserisci il link dell'immagine">
                                        @error('image_project')
                                            <div class="text-danger"> {{ $message }} </div>
                                        @enderror
                                    </div>
                                </div>

                                <!-- Pulsante di Invio -->
                                <div class="col-12 d-flex justify-content-center mt-3">
                                    <button type="submit" class="btn btn-lg btn-success px-5">
                                        <i class="bi bi-save me-2"></i> Salva
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
