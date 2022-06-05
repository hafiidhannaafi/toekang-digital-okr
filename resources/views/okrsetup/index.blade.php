@extends('okrlayout.main')
@section('plugin-js')
  <script src="{{ asset('vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('vendors/jquery.repeater/jquery.repeater.min.js') }}"></script>
@endsection

@section('custom-js')
  <script src="{{ asset('js/data-table.js') }}"></script>
  <script src="{{ asset('js/form-repeater.js')}}"></script>
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


<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"> Tambah Objective</h4><br>
            <!--INPUT OBJECTIVE-->
            <form action="{{ route('simpanobjective') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="input-group mb-3">
                  <input type="text" name="objective" class="form-control" placeholder="Add Objective" aria-label="Recipient's username" aria-describedby="button-addon2">
                  <button class="btn btn-outline-secondary" style="background-color: #C90000; color:#FFFFFF" type="submit" id="button-addon2">Save</button>
              </div>
            </form>

            <!--TAMPIL LIST OBJECTIVE-->
            <div class="table-responsive mt-4" >
              <table id="DataTable" class="table">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>ID Objective</th>
                          <th>Objective</th>
                          <th>Action</th>
                        </tr>
                  </thead>
                      
                  <tbody>
                      <?php 
                        $nomor = 1;  
                      ?>
                      @foreach($jenisobjectiveaspect as $data)
                      
                      <tr>
                          <td>{{ $nomor++ }}</td>
                          <td>{{$data->id}}</td>
                          <td>{{$data->description}}</td>
                                  
                          <td>
                              <!--editdata OKR-->
                              <a href="/okrsetup/editobjective/{{$data->id}}" class="btn btn-outline-warning btn-fw btn-icon-text"type="button">
                                  <i class="ti-reload btn-icon-prepend"></i></a>
                                  <!--hapusdata OKR-->
                              <a href="/okrsetup/hapusobjective/{{$data->id}}" onclick="return confirm('Hapus Data?')" type="button" class="btn btn-outline-danger btn-icon-text">
                                  <i class="ti-alert btn-icon-prepend"></i></a>
                          </td>
                          @endforeach
                      </tr>
                  </tbody>
              </table>
            </div>
        </div>
    </div>
  </div>

  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"> Tambah Key Result</h4><br>
            <!--INPUT KEYRESULT-->
            <form action="{{ route('simpankeyresult') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="input-group mb-3">
                  <input type="text" name="aspects" class="form-control" placeholder="Add Key Result" aria-label="Recipient's username" aria-describedby="button-addon2">
                  <button class="btn btn-outline-secondary" style="background-color: #C90000; color:#FFFFFF" type="submit" id="button-addon2">Save</button>
              </div>
            </form>

            <!--TAMPIL LIST KEYRESULT-->
            <div class="table-responsive mt-4" >
              <table id="DataTable2" class="table">
                  <thead>
                      <tr>
                          <th>No</th>
                          <th>ID Key Result</th>
                          <th>Key Result</th>
                          <th>Action</th>
                        </tr>
                  </thead>
                      
                  <tbody>
                      <?php 
                        $nomor = 1;  
                      ?>
                      @foreach($aspects as $data)
                      
                      <tr>
                          <td>{{ $nomor++ }}</td>
                          <td>{{$data->id}}</td>
                          <td>{{$data->aspects}}</td>
                                  
                          <td>
                              <!--editdata OKR-->
                              <a href="/okrsetup/editkeyresult/{{$data->id}}" class="btn btn-outline-warning btn-fw btn-icon-text"type="button">
                                  <i class="ti-reload btn-icon-prepend"></i></a>
                                  <!--hapusdata OKR-->
                              <a href="/okrsetup/hapuskeyresult/{{$data->id}}" onclick="return confirm('Hapus Data?')" type="button" class="btn btn-outline-danger btn-icon-text">
                                  <i class="ti-alert btn-icon-prepend"></i></a>
                          </td>
                          @endforeach
                      </tr>
                  </tbody>
              </table>
            </div>
        </div>
    </div>
  </div>
</div> 

