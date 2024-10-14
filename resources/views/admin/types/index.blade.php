@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-12">
                <!-- Titolo e pulsante aggiunta progetto -->
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h1 class="fw-bold">Types List</h1>
                    <a href="{{ route('admin.types.create') }}" class="btn btn-primary btn-lg">
                        <i class="bi bi-plus-square me-2"></i> Add New Type
                    </a>
                </div>

                <!-- Tabella tipi -->
                <div class="table-responsive">
                    <table class="table table-hover table-striped align-middle shadow-sm">
                        <thead class="table-dark">
                            <tr>
                                <th class="text-center">ID</th>
                                <th class="text-center">Name</th>
                                <th class="text-end pe-5">Actions</th> <!-- Moved Actions column here -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($types as $type)
                                <tr class="border-bottom">
                                    <td class="text-center">{{ $type->id }}</td>
                                    <td class="fw-bold text-center">{{ $type->name }}</td>
                                    <td class="text-end"> <!-- Moved action buttons here -->
                                        <a href="{{ route('admin.types.show', ['type' => $type->id]) }}"
                                            class="btn btn-outline-primary btn-sm mx-1">
                                            <i class="bi bi-eye-fill fs-5"></i>
                                        </a>
                                        <a href="{{ route('admin.types.edit', ['type' => $type->id]) }}"
                                            class="btn btn-outline-warning btn-sm mx-1">
                                            <i class="bi bi-pen fs-5"></i>
                                        </a>

                                        <form action="{{ route('admin.types.destroy', ['type' => $type->id]) }}"
                                            method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger btn-sm mx-1 delete-type">
                                                <i class="bi bi-trash fs-5"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.types.modal_types')
@endsection
