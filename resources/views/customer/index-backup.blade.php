@extends('layout.master')
@section('plugin-css')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.0/css/boxicons.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom-dataTable.css') }}">
@endsection
@section('plugin-js')
    <script>
        document.title = "TD - {{ $title }}";
    </script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
@endsection
@section('custom-js')
    <script src="{{ asset('js/data-table.js') }}"></script>
@endsection

@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{ $title }}</h4>
                    <div class="row">
                        <div class="col-12">
                            <div class="table-responsive">
                                <table id="DataTable" class="table table-hover responsive nowrap" style="width:100%">
                                    <thead>
                                        <tr>
                                            <th>Client</th>
                                            <th>Contact</th>
                                            <th>Alamat</th>
                                            <th>Last FU</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="">
                                        @foreach ($customers as $customer)
                                            @php
                                                $color = ['red', 'green', 'blue', 'yellow', 'purple', 'red', 'green', 'blue', 'yellow', 'purple'];
                                                $avatar_color = $color[array_rand($color)];
                                                $name = explode(' ', $customer->name);
                                                $acronym = '';
                                                $i = 0;
                                                foreach ($name as $n) {
                                                    $acronym .= $n[0];
                                                    if (++$i == 2) {
                                                        break;
                                                    }
                                                }
                                                switch ($customer->status) {
                                                    case 'hot':
                                                        $badge = 'badge-danger';
                                                        break;
                                                    case 'warm':
                                                        $badge = 'badge-warning';
                                                        break;
                                                    case 'cold':
                                                        $badge = 'badge-info';
                                                        break;
                                                    case 'expired':
                                                        $badge = 'badge-dark';
                                                        break;
                                                    default:
                                                        $badge = 'badge-success';
                                                }
                                            @endphp
                                            <tr>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="/customer/{{ $customer->id }}">
                                                            <div class="avatar avatar-{{ $avatar_color }} me-3">
                                                                {{ $acronym }}</div>
                                                        </a>
                                                        <div class="">
                                                            <p class="font-weight-bold mb-0">{{ $customer->name }}</p>
                                                            <p class="text-muted ">{{ $customer->email }}</p>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td>{{ $customer->phone }}</td>
                                                <td class="text-wrap">{{ $customer->address }}</td>
                                                <td>{{ substr($customer->created_at, 0, 10) }}</td>
                                                <td>
                                                    <label class="badge {{ $badge }} bg-light">
                                                        {{ ucfirst($customer->status) }}
                                                    </label>
                                                </td>
                                                <td>
                                                    <div class="dropdown">
                                                        <button type="button" class="btn btn-white" id="dropDown"
                                                            data-bs-toggle="dropdown" aria-haspopup="true">
                                                            <i class="ti-more-alt text-primary"></i>
                                                        </button> 
                                                        <div class="dropdown-menu" aria-labelledby="dropDown">
                                                            <a class="dropdown-item mt-1  "
                                                                href="/customer/{{ $customer->id }}">
                                                                <i class="ti-info"></i>
                                                                Detail</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-info" href="#"><i
                                                                    class="ti-pencil-alt "></i>
                                                                Edit</a>
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item text-danger" href="#"><i
                                                                    class="ti-trash "></i> Remove</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach
                                        <tr>
                                            <td>
                                                <div class="d-flex"><a href="sss">
                                                        <div class="avatar avatar-blue me-3">HB</div>
                                                    </a>
                                                    <div class="">
                                                        <p class="font-weight-bold mb-0">Adolf Hitler</p>
                                                        <p class="text-muted ">julie_hb@example.com</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td> (0271) 874 222</td>
                                            <td>Jl. Watu Ireng 34, Gunung Kidul, Yogyakarta</td>
                                            <td>13/01/2021</td>
                                            <td>
                                                <label class="badge badge-warning bg-light">Warm</label>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <button type="button" class="btn btn-white" id="dropDown"
                                                        data-bs-toggle="dropdown" aria-haspopup="true"><i
                                                            class="ti-more-alt text-primary"></i></button>

                                                    <div class="dropdown-menu" aria-labelledby="dropDown">
                                                        <a class="dropdown-item mt-1" href="#"><i
                                                                class="ti-pencil-alt "></i>
                                                            Edit</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item text-danger" href="#"><i
                                                                class="ti-trash "></i>
                                                            Remove</a>
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
                <!-- content-wrapper ends -->
                <!-- partial:../../partials/_footer.html -->
                <footer class="footer">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.
                            Premium <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin
                                template</a> from BootstrapDash. All rights reserved.</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made
                            with <i class="ti-heart text-danger ms-1"></i></span>
                    </div>
                </footer>
                <!-- partial -->
            </div>
        @endsection
