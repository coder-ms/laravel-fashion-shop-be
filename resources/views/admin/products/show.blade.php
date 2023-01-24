@extends('layouts.admin')

@section('content')
    <h1 class="text-center">{{$product->name}}</h1>
    <div class="containerx">
        <div class="cardShow">
            <div class="cardImageShow">
                {{-- {{dd($product)}} --}}
                
               
                    <img src="{{asset('storage/' . $product->image_link)}}" alt="">
              
        
            </div>
              <div class="cardDescriptionShow">
                <p>{{$product->description}}</p>
                {{-- @if ($product->category)
                    <p>Category: {{$product->category->name}}</p>
                @endif --}}
                <p>Tags: </p>
                @if ($product->textures && count($product->textures) > 0 )
                    <ul>
                        @foreach($product->textures as $texture)
                            <li>{{$texture->name}}</li>
                        @endforeach
                    </ul>
                @endif
                {{-- <a href="{{route('admin.products.index', $product->slug)}}" class="btn btn-primary">INDIETRO</a>
                <a href="{{route('admin.products.edit', $product->slug)}}" class="btn btn-secondary">MODIFICA</a>
                <form action="{{route('admin.products.destroy', $product->slug)}}" method="POST" class=" d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">ELIMINA</button>
                </form> --}}
              </div>
        </div>
    </div>

@endsection