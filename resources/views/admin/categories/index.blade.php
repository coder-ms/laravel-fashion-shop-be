@extends('layouts.admin')

@section('content')

<h1>Categories</h1>
    <a class="btn btn-success" href="{{route('admin.categories.create')}}">Crea nuova Categoria</a>

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
            @foreach($categories as $category)
                <tr>
                    <th scope="row">{{$category->id}}</th>
                    <td><a href="{{route('admin.categories.show', $category->id)}}" title="View categorys">{{$category->name}}</a></td>
                    
                    <td><a class="link-secondary" href="{{route('admin.categories.edit', $category->id)}}" title="Edit category"><i class="fa-solid fa-pen"></i></a></td>

                    <td> 
                        <form action="{{route('admin.categories.destroy', $category->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button btn btn-danger ms-3" data-item-name="{{$category->name}}"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $categories->links('vendor.pagination.bootstrap-5') }}
    @include('partials.admin.modal-delete')
                
@endsection