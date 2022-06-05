@extends('okrlayout.main')

@section('container')

<div class="card">
  <div class="card-body">
    <div class="row">
      <form method="POST" action="{{ route('simpanappeventdetail') }}" class="forms-sample">
        
        <!--KOLOM UNTUK FORM -->
                    <br><h3 align="center"><b>Appraisal Event</b></h3><br>
                      <div class="form-group row">
                        <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Periode</label>
                        <div class="col-sm-9">
                          <input type="date" class="form-control" id="exampleInputUsername2" placeholder="Periode">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Tanggal</label>
                        <div class="col-sm-9">
                          <input type="date" class="form-control" id="exampleInputEmail2" placeholder="Tanggal">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Asesor</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputMobile" placeholder="Asesor">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Posisi</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputMobile" placeholder="Posisi">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputMobile" class="col-sm-3 col-form-label">Crew</label>
                        <div class="col-sm-9">
                          <input type="text" class="form-control" id="exampleInputMobile" placeholder="Crew">
                        </div>
                      </div>
                      <div class="form-group row">
                        <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Score</label>
                        <div class="col-sm-9">
                          <input type="number" class="form-control" id="exampleInputPassword2" placeholder="Total Score">
                        </div>
                      </div>
        

        
        <!--KOLOM UNTUK TABEL -->
                    <div class="table-responsive">
                      <table id="sortable-table-1" class="table">
                        <thead>
                          <tr>
                            <th>OKR</th>
                            <th>Target</th>
                            <th>Satuan</th>
                            <th>Score</th>
                            <th>Project</th>
                          </tr>
                        </thead>

                        <tbody>
                          <tr>
                            @foreach($appeventdetail as $data )
                            <td>
                              <ul>{{ $data->description }}
                                <li> {{ $data->aspect }}</li>
                                <li> {{ $data->aspect2 }}</li>
                                <li> {{ $data->aspect3 }}</li>
                                <li> {{ $data->aspect4 }}</li>
                                <li> {{ $data->aspect5 }}</li>
                              </ul>  
                            </td>
                            <td><br>
                                {{ $data->target }}<br>
                                {{ $data->target2 }}<br>
                                {{ $data->target3 }}<br>
                                {{ $data->target4 }}<br>
                                {{ $data->target5 }}<br>
                            </td>
                            <td><br>
                                {{ $data->satuan }}<br>
                                {{ $data->satuan2 }}<br>
                                {{ $data->satuan3 }}<br>
                                {{ $data->satuan4 }}<br>
                                {{ $data->satuan5 }}<br>
                            </td>
                            <td> <br>
                                <input type="number" class="form-control" name="score">
                                <input type="number" class="form-control" name="score2">
                                <input type="number" class="form-control" name="score3">
                                <input type="number" class="form-control" name="score4">
                                <input type="number" class="form-control" name="score5">
                            </td>
                            <td>x</td>
                          @endforeach
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <!--DIARAHKAN KE APP PERFORMENCE / APP EVENT DETAIL UNTUK CETAK-->
                    <button type="button" class="btn btn-light" style="background-color:#C90000; color:#FFFFFF">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>

@endsection