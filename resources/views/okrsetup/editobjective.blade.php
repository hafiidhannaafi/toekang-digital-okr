@extends('okrlayout.main')

@section('container')
<div class="card">
  <div class="card-body">
    <form name="editobjective" action="/okrsetup/updateobjective/{{$jenisobjectiveaspect->id}}" method="POST">
    @csrf
        <div class="form-group">
            <label for="message-text" class="col-form-label">Objective</label>
            <input type="text" name="description" class="form-control" value="{{$jenisobjectiveaspect->description}}">
        </div>
        
        <div class="modal-footer">
            <button type="submit" class="btn btn-danger"  style="background-color:#C90000; color:#FFFFFF">Update</button>
            <a href="/okrsetup" type="button" class="btn btn-light"  style="background-color:#9999; color:#FFFFFF" data-bs-dismiss="modal">Close</a>
        </div>
    </form>
  </div>
</div>
@endsection