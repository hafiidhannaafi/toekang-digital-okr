@extends('layout.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">List Task</h4>
                <div class="row"> 
                    <div class="col-12">
                        <div class="table-responsive">
                            <table id="DataTable" class="table table-hover responsive nowrap" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Task</th>
                                        <th>Start Date</th>
                                        <th>Deadline</th>
                                        <th>Employee</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    <tr>
                                        <td>
                                            <a href="#">
                                                <div class="d-flex align-items-center">
                                                    <div class="">
                                                        <p class="font-weight-bold mb-0">Membuat 10 Poster</p>
                                                        <p class="text-muted ">MSGlow Beauty</p>
                                                    </div>
                                                </div>
                                            </a>
                                        </td>
                                        <td>20 November 2021</td>
                                        <td>03 Desember 2021</td>
                                        <td>Paijo</td>
                                        <td>
                                            <label class="badge badge-success bg-light">Completed</label>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button type="button" class="btn btn-white" id="dropDown"
                                                    data-bs-toggle="dropdown" aria-haspopup="true"><i
                                                        class="ti-more-alt text-primary"></i></button>

                                                <div class="dropdown-menu" aria-labelledby="dropDown">
                                                    <a class="dropdown-item mt-1" href="#"><i
                                                            class="ti-pencil-alt "></i> Edit</a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item text-danger" href="#"><i
                                                            class="ti-trash "></i> Remove</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('plugin-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.0/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom-dataTable.css') }}">
@endsection
@section('plugin-js')
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
@endsection
@section('custom-js')
    <script src="{{ asset('js/data-table.js') }}"></script>
@endsection