<div class="row">
  <div class="col-md-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <div class="modal fade" id="addaspect" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="modalLabel">Input OKR</h5>
                      <button type="button" class="btn-close btn" data-bs-dismiss="modal" aria-label="Close"> </button>
                  </div>

                  <form action="{{ route('simpanokr') }}" method="POST" name="formokr" enctype="multipart/form-data">
                      @csrf 
                      <div class="modal-body">
                          <div class="form-group">
                              <label for="message-text" class="col-form-label">Objective</label>
                              <select style="color: #C90000; background-color:#FFFFFF" class="form-select form-select-lg mb-3" name="objectiveaspects_id" aria-label=".form-select-lg example">
                                <!-- <option selected>Open this select menu</option>-->
                                @foreach($jenisobjectiveaspect as $data)
                                <option value="{{ $data->id }}"> {{ $data->description }}</option>
                                @endforeach
                            </select>
                          </div>

                          <div class="form-group">
                              <label for="message-text" class="col-form-label">Jenis Posisi</label>
                              <select style="color: #C90000; background-color:#FFFFFF" class="form-select form-select-lg mb-3" name="positions_id" aria-label=".form-select-lg example">
                                @foreach($jenisposisi as $data)
                                <option value="{{ $data->id }}"> {{ $data->nama_posisi }}</option>
                                @endforeach
                              </select>
                          </div>

                          <div class="form-group">
                            <div class="row g-3">
                              <div class="col-sm-7">
                                <label for="message-text" class="col-form-label">Keyresult</label>
                                <select name="aspects[]" style="color: #C90000; background-color:#FFFFFF" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                  @foreach($aspects as $data)
                                  <option value="{{ $data->id }}"> {{ $data->aspects }}</option>
                                  @endforeach
                                </select>
                              </div>
                             

                              <div class="col-sm">
                                <label for="message-text" class="col-form-label">Target</label>
                                <input type="text" class="form-control" name="target[]" placeholder="Target" aria-label="State">
                              </div>
                          
                             

                              <div class="col-sm">
                                <label for="message-text" class="col-form-label">Satuan</label>
                                <input type="text" class="form-control" name="satuan[]" placeholder="Satuan" aria-label="Zip">
                              </div>


                            </div>

                                                        <div class="row g-3">
                              <div class="col-sm-7">
                                <label for="message-text" class="col-form-label">Keyresult</label>
                                <select name="aspects[]" style="color: #C90000; background-color:#FFFFFF" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                  @foreach($aspects as $data)
                                  <option value="{{ $data->id }}"> {{ $data->aspects }}</option>
                                  @endforeach
                                </select>
                              </div>
                             

                              <div class="col-sm">
                                <label for="message-text" class="col-form-label">Target</label>
                                <input type="text" class="form-control" name="target[]" placeholder="Target" aria-label="State">
                              </div>
                          
                             

                              <div class="col-sm">
                                <label for="message-text" class="col-form-label">Satuan</label>
                                <input type="text" class="form-control" name="satuan[]" placeholder="Satuan" aria-label="Zip">
                              </div>


                            </div>

                                                        <div class="row g-3">
                              <div class="col-sm-7">
                                <label for="message-text" class="col-form-label">Keyresult</label>
                                <select name="aspects[]" style="color: #C90000; background-color:#FFFFFF" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                  @foreach($aspects as $data)
                                  <option value="{{ $data->id }}"> {{ $data->aspects }}</option>
                                  @endforeach
                                </select>
                              </div>
                             

                              <div class="col-sm">
                                <label for="message-text" class="col-form-label">Target</label>
                                <input type="text" class="form-control" name="target[]" placeholder="Target" aria-label="State">
                              </div>
                          
                             

                              <div class="col-sm">
                                <label for="message-text" class="col-form-label">Satuan</label>
                                <input type="text" class="form-control" name="satuan[]" placeholder="Satuan" aria-label="Zip">
                              </div>


                            </div>
                          </div>

                          <div class="modal-footer">
                              <button type="submit" class="btn btn-danger"  style="background-color:#C90000; color:#FFFFFF">Save</button>
                              <button type="button" class="btn btn-light"  style="background-color:#9999; color:#FFFFFF" data-bs-dismiss="modal">Close</button>
                          </div>
                      </div>
                  </form>
              </div>
          </div>
      </div>

      <h4 class="card-title"> Objective Key Result</h4><br>
      <button class="btn btn-danger"type="button" style="background-color:#C90000; color:#FFFFFF" data-bs-toggle="modal" data-bs-target="#addaspect" data-whatever="@mdo">Add OKR</button>
        <div class="table-responsive mt-4">
          <table id="DataTable3" class="table">
            <thead>
              <tr>
                <th>Posisi</th>
                <th>Objective</th>
                <th>Key Result</th>
                <th>Target</th>
                <th>Satuan</th>
              </tr>
            </thead>
            <tbody>
                @foreach($appraisalaspects as $data)
                  <tr>
                    <td>{{ $data->positions->nama_posisi }}</td>
                    <td>{{ $data->objectiveaspects->description }}</td>
                    <td>{{ $data->keyresults->aspects }}</td>
                    <td>{{ $data->target }}</td>
                    <td>{{ $data->satuan }}</td>
                  </tr>
                @endforeach
            </tbody>
          </table>
        </div>
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