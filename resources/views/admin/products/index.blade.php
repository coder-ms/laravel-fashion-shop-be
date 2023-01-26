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
                <th  scope="col">Price</th>
                <th  scope="col">Texture</th>
                <th  scope="col">Brand</th>
                <th  scope="col">Category</th>
                <th scope="col">Edit</th>
                <th scope="col">Delete</th>
            </tr>
        </thead>

        <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{$product->id}}</th>
                    <td><a href="{{route('admin.products.show', $product->id)}}" title="View Products">{{$product->name}}</a></td>
                    <td>{{$product->price}}</td>
                    <td>
                      @if($product->texture)
                      {{$product->texture->name}}
                      @else
                      not found
                      @endif
                    </td>
                    <td>
                        @if($product->brand)
                        {{$product->brand->name}}
                        @else
                        not found
                        @endif
                        
                    </td>
                    <td>
                        @if($product->category)
                        {{$product->category->name}}
                        @else
                        not found
                        @endif
                       
                    </td>
                    <td><a class="link-secondary" href="{{route('admin.products.edit', $product->id)}}" title="Edit Product"><i class="fa-solid fa-pen"></i></a></td>
                    <td> 
                        <form action="{{route('admin.products.destroy', $product->id)}}" method="POST">
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