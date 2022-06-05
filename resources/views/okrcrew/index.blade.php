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
                  <h4 class="card-title ">Jawara Crew</h4> <br>

                  <!--INPUT JENIS POSISI-->
                  <form action="{{ route('simpanjenisposisi') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <!--<h6 class="modal-title" id="ModalLabel">Tambah Jenis Posisi</h6><br>-->
                    <div class="input-group mb-3">
                       <input type="text" name="posisi" class="form-control" placeholder="Add New Position" aria-label="Recipient's username" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" style="background-color: #C90000; color:#FFFFFF" type="submit" id="button-addon2">Save</button>
                    </div>
                  </form> 

                      <!--INPUT ADD CREW-->
                  <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="ModalLabel">Input Crew Jawara</h5>
                          <button type="button" class="btn-close btn  " data-bs-dismiss="modal" aria-label="Close"> 
                          </button>
                        </div>

                        <form name="formaddcrew" method="POST" action="{{ route('simpancrew') }}" enctype="multipart/form-data" class="row g-3">
                          @csrf
                          <div class="modal-body">
                            <div class="col-12">
                              <label for="inputAddress" class="form-label">Nama</label>
                              <input type="text" class="form-control" name="nama" placeholder="Nama Crew">
                            </div>

                              
                      <!--select jenis CREW-->
                              <div class="col-12">
                              <label for="inputAddress" class="form-label"> Jenis Posisi</label>
                              <select style="color: #C90000; background-color:#FFFFFF" class="form-control" name="positions_id" placeholder="Posisi Crew">
                                <!--  <option value="">- Pilih- </option>-->
                                @foreach($jenisposisi as $data)
                                <option value="{{ $data->id }}"> {{ $data->nama_posisi }}</option>
                               @endforeach
                              </select>
                              </div>

                            <!--select ROLE CREW-->
                              <div class="col-12">
                              <label for="inputAddress" class="form-label"> Role</label>
                              <select style="color: #C90000; background-color:#FFFFFF" class="form-control" name="levels_id" placeholder="Role Crew">
                                <!--  <option value="">- Pilih- </option>-->
                                @foreach($jenislevel as $data)
                                <option value="{{ $data->id }}"> {{ $data->nama }}</option>
                               @endforeach
                              </select>
                              </div>

                            <div class="col-12">
                              <label for="inputAddress2" class="form-label">Alamat</label>
                              <input type="text" class="form-control" name="alamat" placeholder="Jl Mojo Plesungan, Gondangrejo, Karanganyar">
                            </div>
                            <div class="col-12">
                              <label for="inputEmail4" class="form-label">No Telp</label>
                              <input type="text" class="form-control" name="phone">
                            </div>
                            <div class="col-12">
                              <label for="inputEmail4" class="form-label">Email</label>
                              <input type="email" class="form-control" name="email">
                            </div>
                            <div class="col-12">
                              <label for="inputPassword4" class="form-label">Password</label>
                              <input type="password" class="form-control" name="password">
                            </div>
                          </div>
                        
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-danger"  style="background-color: #C90000; color:#FFFFFF">Save</button>
                          <button type="button" class="btn btn-light"  style="background-color: #999999; color:#FFFFFF" data-bs-dismiss="modal">Close</button>
                        </div>
                      </form>
                      </div>
                    </div>
                  </div>
                  <button class="btn btn-danger" type="button" style="background-color:#C90000; color:#FFFFFF" data-bs-toggle="modal" data-bs-target="#exampleModal-4" data-whatever="@mdo"   href="/employee/tambah" >
                    Add Crew</button>
   
                    <div class="table-responsive mt-4">
                    <table id="DataTable" class="table">
                      <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Posisi</i></th>
                            <th>Alamat</th>
                            <th>No Telp</th>
                            <th>E-Mail</th>
                            <th>Password</th>
                        </tr>
                      </thead>
                      <tbody>

                          @foreach($employee as $data)
                          <tr>
                            <td>{{ $data->id }}</td>
                            <td>{{ $data->name }}</td>
                            <td>{{ $data->positions->nama_posisi}}</td>
                            <td>{{ $data->address }}</td>
                            <td>{{ $data->phone }}</td>
                            <td>{{ $data->email }}</td>
                            <td>{{ $data->password }}</td> 
                          </tr>
                          @endforeach

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
