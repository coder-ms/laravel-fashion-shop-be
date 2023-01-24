@extends('layouts.admin')

@section('content')
    <h1 class="text-center">{{ $texture->name }}</h1>
    <div class="container">
        <div class="cardShow">
            <div class="cardDescriptionShow">
                <p>Textures: </p>
                <ul>
                    <li>{{ $texture->name }}</li>
                </ul>

                {{-- <a href="{{route('admin.textures.index', $texture->slug)}}" class="btn btn-primary">INDIETRO</a>
                <a href="{{route('admin.textures.edit', $texture->slug)}}" class="btn btn-secondary">MODIFICA</a>
                <form action="{{route('admin.textures.destroy', $texture->slug)}}" method="POST" class=" d-inline">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">ELIMINA</button>
                </form> --}}
            </div>
        </div>
    </div>
@endsection
