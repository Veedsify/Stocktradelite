@extends('layouts.app')
@section('content')
<div id="main-wrapper">
  <div class="position-relative overflow-hidden min-vh-100 w-100 d-flex align-items-center justify-content-center">
    <div class="d-flex align-items-center justify-content-center w-100">
      <div class="row justify-content-center w-100">
        <div class="col-lg-4">
          <div class="text-center">

            <img src="{{asset('assets/images/background/internal-error.png')}}" alt="matdash-img" class="img-fluid"
              width="500">
            <h1 class="fw-semibold mb-7 fs-9">505 INTERNAL ERROR!!!</h1>
            <a class="btn text-white" style="background:#d5745b ;" href="/">Go Back to Home</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection