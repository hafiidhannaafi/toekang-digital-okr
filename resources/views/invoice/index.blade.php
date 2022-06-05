@extends('layout.master')

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <div class="card px-2">
                    <div class="card-body print" id="printableArea">
                        <div class="container-fluid d-flex justify-content-between">
                          <div class="col-lg-8 ps-0">
                            <h3 class="text-right my-5">Invoice&nbsp;&nbsp;#INV-17</h3>
                          </div>
                          <div class="col-lg-4 pr-0">
                              <span class="stamp mx-5 mt-4 is-nope" >UNPAID</span>
                          </div>
                        </div>
                        <div class="container-fluid d-flex justify-content-between">
                            <div class="col-lg-3 ps-0">
                                <p class="mt-5 mb-2"><b>Skydash Admin</b></p>
                                <p>104,<br>Minare SK,<br>Canada, K1A 0G9.</p>
                            </div>
                            <div class="col-lg-3 pr-0">
                                <p class="mt-5 mb-2 text-right"><b>Invoice to</b></p>
                                <p class="text-right">Gaala & Sons,<br> C-201, Beykoz-34800,<br> Canada, K1A
                                    0G9.</p>
                            </div>
                        </div>
                        <div class="container-fluid d-flex justify-content-between">
                            <div class="col-lg-3 ps-0">
                                <p class="mb-0 mt-5">Invoice Date : 23rd Jan 2016</p>
                                <p>Due Date : 25th Jan 2017</p>
                            </div>
                        </div>
                        <div class="container-fluid mt-5 d-flex justify-content-center w-100">
                            <div class="table-responsive w-100">
                                <table class="table">
                                    <thead>
                                        <tr class="font-weight-bold bg-dark text-light text-uppercase" id="dark">
                                            <th>#</th>
                                            <th>Description</th>
                                            <th class="text-right">Quantity</th>
                                            <th class="text-right">Unit cost</th>
                                            <th class="text-right">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="text-right">
                                            <td class="text-left">1</td>
                                            <td class="text-left">Brochure Design</td>
                                            <td>2</td>
                                            <td>$20</td>
                                            <td>$40</td>
                                        </tr>
                                        <tr class="text-right">
                                            <td class="text-left">2</td>
                                            <td class="text-left">Web Design Packages(Template) - Basic</td>
                                            <td>05</td>
                                            <td>$25</td>
                                            <td>$125</td>
                                        </tr>
                                        <tr class="text-right">
                                            <td class="text-left">3</td>
                                            <td class="text-left">Print Ad - Basic - Color</td>
                                            <td>08</td>
                                            <td>$500</td>
                                            <td>$4000</td>
                                        </tr>
                                        <tr class="text-right">
                                            <td class="text-left">4</td>
                                            <td class="text-left">Down Coat</td>
                                            <td>1</td>
                                            <td>$5</td>
                                            <td>$5</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="container-fluid mt-5 w-100">
                            <p class="text-right mb-2">Sub - Total amount: $12,348</p>
                            <p class="text-right">vat (10%) : $138</p>
                            <h4 class="text-right mb-5">Total : $13,986</h4>
                            <hr>
                        </div>

                    </div>
                    <div class="container-fluid w-100 mb-5" id="non-printable">
                        <a href="#" onclick="printDiv('printableArea')"
                            class="btn btn-primary float-right mt-4 ms-2" id="non-printable"><i
                                class="ti-printer me-1"></i>Print</a>
                        <a href="#" class="btn btn-success float-right mt-4" id="non-printable"><i
                                class="ti-export me-1"></i>Send Invoice</a>
                    </div>
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

@section('plugin-css')
<link rel="stylesheet" href="/css/invoice.css">
@endsection

@section('plugin-js')
@endsection

@section('custom-js') 

<script src="/js/invoice.js"></script>
@endsection
