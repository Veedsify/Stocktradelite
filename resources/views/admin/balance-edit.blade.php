@extends('../layouts/admin/adminlayout')
@section('content')



<div id="main-wrapper">
  <!-- Sidebar Start -->
  <x-admin.aside />
  <!--  Sidebar End -->

  <div class="page-wrapper">
    <!--  Header Start -->
    <x-admin.header />

    <!--  Header End -->


    <div class="body-wrapper">
      <div class="container-fluid">

        <!--  Owl carousel -->
        <form class="row">


          <div class="col-sm-6 col-xl-4">
            <div class="card bg-primary-subtle shadow-none">
              <div class="card-body p-4">
                <div class="d-flex align-items-center">

                  <h6 class="mb-0">Total Balances <span>$</span></h6>

                </div>
                <div class="d-flex align-items-center justify-content-between mt-3 fs-7">
                  <input type="number" name="" id="" class="form-control fs-7">
                </div>
                <div class="ms-auto text-info d-flex align-items-center mt-3">
                   <a href="#" style="text-decoration:underline; ">Edit</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-4">
            <div class="card bg-primary-subtle shadow-none">
              <div class="card-body p-4">
                <div class="d-flex align-items-center">

                  <h6 class="mb-0">Total Deposit <span>$</span></h6>

                </div>
                <div class="d-flex align-items-center justify-content-between mt-3 fs-7">
                  <input type="number" name="" id="" class="form-control fs-7">
                </div>
                <div class="ms-auto text-info d-flex align-items-center mt-3">
                   <a href="#" style="text-decoration:underline; ">Edit</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-4">
            <div class="card bg-primary-subtle shadow-none">
              <div class="card-body p-4">
                <div class="d-flex align-items-center">

                  <h6 class="mb-0">Total Trade <span>$</span></h6>

                </div>
                <div class="d-flex align-items-center justify-content-between mt-3 fs-7">
                  <input type="number" name="" id="" class="form-control fs-7">
                </div>
                <div class="ms-auto text-info d-flex align-items-center mt-3">
                   <a href="#" style="text-decoration:underline; ">Edit</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-4">
            <div class="card bg-primary-subtle shadow-none">
              <div class="card-body p-4">
                <div class="d-flex align-items-center">

                  <h6 class="mb-0">Profits <span>$</span></h6>

                </div>
                <div class="d-flex align-items-center justify-content-between mt-3 fs-7">
                  <input type="number" name="" id="" class="form-control fs-7">
                </div>
                <div class="ms-auto text-info d-flex align-items-center mt-3">
                   <a href="#" style="text-decoration:underline; ">Edit</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-4">
            <div class="card bg-primary-subtle shadow-none">
              <div class="card-body p-4">
                <div class="d-flex align-items-center">

                  <h6 class="mb-0">Order's <span>$</span></h6>

                </div>
                <div class="d-flex align-items-center justify-content-between mt-3 fs-7">
                  <input type="number" name="" id="" class="form-control fs-7">
                </div>
                <div class="ms-auto text-info d-flex align-items-center mt-3">
                   <a href="#" style="text-decoration:underline; ">Edit</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-4">

              <button class="col-6 fs-6  btn btn-primary">Save</button>
            </div>



        </form>
        <!--  Row 1 -->



      </div>
    </div>

    <x-admin.canvas />

  </div>
  <x-admin.search />




</div>

@endsection
