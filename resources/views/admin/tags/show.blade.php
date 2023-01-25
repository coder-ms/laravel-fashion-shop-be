@extends('layouts.admin')

@section('content')
    <h1 class="text-center text-capitalize">{{ $tag->name }}</h1>
    <div class="container">
        <div class="cardShow">
            <div class="cardDescriptionShow">
                <p>Tag: </p>
                <ul>
                    <li>{{ $tag->name }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
