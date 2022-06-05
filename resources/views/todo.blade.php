@extends('layout.master')
@section('content')
<div class="main-panel">          
    <div class="content-wrapper">
      <div class="row">
        <div class="col-md-8 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Todo</h4>
                    <div class="list-wrapper list-wrapper-sm">
                        <ul class="d-flex flex-column-reverse todo-list todo-list-custom">
                            <li>
                                <div class="form-check form-check-flat">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Meeting with Alisa
                                    </label> 
                                </div>
                                <i class="ti-pencil-alt2" style="margin-left: auto"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check form-check-flat">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Call John
                                    </label>
                                </div>
                                <i class="ti-pencil-alt2" style="margin-left: auto"></i>
                            </li>
                            <li class="completed">
                                <div class="form-check form-check-flat">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox" checked>
                                        Prepare for presentation
                                    </label>
                                </div>
                                <i class="ti-pencil-alt2" style="margin-left: auto"></i>
                            </li>
                            <li>
                                <div class="form-check form-check-flat">
                                    <label class="form-check-label">
                                        <input class="checkbox" type="checkbox">
                                        Pick up kids from school
                                    </label>
                                </div>
                                <i class="ti-pencil-alt2" style="margin-left: auto"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="add-items d-flex mb-0">
                        <input type="text" class="form-control todo-list-input"
                            placeholder="Add new task">
                        <button
                            class="add btn btn-icon text-primary todo-list-add-btn bg-transparent"><i
                                class="ti-location-arrow"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <!--update-->
        <div class="col-md-4 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Updates</h4>
                    <ul class="bullet-line-list">
                        <li>
                            <h6>User confirmation</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing </p>
                            <p class="text-muted mb-4">
                                <i class="ti-time"></i>
                                7 months ago.
                            </p>
                        </li>
                        <li>
                            <h6>Continuous evaluation</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing </p>
                            <p class="text-muted mb-4">
                                <i class="ti-time"></i>
                                7 months ago.
                            </p>
                        </li>
                        <li>
                            <h6>Promotion</h6>
                            <p>Lorem Ipsum is simply dummy text of the printing </p>
                            <p class="text-muted">
                                <i class="ti-time"></i>
                                7 months ago.
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
      </div>
      </div>
    </div>
@endsection
@section('plugin-js')
<script src="../../vendors/dragula/dragula.min.js"></script>
@endsection
@section('custom-js')
<script src="../../js/dragula.js"></script>
@endsection