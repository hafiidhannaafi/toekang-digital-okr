@extends('okrlayout.main')

@section('container')
<div class="card">
  <div class="card-body">
<form name="editokr" action="/okrsetup/update/{{$appraisalaspect->id}}" method="POST">
  @csrf
    <div class="form-group">
        <label for="message-text" class="col-form-label">Objective</label>
        <select style="color: #C90000; background-color:#FFFFFF" class="form-select form-select-lg mb-3" name="objectiveaspects_id" aria-label=".form-select-lg example">
          <!-- <option selected>Open this select menu</option>-->
          <?php
            foreach ($jenisobjectiveaspect as $data) 
            {
              echo "<option value='$data->id'";
              echo $appraisalaspect['objectiveaspects_id']==$data->id?'selected':'';
              echo ">$data->description</option>";
            }          
          ?>
          
        </select>
      </div>
      <div class="form-group">
        <label for="message-text" class="col-form-label">Posisi</label>
        <select style="color: #C90000; background-color:#FFFFFF" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
          <?php
            foreach ($jenisposisi as $data) 
            {
              echo "<option value='$data->id'";
              echo $appraisalaspect['positions_id']==$data->id?'selected':'';
              echo ">$data->nama_posisi</option>";
            }          
          ?>
          
        </select>
      </div>
      <div class="form-group">
        <div class="row g-3">
          <div class="col-sm-7">
            <label for="message-text" class="col-form-label">Keyresult</label>
            <input type="text" name="aspect" class="form-control" placeholder="Key Result" value="{{$appraisalaspect->aspect}}" aria-label="City">
          </div>
          <div class="col-sm">
            <label for="message-text" class="col-form-label">Target</label>
            <input type="text" name="target" class="form-control" placeholder="Target" value="{{$appraisalaspect->target}}"aria-label="State">
          </div>
          <div class="col-sm">
            <label for="message-text" class="col-form-label">Satuan</label>
            <input type="text" name="satuan" class="form-control" placeher="Satuan" value="{{$appraisalaspect->satuan}}" aria-label="Zip">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row g-3">
          <div class="col-sm-7">
            <input type="text" name="aspect2" class="form-control" placeh er="KeyResult" value="{{   $appraisalaspect->aspect2}}"aria-label="City">
          </div>
          <div class="col-sm">
            <input type="text" name="target2" class="form-control" placeholder="Target" value="{{ $appraisalaspect->target2}}" aria-label="State">
          </div>
          <div class="col-sm">
            <input type="text" name="satuan2" class="form-control" placeholder="Satuan" value="{{ $appraisalaspect->satuan2}}" aria-label="Zip">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row g-3">
          <div class="col-sm-7">
            <input type="text" name="aspect3" class="form-control" placeholder="Key Result" value="{{ $appraisalaspect->aspect3}}"aria-label="City">
          </div>
          <div class="col-sm">
            <input type="text" name="target3" class="form-control" placeholder="Target" value="{{ $appraisalaspect->target3}}" aria-label="State">
          </div>
          <div class="col-sm">
            <input type="text" name="satuan3" class="form-control" placeholder="Satuan" value="{{ $appraisalaspect->satuan3}}" aria-label="Zip">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row g-3">
          <div class="col-sm-7">
            <input type="text" name="aspect4" class="form-control" placeholder="Key Result" value="{{ $appraisalaspect->aspect4}}"aria-label="City">
          </div>
          <div class="col-sm">
            <input type="text" name="target4" class="form-control" placeholder="Target" value="{{ $appraisalaspect->target4}}" aria-label="State">
          </div>
          <div class="col-sm">
            <input type="text" name="satuan4" class="form-control" placeholder="Satuan" value="{{ $appraisalaspect->satuan4}}" aria-label="Zip">
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="row g-3">
          <div class="col-sm-7">
            <input type="text" name="aspect5" class="form-control" placeholder="Key Result" value="{{ $appraisalaspect->aspect5}}" aria-label="City">
          </div>
          <div class="col-sm">
            <input type="text" name="target5" class="form-control" placeholder="Target" value="{{ $appraisalaspect->target5}}" aria-label="State">
          </div>
          <div class="col-sm">
            <input type="text" name="satuan5" class="form-control" placeholder="Satuan" value="{{ $appraisalaspect->satuan5}}" aria-label="Zip">
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="submit" class="btn btn-danger"  style="background-color:#C90000; color:#FFFFFF">Update</button>
        <a href="/okrsetup" type="button" class="btn btn-light"  style="background-color:#9999; color:#FFFFFF" data-bs-dismiss="modal">Close</a>
      </div>
</form>
  </div>
</div>
@endsection