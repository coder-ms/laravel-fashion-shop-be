@extends('layouts.admin')

@section('content')
    <h1 class="text-center text-capitalize">{{ $texture->name }}</h1>
    <div class="container">
        <div class="cardShow">
            <div class="cardDescriptionShow">
                <p>Textures: </p>
                <ul>
                    <li>{{ $texture->name }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
