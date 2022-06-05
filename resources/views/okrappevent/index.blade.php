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

<div class="card">
    <div class="card-body">
        <div class="row">
            <!--KOLOM UNTUK FORM -->
            <br>
            <h3 align="center"><b>Appraisal Event</b></h3><br>
            <form action="{{ route('searchcrew') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Nama Crew</label>
                    <div class="col-sm-9">
                        <select type="select" class="form-select form-select-lg mb-3" class="col-form-label"
                            id="exampleInputMobile" placeholder="Crew" name="crew">
                            <option value=" "> pilih crew </option>
                            @foreach($employee as $item)
                                <option value="{{ $item->id }} ">{{ $item->name }} </option>

                            @endforeach
                        </select>
                    </div>
                    <!--RELOAD OKR MASING-MASING EMPLOYEE-->
                    <br>
                    <h3 align="right"><button type="submit" class="btn btn-light"
                            style="background-color:#C90000; color:#FFFFFF">Reload</button><br>
            </form>
            <form method="POST" action="{{ route('simpanappeventdetail') }}" class="forms-sample"
                enctype="multipart/form-data">
                @csrf
                <div class="form-group row">
                    <label for="exampleInputUsername2" class="col-sm-3 col-form-label">Periode</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="exampleInputUsername2" placeholder="Isi bulan-tahun"
                            name="periodeevent">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputEmail2" class="col-sm-3 col-form-label">Tanggal</label>
                    <div class="col-sm-9">
                        <input type="date" class="form-control" id="exampleInputEmail2" placeholder="Tanggal"
                            name="datetime">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="exampleInputMobile" class="col-sm-3 col-form-label">Nama Asesor</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" id="exampleInputMobile" placeholder="Asesor"
                            name="employees_id" >
                          
                    </div>
                </div>


        </div>

        <div class="form-group row">
            <label for="exampleInputPassword2" class="col-sm-3 col-form-label">Total Score</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="exampleInputPassword2" placeholder="Total Score"
                    name="total_score">
            </div>
        </div>





        <!--KOLOM UNTUK TABEL -->
        <div class="table-responsive mt-4">
            <table id="DataTable" class="table">
                <thead>
                    <tr>
                        <th>Objective</th>
                        <th>Aspek</th>
                        <th>Target</th>
                        <th>Satuan</th>
                        <th>Score</th>
                        <th>Project</th>
                    </tr>
                </thead>
                @if($status=='OK')


                    <tbody>
                        @foreach($data as $item )
                            <tr>
                                <td>
                                    <input type="hidden" class="form-control" name="objectives[]"
                                        value="{{ $item->objectiveaspects->id }}" readonly>
                                    {{ $item->objectiveaspects->description }}
                                </td>
                                <td>
                                    <input type="hidden" class="form-control" name="aspects[]"
                                        value="{{ $item->keyresults->id }}" readonly>
                                    {{ $item->keyresults->aspects }}
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="targets[]"
                                        value="{{ $item->target }}" readonly>
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="satuans[]"
                                        value="{{ $item->satuan }}" readonly>
                                </td>
                                <td>
                                    <input type="number" class="form-control" name="scores[]">
                                </td>
                                <td>
                                    @foreach($nyoba->projects as $i)
                                        <input type="hidden" class="form-control" name="projects[]"
                                            value="{{ $i->id }}" readonly>
                                        {{ $i->nama_project }}
                                    @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                @endif
            </table>
        </div>
        <!--DIARAHKAN KE APP PERFORMENCE / APP EVENT DETAIL UNTUK CETAK-->
        <br> <button type="submit" class="btn btn-light" style="background-color:#C90000; color:#FFFFFF">Save</button>
    </div>
    </form>
</div>
</div>
</div>

@endsection
