@php
    use App\Functions\Helper as Help;

@endphp


@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Index projects</h2>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Progetto</th>
                    <th scope="col">Data</th>
                    <th scope="col">Linguaggi</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($projects as $project)
                    <tr>
                        <td>{{ $project->title }}</td>
                        <td>{{ Help::formatDate($project->update_at) }}</td>
                        <td>{{ $project->languages }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
@endsection
