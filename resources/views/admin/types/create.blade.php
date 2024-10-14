@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm border-0">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0 text-center">Create New Type</h3>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.types.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <!-- Nome Tipo -->
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
