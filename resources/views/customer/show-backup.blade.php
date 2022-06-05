@php
switch ($customer->status) {
    case 'hot':
        $bg = 'bg-danger';
        break;
    case 'warm':
        $bg = 'bg-warning';
        break;
    case 'cold':
        $bg = 'bg-info';
        break;
    case 'expired':
        $bg = 'bg-dark';
        break;
    default:
        $bg = 'bg-success';
}
$approval = '-';
$order = '-';
if ($customer->approval == 0) {
    $approval = 'Not Approved';
    $approval_badge = 'badge-danger';
} elseif ($customer->approval == 1) {
    $approval = 'Approved';
    $approval_badge = 'badge-success';
}
if ($customer->is_order == 0) {
    $order = 'No Order';
    $order_badge = 'badge-danger';
} elseif ($customer->is_order == 1) {
    $order = 'Yes';
    $order_badge = 'badge-success';
}
@endphp
@extends('layout.master')
@section('content')
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="row">
                        <div class="col-md-12 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <div class=" text-center pb-4">
                                        <img src="../../images/faces/face12.jpg" alt="profile"
                                            class="img-lg rounded-circle mb-3" />
                                        <div class="mb-3">
                                            <h3>{{ $customer->name }} </h3><i
                                                class="badge {{ $bg }} text-light">{{ ucfirst($customer->status) }}</i>

                                        </div>
                                        <div class="tooltip bs-tooltip-bottom bs-tooltip-bottom-demo tooltip-success"
                                            data-bs-toggle="tooltip" data-bs-placement="bottom" title=""
                                            data-bs-original-title="Success">
                                            <div class="arrow"></div>
                                            <div class="tooltip-inner"> Success </div>
                                        </div>
                                        <p class="w-75 mx-auto mb-3">{{ $customer->address }}</p>
                                        <div class="container-fluid">
                                            {{-- <button type="button" class="btn btn-social-icon-text btn-whatsapp mx-1 my-1"><i
                                                    class="mdi mdi-whatsapp"></i>Whatsapp</button> --}}
                                            <a href="mailto:toekangdigital@mail.com"
                                                class="btn btn-social-icon-text btn-twitter mx-1 my-1"><i
                                                    class="mdi mdi-email"></i>E - Mail</a>
                                            <a href="tel:08161331466" class="btn btn-social-icon-text btn-youtube"><i
                                                    class="mdi mdi-phone-outgoing"></i>Call</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Contact</h4>
                                    <div class="row my-2 border-bottom">
                                        <div class="col-sm-9 mb-2">
                                            <p class="mb-0 h5 text-info">Antony Huberson</p>
                                            <small>Product Manager </small>
                                            <h5 class="mb-0 mt-1">0865 9876 677</h5>
                                            <small>esmerlandaadad@gmail.com </small>
                                        </div>
                                        <div class="col-sm-3 align-self-center" style="padding: 0px;">
                                            <a href="mailto:someone@example.com"
                                                class="btn m-1 btn-inverse-danger btn-icon">
                                                <i class="ti-email"></i>
                                            </a>
                                            <a href="https://api.whatsapp.com/send?phone=6281939123456" target="_blank"
                                                class="btn m-1 btn-inverse-success btn-icon">
                                                <i class="mdi mdi-whatsapp"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 stretch-card grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Super</h4>
                                    <form id="customer_edit" style=".form-group {margin-bottom: 0.5rem !important; }"
                                        method="POST" action="/customer/{{ $customer->id }}/edit">
                                        <div class="form-group">
                                            <label for="recipient-name" class="col-form-label">Name</label>
                                            <input type="text" class="form-control" id="customer_name"
                                                name="customer_name" value="{{ $customer->name }}" minlength="3" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="customer_phone" class="col-form-label">Phone</label>
                                            <input type="text" class="form-control" id="customer_phone"
                                                name="customer_phone" value="{{ $customer->phone }}" onkeyup="this.value=this.value.replace(/(\d{4})(\d+)/g, '$1 $2')" maxlength="17" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="customer_email" class="col-form-label">Email</label>
                                            <input type="email" class="form-control" id="customer_email"
                                                name="customer_email" value="{{ $customer->email }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="customer_fax" class="col-form-label">FAX</label>
                                            <input type="text" class="form-control" id="customer_fax" name="customer_fax"
                                                value="{{ $customer->fax }}" minlength="10">
                                        </div>
                                        <div class="form-group">
                                            <label for="customer_website" class="col-form-label">Website</label>
                                            <input type="text" class="form-control" id="customer_website"
                                                name="customer_website" value="{{ $customer->website }}" minlength="6">
                                        </div>
                                        <div class="form-group">
                                            <label for="customer_status" class="col-form-label">Status:</label>
                                            <select class="form-control form-control-sm" id="customer_status"
                                                name="customer_status" required>
                                                <option value="hot" {{ $customer->status == 'hot' ? 'selected' : '' }}>
                                                    Hot</option>
                                                <option value="warm" {{ $customer->status == 'warm' ? 'selected' : '' }}>
                                                    Warm</option>
                                                <option value="cold" {{ $customer->status == 'cold' ? 'selected' : '' }}>
                                                    Cold</option>
                                                <option value="expired"
                                                    {{ $customer->status == 'expired' ? 'selected' : '' }}>Expired
                                                </option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="customer_address" class="col-form-label">Address</label>
                                            <input type="text" class="form-control" id="customer_address"
                                                name="customer_address" value="{{ $customer->address }}" required\>
                                        </div>
                                        <div class="form-group">
                                            <label for="customer_note" class="col-form-label">Note</label>
                                            <textarea class="form-control" id="customer_note" name="customer_note"
                                                rows="2" minlength="3">{{ $customer->note }}</textarea>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-danger text-light">Update</button>
                                            <button type="button" class="btn btn-light"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <p class="card-title mb-4">Identity</p>
                                    <div class="table-responsive ">
                                        <table class="table" style="">
                                            <tbody>
                                                <tr>
                                                    <th style="width: 1%;">Name</th>
                                                    <th>{{ $customer->name }}</th>
                                                </tr>
                                                <tr>
                                                    <th>Phone</th>
                                                    <td>{{ $customer->phone }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Email</th>
                                                    <td>{{ $customer->email }}</td>
                                                </tr>
                                                <tr>
                                                    <th>FAX</th>
                                                    <td>{{ $customer->fax }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Address</th>
                                                    <td
                                                        style="word-wrap: break-word;min-width: 160px;max-width: 160px; white-space: normal !important;">
                                                        {{ $customer->address }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Website</th>
                                                    <td>{{ $customer->website }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Approved</th>
                                                    <td><label
                                                            class="badge {{ $approval_badge }} bg-light">{{ $approval }}</label>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Order</th>
                                                    <td><label
                                                            class="badge {{ $order_badge }} bg-light">{{ $order }}</label>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-sm-12 text-end">
                                            <button type="button" class="btn btn-danger text-light" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal-4" data-whatever="@fat">Edit</button>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 stretch-card grid-margin grid-margin-md-0">
                            <div class="card position-relative">
                                <div class="card-body">
                                    <div id="detailedReports"
                                        class="carousel slide detailed-report-carousel position-static pt-2"
                                        data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <div class="row">
                                                    <div
                                                        class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                                        <div class="ml-xl-4 mt-3">
                                                            <p class="card-title">Detailed Reports</p>
                                                            <h1 class="text-primary">$34040</h1>
                                                            <h3 class="font-weight-500 mb-xl-4 text-primary">North America
                                                            </h3>
                                                            <p class="mb-2 mb-xl-0">The total number of sessions within
                                                                the date
                                                                range. It is the period time a user is actively engaged with
                                                                your
                                                                website, page or app, etc</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-9">
                                                        <div class="row">
                                                            <div class="col-md-6 border-right">
                                                                <div class="table-responsive mb-3 mb-md-0 mt-3">
                                                                    <table class="table table-borderless report-table">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="text-muted">Illinois</td>
                                                                                <td class="w-100 px-0">
                                                                                    <div class="progress progress-md mx-4">
                                                                                        <div class="progress-bar bg-primary"
                                                                                            role="progressbar"
                                                                                            style="width: 70%"
                                                                                            aria-valuenow="70"
                                                                                            aria-valuemin="0"
                                                                                            aria-valuemax="100"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <h5 class="font-weight-bold mb-0">713
                                                                                    </h5>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-muted">Washington</td>
                                                                                <td class="w-100 px-0">
                                                                                    <div class="progress progress-md mx-4">
                                                                                        <div class="progress-bar bg-warning"
                                                                                            role="progressbar"
                                                                                            style="width: 30%"
                                                                                            aria-valuenow="30"
                                                                                            aria-valuemin="0"
                                                                                            aria-valuemax="100"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <h5 class="font-weight-bold mb-0">583
                                                                                    </h5>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-muted">Mississippi</td>
                                                                                <td class="w-100 px-0">
                                                                                    <div class="progress progress-md mx-4">
                                                                                        <div class="progress-bar bg-danger"
                                                                                            role="progressbar"
                                                                                            style="width: 95%"
                                                                                            aria-valuenow="95"
                                                                                            aria-valuemin="0"
                                                                                            aria-valuemax="100"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <h5 class="font-weight-bold mb-0">924
                                                                                    </h5>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-muted">California</td>
                                                                                <td class="w-100 px-0">
                                                                                    <div class="progress progress-md mx-4">
                                                                                        <div class="progress-bar bg-info"
                                                                                            role="progressbar"
                                                                                            style="width: 60%"
                                                                                            aria-valuenow="60"
                                                                                            aria-valuemin="0"
                                                                                            aria-valuemax="100"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <h5 class="font-weight-bold mb-0">664
                                                                                    </h5>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-muted">Maryland</td>
                                                                                <td class="w-100 px-0">
                                                                                    <div class="progress progress-md mx-4">
                                                                                        <div class="progress-bar bg-primary"
                                                                                            role="progressbar"
                                                                                            style="width: 40%"
                                                                                            aria-valuenow="40"
                                                                                            aria-valuemin="0"
                                                                                            aria-valuemax="100"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <h5 class="font-weight-bold mb-0">560
                                                                                    </h5>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-muted">Alaska</td>
                                                                                <td class="w-100 px-0">
                                                                                    <div class="progress progress-md mx-4">
                                                                                        <div class="progress-bar bg-danger"
                                                                                            role="progressbar"
                                                                                            style="width: 75%"
                                                                                            aria-valuenow="75"
                                                                                            aria-valuemin="0"
                                                                                            aria-valuemax="100"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <h5 class="font-weight-bold mb-0">793
                                                                                    </h5>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mt-3">
                                                                <canvas id="north-america-chart"></canvas>
                                                                <div id="north-america-legend"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="carousel-item">
                                                <div class="row">
                                                    <div
                                                        class="col-md-12 col-xl-3 d-flex flex-column justify-content-start">
                                                        <div class="ml-xl-4 mt-3">
                                                            <p class="card-title">Management Instagram</p>
                                                            <h1 class="text-primary">$55550</h1>
                                                            <h3 class="font-weight-500 mb-xl-4 text-primary">Norwegia
                                                            </h3>
                                                            <p class="mb-2 mb-xl-0">The total number of sessions within
                                                                the date
                                                                range. It is the period time a user is actively engaged with
                                                                your
                                                                website, page or app, etc</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 col-xl-9">
                                                        <div class="row">
                                                            <div class="col-md-6 border-right">
                                                                <div class="table-responsive mb-3 mb-md-0 mt-3">
                                                                    <table class="table table-borderless report-table">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="text-muted">Illinois</td>
                                                                                <td class="w-100 px-0">
                                                                                    <div class="progress progress-md mx-4">
                                                                                        <div class="progress-bar bg-primary"
                                                                                            role="progressbar"
                                                                                            style="width: 70%"
                                                                                            aria-valuenow="70"
                                                                                            aria-valuemin="0"
                                                                                            aria-valuemax="100"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <h5 class="font-weight-bold mb-0">713
                                                                                    </h5>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-muted">Washington</td>
                                                                                <td class="w-100 px-0">
                                                                                    <div class="progress progress-md mx-4">
                                                                                        <div class="progress-bar bg-warning"
                                                                                            role="progressbar"
                                                                                            style="width: 30%"
                                                                                            aria-valuenow="30"
                                                                                            aria-valuemin="0"
                                                                                            aria-valuemax="100"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <h5 class="font-weight-bold mb-0">583
                                                                                    </h5>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-muted">Mississippi</td>
                                                                                <td class="w-100 px-0">
                                                                                    <div class="progress progress-md mx-4">
                                                                                        <div class="progress-bar bg-danger"
                                                                                            role="progressbar"
                                                                                            style="width: 95%"
                                                                                            aria-valuenow="95"
                                                                                            aria-valuemin="0"
                                                                                            aria-valuemax="100"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <h5 class="font-weight-bold mb-0">924
                                                                                    </h5>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-muted">California</td>
                                                                                <td class="w-100 px-0">
                                                                                    <div class="progress progress-md mx-4">
                                                                                        <div class="progress-bar bg-info"
                                                                                            role="progressbar"
                                                                                            style="width: 60%"
                                                                                            aria-valuenow="60"
                                                                                            aria-valuemin="0"
                                                                                            aria-valuemax="100"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <h5 class="font-weight-bold mb-0">664
                                                                                    </h5>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-muted">Maryland</td>
                                                                                <td class="w-100 px-0">
                                                                                    <div class="progress progress-md mx-4">
                                                                                        <div class="progress-bar bg-primary"
                                                                                            role="progressbar"
                                                                                            style="width: 40%"
                                                                                            aria-valuenow="40"
                                                                                            aria-valuemin="0"
                                                                                            aria-valuemax="100"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <h5 class="font-weight-bold mb-0">560
                                                                                    </h5>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td class="text-muted">Alaska</td>
                                                                                <td class="w-100 px-0">
                                                                                    <div class="progress progress-md mx-4">
                                                                                        <div class="progress-bar bg-danger"
                                                                                            role="progressbar"
                                                                                            style="width: 75%"
                                                                                            aria-valuenow="75"
                                                                                            aria-valuemin="0"
                                                                                            aria-valuemax="100"></div>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <h5 class="font-weight-bold mb-0">793
                                                                                    </h5>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6 mt-3">
                                                                <canvas id="south-america-chart"></canvas>
                                                                <div id="south-america-legend"></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="carousel-control-prev" href="#detailedReports" role="button"
                                            data-bs-slide="prev">
                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        </a>
                                        <a class="carousel-control-next" href="#detailedReports" role="button"
                                            data-bs-slide="next">
                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/_footer.html -->
        <footer class="footer">
            <div class="d-sm-flex justify-content-center justify-content-sm-between">
                <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021. Premium <a
                        href="https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from
                    BootstrapDash. All rights reserved.</span>
                <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i
                        class="ti-heart text-danger ms-1"></i></span>
            </div>
        </footer>
        <!-- partial -->
    </div>

    <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger text-light">
                    <h5 class="modal-title" id="ModalLabel">Edit Customer Data</h5>
                    <button type="button" class="  btn btn-close " data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <form id="customerEdit" style=".form-group {margin-bottom: 0.5rem !important; }" method="POST"
                        action="/customer/{{ $customer->id }}/edit">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Name</label>
                            <input type="text" class="form-control" id="customer-name" name="customer-name"
                                value="{{ $customer->name }}">
                        </div>
                        <div class="form-group">
                            <label for="customer-phone" class="col-form-label">Phone</label>
                            <input type="text" class="form-control" id="customer-phone" name="customer-phone"
                                value="{{ $customer->phone }}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" class="form-control" name="email" type="email">
                        </div>
                        <div class="form-group">
                            <label for="customer-email" class="col-form-label">Email</label>
                            <input type="text" class="form-control" id="customer-email" name="customer-email"
                                value="{{ $customer->email }}">
                        </div>
                        <div class="form-group">
                            <label for="customer-fax" class="col-form-label">FAX</label>
                            <input type="text" class="form-control" id="customer-fax" name="customer-fax"
                                value="{{ $customer->fax }}">
                        </div>
                        <div class="form-group">
                            <label for="customer-website" class="col-form-label">Website</label>
                            <input type="text" class="form-control" id="customer-website" name="customer-website"
                                value="{{ $customer->website }}">
                        </div>
                        <div class="form-group">
                            <label for="customer-status" class="col-form-label">Status:</label>
                            <select class="form-control form-control-sm" id="customer-status" name="customer-status">
                                <option value="hot" {{ $customer->status == 'hot' ? 'selected' : '' }}>Hot</option>
                                <option value="warm" {{ $customer->status == 'warm' ? 'selected' : '' }}>Warm</option>
                                <option value="cold" {{ $customer->status == 'cold' ? 'selected' : '' }}>Cold</option>
                                <option value="expired" {{ $customer->status == 'expired' ? 'selected' : '' }}>Expired
                                </option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="customer-address" class="col-form-label">Address</label>
                            <input type="text" class="form-control" id="customer-address" name="customer-address"
                                value="{{ $customer->address }}">
                        </div>
                        <div class="form-group">
                            <label for="customer-note" class="col-form-label">Note</label>
                            <textarea class="form-control" id="customer-note" name="customer-note"
                                rows="2">{{ $customer->note }}</textarea>
                        </div>

                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger text-light">Update</button>
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('plugin-css')
    <link rel="stylesheet" href="{{ asset('vendors/jquery-bar-rating/css-stars.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/mdi/css/materialdesignicons.min.css') }}">
    <style>
        .form-group {
            margin-bottom: 0.5rem !important;
        }

        .modal .modal-dialog {
            margin-top: 30px !important;
        }

    </style>
@endsection
@section('plugin-js')
    <script src="{{ asset('vendors/jquery-bar-rating/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-validation/jquery.validate.min.js') }}"></script>
@endsection
@section('custom-js')
    <script src="{{ asset('js/profile-demo.js') }}"></script>
    {{-- <script src="{{ asset('js/form-validation-edit-cust.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/form-validation.js') }}"></script> --}}
    {{-- <script>
        (function($) {
            "use strict";
            $.validator.setDefaults({
                submitHandler: function() {
                    alert("submitted!");
                },
            });
            $(function() {
                // validate the comment form when it is submitted

                // validate signup form on keyup and submit
                $("#customer_edit").validate({
                    rules: {
                        customer_name: {
                            required: true,
                            minlength: 3,
                        },
                        customer_phone: {
                            required: true,
                            minlength: 10,
                        },
                        customer_email: {
                            required: true,
                            email: true,
                        }
                    },
                    messages: {
                        customer_name: {
                            required: "Please enter customer name",
                            minlength: "Customer name must consist of at least 3 characters"
                        },
                        customer_phone: {
                            required: "Please enter customer phone",
                            minlength: "Customer phone must consist of at least 10 characters"
                        },
                        customer_email: {
                            required: "Please enter customer email"
                        },

                    },
                    errorPlacement: function(label, element) {
                        label.addClass("mt-2 text-danger");
                        label.insertAfter(element);
                    },
                    highlight: function(element, errorClass) {
                        $(element).parent().addClass("has-danger");
                        $(element).addClass("form-control-danger");
                    },
                });
            });
        })(jQuery);
    </script> --}}
@endsection
