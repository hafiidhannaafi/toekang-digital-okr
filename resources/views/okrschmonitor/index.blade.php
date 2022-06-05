@extends('okrlayout.main')
@section('plugin-js')
  <script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  @endsection
@section('custom-js')
<script src="{{ asset('js/data-table.js') }}"></script>
@endsection
@section('plugin-css')
  <link rel="stylesheet" href="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
@endsection
@section('container')
  @if(count($errors) > 0)
    <div class="alert alert-danger">
      <ul>
        @foreach($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

      <!-- partial -->
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title ">Schedule Monitor</h4> <br>
                  <div class="row align-items-start">
                    <div class="col-4">
                      <label for="inputAddress" class="form-label"> Tahun</label>
                      <select style="color: #C90000; background-color:#FFFFFF" class="form-control" name="positions_id" placeholder="Posisi Crew">
                        <!--  <option value="">- Pilih- </option>-->
                       
                        <option value=""> 2 </option>
                       
                      </select>
                    </div>

                    <div class="col-4">
                      <label for="inputAddress" class="form-label"> Bulan</label>
                      <select style="color: #C90000; background-color:#FFFFFF" class="form-control" name="positions_id" placeholder="Posisi Crew">
                        <!--  <option value="">- Pilih- </option>-->
                       
                        <option value=""> 2 </option>
                       
                      </select>
                    </div>

                    <div class="col-4">
                      <label for="inputAddress" class="form-label"> Crew</label>
                      <select style="color: #C90000; background-color:#FFFFFF" class="form-control" name="positions_id" placeholder="Posisi Crew">
                        <!--  <option value="">- Pilih- </option>-->
                       
                        <option value=""> 2 </option>
                       
                      </select>
                    </div>
                  </div>
   
                    <div class="table-responsive mt-4">
                    <table id="DataTable" class="table">
                      <thead>
                        <tr>
                            <th>Tanggal</th>
                            <th>ID Project</th>
                            <th>Activities</th>
                            <th>Nama Crew</th>
                            <th>Nama Project</th>
                        </tr>
                      </thead>
                      <tbody>
                          <tr>
                            <td>x</td>
                            <td>x</td>
                            <td>x</td>
                            <td>x</td>
                            <td>x</td>
                          </tr>
                        </tbody>
                    </table>
                  </div>
                  </div>
                </div>
  <!-- footer -->
<footer class="footer " ><br>
  <div class="d-sm-flex justify-content-center justify-content-sm-between text-center" style="text-align: center"><br>
    <span class="text-muted text-center text-sm-center d-block d-sm-inline-block " style="text-align: center">Copyright © 2021. Jawara Group. All rights reserved.</span>
  </div>
</footer>
@endsection
