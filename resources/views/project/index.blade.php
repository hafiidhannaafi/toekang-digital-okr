@extends('layout.master')

@section('container')
<div class="content-wrapper">
    <div class="row">
      <div class="col-md-12 grid-margin">
        <div class="row">
          <div class="col-12 col-xl-8 mb-4 mb-xl-0">
            <h3 class="font-weight-bold">Project</h3>
            <a href="/project/create" class="btn btn-outline-danger btn-icon-text">
              <i class="ti-plus btn-icon-prepend"></i>                                                    
              Tambah Project
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
     
      <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
        <div class="card">
          <div class="card card-light-danger">
            <div class="card-body">
              <h4 class="mb-4">Nama Project</h4>
              <p><i class="icon-head menu-icon me-2"></i>10 Member</p>
              <p class="mb-2"><i class="ti-time me-2"></i>Start : 20-09-2021</p>
              <p class="mb-2"><i class="ti-time me-2"></i>End   : 20-09-2021</p>
              <div class="d-flex justify-content-between mt-3">
                <small>Progress</small>
                <small>60%</small>
              </div>
              <div class="progress progress-lg mt-2">
                <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
              </div>
              <div class="text-center"> 
                <button type="button" class="btn btn-sm btn-light mt-3 btn-block">Detail</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
        <div class="card">
          <div class="card card-light-danger">
            <div class="card-body">
              <h4 class="mb-4">Nama Project</h4>
              <p><i class="icon-head menu-icon me-2"></i>10 Member</p>
              <p class="mb-2"><i class="ti-time me-2"></i>Start : 20-09-2021</p>
              <p class="mb-2"><i class="ti-time me-2"></i>End   : 20-09-2021</p>
              <div class="d-flex justify-content-between mt-3">
                <small>Progress</small>
                <small>60%</small>
              </div>
              <div class="progress progress-lg mt-2">
                <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
              </div>
              <div class="text-center"> 
                <button type="button" class="btn btn-sm btn-light mt-3 btn-block">Detail</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
        <div class="card">
          <div class="card card-light-danger">
            <div class="card-body">
              <h4 class="mb-4">Nama Project</h4>
              <p><i class="icon-head menu-icon me-2"></i>10 Member</p>
              <p class="mb-2"><i class="ti-time me-2"></i>Start : 20-09-2021</p>
              <p class="mb-2"><i class="ti-time me-2"></i>End   : 20-09-2021</p>
              <div class="d-flex justify-content-between mt-3">
                <small>Progress</small>
                <small>60%</small>
              </div>
              <div class="progress progress-lg mt-2">
                <div class="progress-bar bg-info" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
              </div>
              <div class="text-center"> 
                <button type="button" class="btn btn-sm btn-light mt-3 btn-block">Detail</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>
@endsection