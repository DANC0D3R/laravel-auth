@extends('layouts.app')

@section('content')
<div class="container">
    <h2 class="fs-4 text-secondary my-4">
        {{ __('Dashboard') }}
    </h2>
    <div class="row justify-content-center">
        <div class="col">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Projects</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($projects as $project)
                    @endforeach --}}
                    <tr>
                    <td>Project name</td>
                    <td>Project date</td>
                    <td class="text-end">
                        <a href="#" class="btn btn-primary"><i class="fa-solid fa-eye"></i></a>
                        <a href="#" class="btn btn-secondary"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a href="#" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection