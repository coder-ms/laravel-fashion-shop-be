@extends('layouts.admin')

@section('content')
    <h1 class="text-center">EDIT Category : {{ $color->name }}</h1>
    <div class="row bg-white">
        <div class="col-12">
            <form action="{{ route('admin.colors.update', $color->id) }}" method="POST" class="p-4"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="hex_value" class="form-label">Nome Category: </label>
                    <input type="text" class="form-control @error('hex_value') is-invalid @enderror" id="hex_value"
                        name="hex_value" value="{{ old('hex_value', $color->hex_value) }}" required maxlength="150" minlength="3">
                    <label for="name" class="form-label">Nome Category: </label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ old('name', $color->name) }}" required maxlength="150" minlength="3">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">* Minimo 3 caratteri massimo 150 caratteri</div>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </form>
        </div>
    </div>
@endsection
