@extends('okrlayout.main')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-10 offset-md-1">
            <div class="card">
                <div class="card-header">{{ $user->name }}'s Profile page</div>

                <div class="card-body">
                    Hi, {{ $user->name }} This is a private profile page!!!
                </div>
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


