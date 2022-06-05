@extends('okrlayout.main')

@section('container')
    <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h1>Login Sebagai:
            {{ Auth::user()->level }}</h1>
          <p class="card-title">Order Details</p>
          <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
          <div class="d-flex flex-wrap mb-5">
            <div class="me-5 mt-3">
              <p class="text-muted">Order value</p>
              <h3 class="text-primary fs-30 font-weight-medium">12.3k</h3>
            </div>
            <div class="me-5 mt-3">
              <p class="text-muted">Orders</p>
              <h3 class="text-primary fs-30 font-weight-medium">14k</h3>
            </div>
            <div class="me-5 mt-3">
              <p class="text-muted">Users</p>
              <h3 class="text-primary fs-30 font-weight-medium">71.56%</h3>
            </div>
            <div class="mt-3">
              <p class="text-muted">Downloads</p>
              <h3 class="text-primary fs-30 font-weight-medium">34040</h3>
            </div> 
          </div>
          <canvas id="order-chart"></canvas>
        </div>
      </div>
    </div>
    <div class="col-md-6 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
         <div class="d-flex justify-content-between">
          <p class="card-title">Sales Report</p>
          <a href="#" class="text-info">View all</a>
         </div>
          <p class="font-weight-500">The total number of sessions within the date range. It is the period time a user is actively engaged with your website, page or app, etc</p>
          <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
          <canvas id="sales-chart"></canvas>
        </div>
      </div>
    </div>
  </div>
  <footer class="footer " ><br>
    <div class="d-sm-flex justify-content-center justify-content-sm-between text-center" style="text-align: center"><br>
      <span class="text-muted text-center text-sm-center d-block d-sm-inline-block " style="text-align: center">Copyright © 2021. Jawara Group. All rights reserved.</span>
    </div>
  </footer>
@endsection


