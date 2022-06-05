@extends('okrlayout.main')

@section('container')

<div class="card">
  <div class="card-body">
    <div class="row">
        <div class="col-4">
        <!--KOLOM UNTUK FORM -->
            <form>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Periode</span>
                    <input type="text" value="" name="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Tanggal</span>
                    <input type="text" value="" name="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nama Assesor</span>
                    <input type="text" value="" name="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Posisi</span>
                    <input type="text" value="" name="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nama Crew</span>
                    <input type="text" value="" name="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>

                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Score</span>
                    <input type="text" value="" name="" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
            </form>
        </div>

        <div class="col-8">
        <!--KOLOM UNTUK TABEL -->
                    <div class="table-responsive">
                      <table id="sortable-table-1" class="table">
                        <thead>
                          <tr>
                            <th>No</th>
                            <th>OKR</th>
                            <th>Target</th>
                            <th>Satuan</th>
                            <th>Score</th>
                            <th>Project</th>
                          </tr>
                        </thead>

                        <tbody>
                        
                         
                          <tr>
                            <td>x</td>
                            <td>x</td>
                            <td>x</td>
                            <td>x</td>
                            <td>x</td>
                            <td>x</td>
                            
                          </tr>
                          

                        </tbody>
                      </table>
                    </div>
                    <a href=" " type="button" class="btn btn-light"  style="background-color:#9999; color:#FFFFFF" >Cetak</a>
        </div>
  </div>
  </div>
</div>

@section