@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col p-5">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Projects</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($projects as $project)
                    <tr>
                    <td>{{ $project->name }}</td>
                    <td>{{ $project->completion_date }}</td>
                    <td class="text-end">
                        <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{ route('admin.projects.show', $project->id) }}" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="{{ route('admin.projects.destroy', $project->id) }}" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="text-end">
                <a href="#" class="btn btn-success"><i class="fa-solid fa-plus"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection