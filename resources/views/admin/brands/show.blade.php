@extends('layouts.admin')

@section('content')
    <h1 class="text-center text-capitalize">{{ $brand->name }}</h1>
    <div class="container">
        <div class="cardShow">
            <div class="cardDescriptionShow">
                <p>Brand: </p>
                <ul>
                    <li>{{ $brand->name }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
