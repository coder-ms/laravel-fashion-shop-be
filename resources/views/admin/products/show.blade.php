@extends('layouts.admin')

@section('content')
    <h1 class="text-center">{{$product->name}}</h1>
    <div class="containerx">
        <div class="cardShow">
            <div class="cardImageShow">

                {{-- {{dd($product)}} --}}

           

            <div class="image">
                @if($product->image_link)
                <img src="{{ asset('storage/' . $product->image_link) }}">
                @else
                
                @endif
            </div>


            </div>
              <div class="cardDescriptionShow">
                <p>{{$product->description}}</p>
                {{-- @if ($product->category)
                    <p>Category: {{$product->category->name}}</p>
                @endif --}}
               
             
                    <ul>
                        <li>
                            texture:
                            {{$product->texture->name}}
                        </li>
                        <li>
                          brand:
                            {{$product->brand->name}}
                        </li>
                            <li>
                                category:
                                {{$product->category->name}}</li>
                      
                    </ul>
               
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
