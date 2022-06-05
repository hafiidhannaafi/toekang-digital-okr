@extends('layout.master')

@section('container')
<div class="content-wrapper">
    <div class="row">
     
      
      <div class="col-12 grid-margin stretch-card">
        <div class="card">
          <div class="card-body">
            <h4 class="card-title">Tambah Project</h4>
            <p class="card-description">
              
            </p>
            <form class="forms-sample" method="POST" action="/project">
                @csrf
              <div class="form-group">
                <label for="nama_project">Nama Project</label>
                <input type="text" class="form-control" id="nama_project"  name="nama_project" placeholder="NamaProject">
              </div>
               <div class="form-group">
                <label for="description">Deskripsi Project</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
              </div>
              <div class="form-group">
                <label for="bundle">Bundle</label>
                <input type="email" class="form-control" name="bundle" id="bundle" placeholder="Produk">
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tgl Awal</label>
                    <div class="col-sm-9">
                      <input type="date" name="first_date" class="form-control" />
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group row">
                    <label class="col-sm-3 col-form-label">Tgl Akhir</label>
                    <div class="col-sm-9">
                      <input type="date" name="last_date" class="form-control" />
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <label for="">Status</label>
                  <select name="status "class="form-control form-control-lg" id="">
                    <option value="done">Done</option>
                    <option value="on process">On Process</option>
                  </select>
                </div>
              <button type="submit" class="btn btn-primary me-2">Submit</button>
              <button class="btn btn-light">Cancel</button>
            </form>
          </div>
        </div>
      </div>
    </div> 
@endsection
