@extends('layouts.admin')

@section('content')
    <h1 class="text-center">EDIT TEXTURE : {{ $texture->name }}</h1>
    <div class="row bg-white">
        <div class="col-12">
            <form action="{{ route('admin.textures.update', $texture->id) }}" method="POST" class="p-4"
                enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="name" class="form-label">Nome Texture: </label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        name="name" value="{{ old('name', $texture->name) }}" required maxlength="150" minlength="3">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">* Minimo 3 caratteri massimo 150 caratteri</div>
                </div>

                <div class="d-flex">
                    <div class="media me-4">
                        <img class="shadow" width="150" src="{{ asset('storage/' . $texture->image_link) }}"
                            alt="{{ $texture->name }}">
                    </div>
                    <div class="mb-3">
                        <label for="image_link" class="form-label">Replace post image</label>
                        <input type="file" name="image_link" id="image_link"
                            class="form-control  @error('image_link') is-invalid @enderror">
                        @error('image_link')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </form>
        </div>
    </div>
@endsection
