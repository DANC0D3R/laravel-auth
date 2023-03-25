@extends('layouts.app')

@section('content')
<div class="container">
    <form action="{{route('admin.projects.store')}}" method="POST">
    @csrf
        <div class="input-group d-flex justify-content-between p-5">
            <div class="w-25">
                <label class="mb-2" for="name">Nome progetto</label>
                <input type="text" class="form-control" name="name" id="name">
            </div>
            <div class="w-25">
                <label class="mb-2" for="date">Data completamento</label>
                <input type="date" class="form-control" name="completion_date" id="date">
            </div>
            <div class="w-25">
                <label class="mb-2" for="author">Autore progetto</label>
                <input type="text" class="form-control" name="author" id="author">
            </div>
        </div>
        <div class="text-center">
            <button class="btn btn-primary"><i class="fa-solid fa-share-from-square"></i> Aggiungi</button>
        </div>
    </form>
</div>
@endsection