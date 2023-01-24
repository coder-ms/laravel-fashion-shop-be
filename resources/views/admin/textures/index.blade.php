@extends('layouts.admin')

@section('content')
    <h1 class="text-capitalize">textures</h1>
    <a class="btn btn-success" href="{{ route('admin.textures.create') }}">Crea nuova texture</a>

    @if (session()->has('message'))
        <div class="alert alert-success mb-3 mt-3">
            {{ session()->get('message') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($textures as $texture)
                <tr>
                    <th scope="row">{{ $texture->id }}</th>
                    <td><a class="text-capitalize" href="{{ route('admin.textures.show', $texture->id) }}"
                            title="View textures">{{ $texture->name }}</a></td>

                    <td><a class="link-secondary" href="{{ route('admin.textures.edit', $texture->id) }}"
                            title="Edit texture"><i class="fa-solid fa-pen"></i></a></td>

                    <td>
                        <form action="{{ route('admin.textures.destroy', $texture->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button btn btn-danger ms-3"
                                data-item-name="{{ $texture->name }}"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $textures->links('vendor.pagination.bootstrap-5') }}

    @include('partials.admin.modal-delete')
@endsection
