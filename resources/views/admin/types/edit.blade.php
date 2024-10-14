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

        <form action="{{ route('admin.types.update', ['type' => $type->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="row gy-4">

                <div class="col-12 d-flex flex-column align-items-center">
                    <label for="name" class="form-label">Nome Tipo</label>
                    <input value="{{ old('name', $type->name) }}" type="text"
                        class="form-control rounded-pill @error('name') is-invalid @enderror" name="name" id="name"
                        placeholder="Nome">
                    @error('name')
                        <div class="text-danger"> {{ $message }} </div>
                    @enderror
                </div>

                {{-- Tipo progetto --}}
                <div class="col-md-6">
                    <div class="mb-4">
                        @error('type_id')
                            <span class="text-danger"> {{ $message }} </span>
                        @enderror
                    </div>
                </div>

                <div class="col-12 text-center">
                    <button type="submit" class="btn btn-success btn-lg rounded-pill px-5">Salva</button>
                    <a href="{{ route('admin.types.index') }}" class="btn btn-primary btn-lg rounded-pill">Torna
                        indietro</a>
                </div>
            </div>
        </form>
    </div>
@endsection
