@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-auto p-5">
            <div class="card overflow-hidden" style="width: @if($project->image) 32rem; @else 20rem; @endif ">
                <div class=" d-flex">
                    <div class="@if($project->image) w-50 @else w-100 @endif">
                        <div class="card-header">
                            <b>Nome progetto:</b><br>{{ $project->name }}
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><b>Data di completamento:</b><br>{{ $project->completion_date }}</li>
                            <li class="list-group-item"><b>Autore:</b><br>{{ $project->author }}</li>
                        </ul>
                    </div>
                    @if ($project->image)
                    <div class="w-50">
                        <figure class="m-0 p-0 w-100 h-100">
                            <img src="..." class="object-fit-cover object-position-center rounded-end" alt="...">
                        </figure>
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="text-center">
        <a href="{{ route('dashboard') }}" class="btn btn-secondary">Torna alla dashboard</a>
    </div>
</div>
@endsection