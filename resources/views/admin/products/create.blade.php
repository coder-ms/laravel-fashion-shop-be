@extends('layouts.admin')

@section('content')

    <h1>Create Product</h1>
    <div class="row bg-white">
        <div class="col-12">
            <form action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data" class="p-4">
                @csrf
                  <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required maxlength="100" minlength="3">
                    @error('name')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">* Minimo 3 caratteri e massimo 100 caratteri</div>
                  </div>

                  <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea class="form-control" id="description" name="description"></textarea>
                  </div>

                  <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="number" class="form-control @error('price') is-invalid @enderror" id="price" name="price" required maxlength="100" minlength="1">
                    @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    {{-- <div class="form-text">* Minimo 1 caratteri e massimo 100 caratteri</div> --}}
                  </div>

                  <div class="mb-3">
                    <img id="uploadPreview" width="100" src="https://via.placeholder.com/300x200">
                    <label for="create_image_link" class="form-label">Immagine</label>
                    <input type="file" name="image_link" id="image_link" class="form-control  @error('image_link') is-invalid @enderror">
                    @error('image_link')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div>
                  <div class="mb-3">
                    <label for="texture_id" class="form-label text-capitalize">Seleziona tipo <span>*</span></label>
                    <select name="texture_id" id="texture_id" class="form-control @error('texture_id') is-invalid @enderror text-capitalize" required>
                        <option value="">Seleziona texture</option>
                        @foreach ($textures as $texture)
                            <option value="{{ $texture->id }}" {{ $texture->id == old('texture_id') ? 'selected' : '' }} class="text-capitalize">
                                {{ $texture->name }}</option>
                        @endforeach
                    </select>
                    @error('texture_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                {{-- Categoria Prodotto (es. Powder, Liquid....) --}}
                <div class="mb-3">
                    <label for="brand_id" class="form-label text-capitalize">Seleziona categoria <span>*</span></label>
                    <select name="category_id" id="category_id" class="form-control @error('category_id') is-invalid @enderror text-capitalize" required>
                        <option value="">Seleziona categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" {{ $category->id == old('category_id') ? 'selected' : '' }} class="text-capitalize">
                                {{ $category->name }}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                {{-- Brand Prodotto --}}
                <div class="mb-3">
                    <label for="brand_id" class="form-label text-capitalize">Seleziona Brand <span>*</span></label>
                    <select name="brand_id" id="brand_id" class="form-control @error('brand_id') is-invalid @enderror text-capitalize" required>
                        <option value="">Seleziona Brand</option>
                        @foreach ($brands as $brand)
                            <option value="{{ $brand->id }}" {{ $brand->id == old('brand_id') ? 'selected' : '' }} class="text-capitalize">
                                {{ $brand->name }}</option>
                        @endforeach
                    </select>
                    @error('brand_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                 {{--  <div class="mb-3">
                    <label for="type_id" class="form-label">Seleziona tipo</label>
                    <select name="type_id" id="type_id" class="form-control @error('type_id') is-invalid @enderror">
                      <option value="">Select type</option>
                      @foreach ($types as $type)
                          <option value="{{$type->id}}" {{ $type->id == old('type_id') ? 'selected' : '' }}>{{$type->name}}</option>
                      @endforeach
                    </select>
                    @error('type_id')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                  </div> --}}

                  {{-- <div class="mb-3">
                    <label for="technologies" class="form-label">Technologies</label>
                    <select multiple class="form-select" name="technologies[]" id="technologies">
                      
                        @forelse ($technologies as $technology)
                          <option value="{{$technology->id}}">{{$technology->name}}</option>
                        @empty
                            <option value="">No technology</option>
                        @endforelse
                    </select>
                  </div> --}}
                  
                  <button type="submit" class="btn btn-success">Submit</button>
                  <button type="reset" class="btn btn-primary">Reset</button>
            </form>
        </div>
    </div>

    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript">
    </script>
    <script type="text/javascript">
      bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>

@endsection
