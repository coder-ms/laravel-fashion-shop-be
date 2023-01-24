@extends('layouts.admin')

@section('content')

<h1>Products</h1>
    <a class="btn btn-success" href="{{route('admin.products.create')}}">Crea nuovo product</a>

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
                <th scope="col">Description</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td>{{$product->name}}</td>
                    <td>{!! Str::limit($product->description,100) !!}</td>
                    <td><i class="fa-solid fa-pen"></i></a></td>
                    <td> 
                        <form  method="POST">
                            {{-- added la routa --}}
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button btn btn-danger ms-3" data-item-name="{{$product->name}}"><i class="fa-solid fa-trash-can"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $products->links('vendor.pagination.bootstrap-5') }}
    @include('partials.admin.modal-delete')
                
@endsection