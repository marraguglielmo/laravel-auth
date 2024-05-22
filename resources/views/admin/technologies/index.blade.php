@extends('layouts.admin')

@section('content')
    <h3>Technologies</h3>
    <div class="container">



        <div class="container">

            @if ($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach ($errors->all() as $error)
                        {{ $error }}
                    @endforeach
                </div>
            @endif


            @if (session('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
            @elseif(session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif

            <form action="{{ route('admin.technologies.store') }}" method="POST" class="d-flex w-50">
                @csrf
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="title">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>


        <table class="table crud-table w-50">
            <thead>
                <tr>
                    <th scope="col">Title</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($technologies as $item)
                    <tr>
                        <td class="d-flex">
                            <form action="{{ route('admin.technologies.update', $item) }}" method="POST"
                                id="form-edit-{{ $item->id }}">
                                @csrf
                                @method('PUT')
                                <input type="text" value="{{ $item->title }}" name="title">
                            </form>
                        </td>
                        <td>
                            <button type="button" onclick="submitForm({{ $item->id }})" class="btn btn-warning me-2"><i
                                    class="fa-solid fa-pencil"></i></button>
                            <button class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function submitForm(id) {
            const form = document.getElementbyId(`form-edit-${id}`);
            form.submit();
        }
    </script>
@endsection
