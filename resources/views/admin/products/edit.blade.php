@extends('layouts.admin')

@section('content')

    {{-- <div>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
    </div> --}}
    <h1 class="text-center">EDIT PRODUCT {{$product->name}}</h1>
    <div class="row bg-white">
        <div class="col-12">
            <form action="{{route('admin.products.update', $product->id)}}" method="POST" class="p-4" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                  <div class="mb-3">
                    <label for="name" class="form-label">Nome Prodotto: </label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{old('name', $product->name)}}" required maxlength="150" minlength="3">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">* Minimo 3 caratteri massimo 150 caratteri</div>
                  </div>
                  <div class="mb-3">
                    <label for="description" class="form-label">Contenuto</label>
                    <textarea class="form-control" id="description" name="description">"{{old('description', $product->description)}}</textarea>
                  </div>

                  <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required maxlength="100" minlength="1" value="{{old('price', $product->price)}}">
                    @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    {{-- <div class="form-text">* Minimo 1 caratteri e massimo 100 caratteri</div> --}}
                  </div>

                  {{-- <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required maxlength="100" minlength="3" value="{{old('price', $product->price)}}">
                    @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">* Minimo 3 caratteri e massimo 100 caratteri</div>
                  </div> --}}

                  {{-- <div class="mb-3">
                    <label for="category_id" class="form-label">Seleziona categoria di framework:</label>
                    <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror">
                      <option value="">Select category</option>
                      @foreach ($categories as $category)
                          <option value="{{$category->id}}" {{ $category->id == old('category_id', $product->category_id) ? 'selected' : '' }}>{{$category->name}}</option>
                      @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div> --}}
                  <div class="d-flex">
                    <div class="media me-4">
                        <img class="shadow" width="150" src="{{asset('storage/' . $product->image_link)}}" alt="{{$product->name}}">
                    </div>
                    <div class="mb-3">
                        <label for="image_link" class="form-label">Replace post image</label>
                        <input type="file" name="image_link" id="image_link" class="form-control  @error('image_link') is-invalid @enderror" >
                        @error('image_link')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                  </div>

                  {{-- <div class="mb-3">
                    <label for="tags" class="form-label">Tags</label>
                    <select multiple class="form-select" name="tags[]" id="tags" >
                      <option value="">Select tag</option>
                      @forelse ($tags as $tag)
                          @if($errors->any() )
                            <option value="{{$tag->id}}" {{in_array($tag->id, old('tags[]')) ? 'selected' : ''}}>{{$tag->name}}</option>
                          @else
                            <option value="{{$tag->id}}" {{$product->tags->contains($tag->id) ? 'selected' : ''}}>{{$tag->name}}</option>
                          @endif
                      @empty
                        <option value="">No tag</option>
                      @endforelse
                    </select>
                  </div>  --}}

                  {{-- <div class="mb-3">
                    @foreach ($tags as $tag)
                    <div class="form-check form-check-inline">

                        @if (old("tags"))
                            <input type="checkbox" class="form-check-input" id="{{$tag->slug}}" name="tags[]" value="{{$tag->id}}" {{in_array( $tag->id, old("tags", []) ) ? 'checked' : ''}}>
                        @else
                            <input type="checkbox" class="form-check-input" id="{{$tag->slug}}" name="tags[]" value="{{$tag->id}}" {{$product->tags->contains($tag) ? 'checked' : ''}}>
                        @endif
                        <label class="form-check-label" for="{{$tag->slug}}">{{$tag->name}}</label>
                    </div>
                    @endforeach
                    @error('tags')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div> --}}
                  <button type="submit" class="btn btn-success">Submit</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
            </form>
        </div>
    </div>

@endsection
