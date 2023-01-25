@extends('layouts.admin')

@section('content')
    <h1 class="text-center text-capitalize">{{ $shipping->code_shipping }}</h1>
    <div class="container">
        <div class="cardShow">
            <div class="cardDescriptionShow">
                <p>Shipping: </p>
                <ul>
                    <li><strong>Code Shipping:</strong> {{ $shipping->code_shipping }}</li>
                </ul>
                <ul>
                    <li><strong>Email:</strong> {{ $shipping->email }}</li>
                </ul>
                <ul>
                    <li><strong>Telephone:</strong>Telephone:{{ $shipping->telephone }}</li>
                </ul>
            </div>
        </div>
    </div>
@endsection
