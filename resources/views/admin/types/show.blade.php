@extends('layouts.app')

@section('content')
    <div class="container py-5 container-show">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-lg border-0 rounded-3">
                    <div class="card-body p-5">
                        <!-- Titolo -->
                        <h2 class="display-6 text-center mb-4 text-uppercase fw-bold">Dettagli Tipo</h2>

                        <!-- Tabella dettagli Tipo -->
                        <table class="table table-bordered table-hover shadow-sm rounded">
                            <tbody>
                                <tr>
                                    <th class="bg-light text-end w-50">Nome Tipo:</th>
                                    <td class="fw-bold">{{ $type->name }}</td>
                                </tr>
                            </tbody>
                        </table>

                        <!-- Pulsante di ritorno -->
                        <div class="text-center mt-5">
                            <a href="{{ route('admin.types.index') }}"
                                class="btn btn-primary btn-lg rounded-pill px-4 shadow">
                                <i class="bi bi-arrow-left me-2"></i> Torna alla lista
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
