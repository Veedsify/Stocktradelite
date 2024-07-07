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
        <div class="row">


          <div class="col-sm-6 col-xl-4">
            <div class="card bg-primary-subtle shadow-none">
              <div class="card-body p-4">
                <div class="d-flex align-items-center">

                  <h6 class="mb-0">Users</h6>

                </div>
                <div class="d-flex align-items-center justify-content-between mt-3">
                  <h3 class="mb-0 fw-semibold fs-7">0</h3>
                </div>
                <div class="ms-auto text-info d-flex align-items-center mt-3">
                   <a href="#" style="text-decoration:underline; ">View User</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-4">
            <div class="card bg-success-subtle shadow-none">
              <div class="card-body p-4">
                <div class="d-flex align-items-center">

                  <h6 class="mb-0">Pending Transactions</h6>

                </div>
                <div class="d-flex align-items-center justify-content-between mt-3">
                  <h3 class="mb-0 fw-semibold fs-7">0</h3>
                </div>
                <div class="ms-auto text-info d-flex align-items-center mt-3">
                   <a href="#" style="text-decoration:underline; ">View Transaction</a>
                  </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-4">
            <div class="card bg-danger-subtle shadow-none">
              <div class="card-body p-4">
                <div class="d-flex align-items-center">

                  <h6 class="mb-0">Contact Requests</h6>

                </div>
                <div class="d-flex align-items-center justify-content-between mt-3">
                  <h3 class="mb-0 fw-semibold fs-7">0</h3>
                </div>
                <div class="ms-auto text-info d-flex align-items-center mt-3">
                   <a href="#" style="text-decoration:underline; ">View Requests</a>
                  </div>
              </div>
            </div>
          </div>

        </div>
        <!--  Row 1 -->



      </div>
    </div>

    <x-admin.canvas />

  </div>
  <x-admin.search />




</div>

@endsection
