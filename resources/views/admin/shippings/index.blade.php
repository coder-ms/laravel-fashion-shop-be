@extends('layouts.admin')

@section('content')
    <h1 class="text-capitalize mb-3">shippings</h1>
    <a class="btn btn-success mt-2 mb-3" href="{{ route('admin.shippings.create') }}">Crea nuovo shipping</a>
    @if (session()->has('message'))
        <div class="alert alert-success mb-3 mt-3">
            {{ session()->get('message') }}
        </div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">code_shipping</th>
                <th scope="col">Telephone</th>
                <th scope="col">Email</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($shippings as $shipping)
                <tr>
                    <th scope="row">{{ $shipping->id }}</th>
                    <td><a href="{{ route('admin.shippings.show', $shipping->id) }}"
                            title="View shippings">{{ $shipping->code_shipping }}</a></td>
                    <td> {{  $shipping->telephone }} </td>

                        <td>{{ $shipping->email }}</td>

                    <td><a class="link-secondary" href="{{ route('admin.shippings.edit', $shipping->id) }}"
                            title="Edit shipping"><i class="fa-solid fa-pen"></i></a></td>

                    <td>
                        <form action="{{ route('admin.shippings.destroy', $shipping->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button btn btn-danger ms-3"
                                data-item-code_shipping="{{ $shipping->code_shipping }}"><i
                                    class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $shippings->links('vendor.pagination.bootstrap-5') }}
    @include('partials.admin.modal-delete')
@endsection
