@extends('layout')

@section('content')
<main class="login-form">
  <div class="container">
      <div class="row justify-content-center">
          <div class="col-md-8">
              <div class="card">
                  <div class="card-header">Add Product</div>
                  <div class="card-body">

                      <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data"> <!-- Tambah enctype untuk mendukung upload gambar -->
                          @csrf
                          
                          <div class="form-group row mt-3">
                              <label for="product_name" class="col-md-4 col-form-label text-right">Product Name</label>
                              <div class="col-md-6">
                                  <input type="text" id="product_name" class="form-control" name="product_name" required autofocus>
                                  @if ($errors->has('product_name'))
                                      <span class="text-danger">{{ $errors->first('product_name') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row mt-3">
                              <label for="qty" class="col-md-4 col-form-label text-right">QTY</label>
                              <div class="col-md-6">
                                  <input type="text" id="qty" class="form-control" name="qty" required autofocus>
                                  @if ($errors->has('qty'))
                                      <span class="text-danger">{{ $errors->first('qty') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row mt-3">
                              <label for="selling_price" class="col-md-4 col-form-label text-right">Selling Price</label>
                              <div class="col-md-6">
                                  <input type="text" id="selling_price" class="form-control" name="selling_price" required>
                                  @if ($errors->has('selling_price'))
                                      <span class="text-danger">{{ $errors->first('selling_price') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row mt-3">
                              <label for="buying_price" class="col-md-4 col-form-label text-right">Buying Price</label>
                              <div class="col-md-6">
                                  <input type="text" id="buying_price" class="form-control" name="buying_price" required>
                                  @if ($errors->has('buying_price'))
                                      <span class="text-danger">{{ $errors->first('buying_price') }}</span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row mt-3">
                              <label for="product_type" class="col-md-4 col-form-label text-right">Product Type</label>
                              <div class="col-md-6">
                                  <select class="form-select" id="product_type" name="product_type" aria-label="product_type">
                                      <option value="">Choose</option>
                                      @foreach($product_types as $val)
                                          <option value="{{$val->id}}">{{$val->product_type_name}}</option>
                                      @endforeach
                                  </select>
                                  @if ($errors->has('product_type'))
                                      <span class="text-danger">{{ $errors->first('product_type') }}</span>
                                  @endif
                              </div>
                          </div>

                          <!-- Tambahkan kolom untuk upload gambar -->
                          <div class="form-group row mt-3">
                              <label for="image" class="col-md-4 col-form-label text-right">Product Image</label>
                              <div class="col-md-6">
                                  <input type="file" id="image" class="form-control" name="image" accept="image/*" onchange="previewImage(event)">
                                  @if ($errors->has('image'))
                                      <span class="text-danger">{{ $errors->first('image') }}</span>
                                  @endif
                                  <!-- Tempat untuk menampilkan pratinjau gambar -->
                                  <img id="preview" src="#" alt="Image Preview" style="display: none; max-width: 100%; margin-top: 10px;" />
                              </div>
                          </div>

                          <div class="col-md-6 offset-md-4 mt-3 p-2 d-grid">
                              <button type="submit" class="btn btn-primary">
                                  Submit
                              </button>
                          </div>
                      </form>

                  </div>
              </div>
          </div>
      </div>
  </div>
</main>

<script>
// JavaScript untuk menampilkan pratinjau gambar
function previewImage(event) {
    var reader = new FileReader();
    reader.onload = function(){
        var output = document.getElementById('preview');
        output.src = reader.result;
        output.style.display = 'block'; // Tampilkan pratinjau gambar
    };
    reader.readAsDataURL(event.target.files[0]);
}
</script>

@endsection
