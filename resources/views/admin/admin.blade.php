@extends('../layouts/admin/adminlayout')
@section('content')



<div id="main-wrapper">
  <!-- Sidebar Start -->
  <x-admin.aside />
  <!--  Sidebar End -->

  <div class="page-wrapper">
    <!--  Header Start -->
    <x-admin.header />
    <div class="body-wrapper">
      <div class="container-fluid">
        <!-- TradingView Widget BEGIN -->
        <div class="row">
          <div class="col-sm-6 col-xl-4">
            <div class="card bg-primary-subtle shadow-none">
              <div class="card-body p-4">
                <div class="d-flex align-items-center">

                  <h6 class="mb-0">Users</h6>

                </div>
                <div class="d-flex align-items-center justify-content-between mt-3">
                  <h3 class="mb-0 fw-semibold fs-7">
                    {{number_format($usersCount)}}
                  </h3>
                </div>
                <div class="ms-auto text-info d-flex align-items-center mt-3">
                  <a href="{{route('users')}}" style="text-decoration:underline; ">View Users</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-4">
            <div class="card bg-success-subtle shadow-none">
              <div class="card-body p-4">
                <div class="d-flex align-items-center">
                  <h6 class="mb-0">Pending Kyc Requests</h6>
                </div>
                <div class="d-flex align-items-center justify-content-between mt-3">
                  <h3 class="mb-0 fw-semibold fs-7">
                    {{number_format($pendingKyc)}}
                  </h3>
                </div>
                <div class="ms-auto text-info d-flex align-items-center mt-3">
                  <a href="{{route('admin.kyc')}}" style="text-decoration:underline; ">View Kyc Requests</a>
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
                  <h3 class="mb-0 fw-semibold fs-7">
                    {{number_format($contactCount)}}
                  </h3>
                </div>
              </div>
            </div>
          </div>
          <div class="col-sm-6 col-xl-4">
            <div class="card bg-warning-subtle shadow-none">
              <div class="card-body p-4">
                <div class="d-flex align-items-center">

                  <h6 class="mb-0">Withdrawal Requests</h6>

                </div>
                <div class="d-flex align-items-center justify-content-between mt-3">
                  <h3 class="mb-0 fw-semibold fs-7">
                    {{number_format($pendingWIthdrwal)}}
                  </h3>
                </div>
                <div class="ms-auto text-info d-flex align-items-center mt-3">
                  <a href="{{route('admin.withdrawals')}}" style="text-decoration:underline; ">View Withdrawals</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <x-admin.canvas />

  </div>
  <x-admin.search />




</div>

@endsection