@extends('layouts.admin')

@section('content')
    <h1>Create Product</h1>
    <div class="row bg-white">
        <div class="col-12">
            <form action="{{ route('admin.shippings.store') }}" method="POST" enctype="multipart/form-data" class="p-4">
                @csrf
                <div class="mb-3">
                    <label for="code_shipping" class="form-label text-capitalize">shipping code</label>
                    <input type="text" name='code_shipping'
                        class="form-control @error('code_shipping') is-invalid @enderror" id="code_shipping"
                        code_shipping="code_shipping" required maxlength="100" minlength="3">
                    @error('code_shipping')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                    <div class="form-text">* Minimo 3 caratteri e massimo 100 caratteri</div>
                </div>

                <div class="mb-3">
                    <label for="description" class="form-label">Email</label>
                    <input type="email" name='email' class="form-control" id="email" code_shipping="email"></input>
                </div>

                <div class="mb-3">
                    <label for="telephone" class="form-label text-capitalize">telephone</label>
                    <input type="number" name='telephone' class="form-control @error('telephone') is-invalid @enderror"
                        id="telephone" code_shipping="telephone" required maxlength="100" minlength="1">
                    @error('telephone')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
                <button type="reset" class="btn btn-primary">Reset</button>
            </form>
        </div>
    </div>

    <script src="//js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
    <script type="text/javascript">
        bkLib.onDomLoaded(nicEditors.allTextAreas);
    </script>
@endsection
