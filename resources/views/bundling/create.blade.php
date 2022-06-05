@extends('layout.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
         
          
          <div class="col-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Tambah Bundle</h4>
                <p class="card-description">
                  
                </p>
                <form class="forms-sample" method="POST" action="/bundle" id="insert_form">
                    @csrf
                  <div class="form-group">
                    <label for="nama_bundle">Nama Bundle</label>
                    <input type="text" class="form-control" id="nama_bundle"  name="nama_bundle" placeholder="NamaProject">
                  </div>
                   <div class="form-group">
                    <label for="description">Deskripsi Bundle</label>
                    <textarea class="form-control" id="description" name="description" rows="4"></textarea>
                  </div>
                  <div class="form-group">
                    <label for="price">Product</label>
                    <select class="js-example-basic-multiple w-100" multiple="multiple">
                      <option value="AL">Product 1</option>
                      <option value="WY">Product 2</option>
                      <option value="AM">Product 3</option>
                      <option value="CA">Product 4</option>
                      <option value="RU">Product 5</option>
                    </select>
                  </div>
                  
                  <button type="submit" class="btn btn-primary me-2">Submit</button>
                  <button class="btn btn-light">Cancel</button>
                </form>
              </div>
            </div>
          </div>
        </div> 
    </div> 
</div>
@endsection
@section('plugin-css')
  <link rel="stylesheet" href="{{ asset('vendors/select2/select2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
@endsection
@section('plugin-js')
    <script src="{{ asset('vendors/typeahead.js/typeahead.bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/select2/select2.min.js') }}"></script>
@endsection
@section('custom-js')
    <script src="{{ asset('js/file-upload.js') }}"></script>
    <script src="{{ asset('js/typeahead.js') }}"></script>
    <script src="{{ asset('js/select2.js') }}"></script>
    <script src="{{ asset('js/data-table.js') }}"></script>
@endsection

