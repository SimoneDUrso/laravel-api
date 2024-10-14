@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        <div class="container py-5 text-center">
            <h1 class="display-4 fw-bold">
                Benvenuti nel Sistema di Gestione Portfolio
            </h1>

            <p class="lead col-md-8 mx-auto mt-4">
                Questo sistema ti consente di gestire e visualizzare facilmente tutti i tuoi progetti in un unico posto.
                Aggiungi, modifica e organizza il tuo portfolio con semplicità.
            </p>

            <a href="{{ route('admin.projects.index') }}" class="btn btn-primary btn-lg mt-3" type="button">Accedi al
                Portfolio</a>
        </div>
    </div>

    <div class="content">
        <div class="container text-center">
            <p class="mt-5">
                Gestisci i tuoi progetti in modo efficiente e tieni traccia dei dettagli, immagini e descrizioni. Dai vita
                al tuo portfolio professionale!
            </p>
        </div>
    </div>
@endsection
