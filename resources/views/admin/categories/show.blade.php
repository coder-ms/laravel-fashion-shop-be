@extends('layouts.admin')

@section('content')
    <h1 class="text-center text-capitalize">{{ $category->name }}</h1>
    <div class="container">
        <div class="cardShow">
            <div class="cardDescriptionShow">
                <p>Category: </p>
                <ul>
                    <li>{{ $category->name }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
