@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-auto p-5">
            <div class="card" style="width: 20rem;">
                <div class="card-header">
                <b>Nome progetto:</b><br>{{ $project->name }}
                </div>
                <ul class="list-group list-group-flush">
                <li class="list-group-item"><b>Data di completamento:</b><br>{{ $project->completion_date }}</li>
                <li class="list-group-item"><b>Autore:</b><br>{{ $project->author }}</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Torna alla dashboard</a>
    </div>
</div>
@endsection