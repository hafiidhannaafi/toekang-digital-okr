@extends('layout.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-12 grid-margin">
                <div class="row">
                    <div class="col-12 col-xl-8 mb-2 mb-xl-0">
                        <h3 class="font-weight-bold mb-2">Bundle</h3>
                        <a href="/bundle/create" class="btn btn-outline-danger btn-icon-text">
                            <i class="ti-plus btn-icon-prepend"></i>
                            Tambah Bundle
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($bundles as $bundle)
            <div class="col-12 col-sm-6 col-md-6 col-xl-3 grid-margin stretch-card">
                <div class="card">
                    <div class="card card-light-danger">
                        <div class="card-body">
                            <h4 class="mb-4">{{ $bundle->name }}</h4>
                            <div class="d-flex justify-content-between mt-3">
                                <p><i class="icon-head menu-icon me-2"></i>10 Member</p>
                                <p class="mb-2"><i class="ti-shopping-cart me-2"></i>Rp {{ $bundle->price }}</p>
                            </div>
                            <p class="mb-2">{{ $bundle->description }}</p>
                            <div class="text-center">
                                <button type="button" class="btn btn-sm btn-light mt-2 btn-block">Detail</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection


