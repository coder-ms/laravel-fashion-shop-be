@extends('layouts.admin')

@section('content')

<h1>colors</h1>
    <a class="btn btn-success" href="{{route('admin.colors.create')}}">Crea nuova Categoria</a>

    @if(session()->has('message'))
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
            @foreach($colors as $color)
                <tr>
                    <th scope="row">{{$color->id}}</th>
                    <td><a href="{{route('admin.colors.show', $color->id)}}" title="View categorys">{{$color->name}}</a></td>
                    
                    <td><a class="link-secondary" href="{{route('admin.colors.edit', $color->id)}}" title="Edit category"><i class="fa-solid fa-pen"></i></a></td>

                    <td> 
                        <form action="{{route('admin.colors.destroy', $color->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button btn btn-danger ms-3" data-item-name="{{$color->name}}"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $colors->links('vendor.pagination.bootstrap-5') }}
    @include('partials.admin.modal-delete')
                
@endsection