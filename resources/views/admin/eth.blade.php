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
        <div class="col-lg-12 d-flex align-items-strech">
            <div class="p-2 px-lg-4 w-100">
                <div
                  class="d-sm-flex d-block align-items-center justify-content-between mb-7"
                >
                  <div class=" p-3 rounded text-white mb-sm-0  w-100" style="background: #ff8a37;">

                    <h6 class="text-white fw-semibold mb-0">Transactions History</h6>
                    <small>Transaction History shows information about cash deposits, cash withdrawals for your admin.</small>
                  </div>
                  <div>

                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table align-middle text-nowrap mb-0">
                    <thead>
                      <tr class="text-muted fw-semibold">
                          <th scope="col">Date</th>
                        <th scope="col">Amount</th>
                        <th scope="col">Status</th>
                      </tr>
                    </thead>
                    <tbody class="border-top">

                        <tr></tr>

                    </tbody>
                  </table>
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
