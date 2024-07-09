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

                    <h6 class="text-white fw-semibold mb-0">Recent Deposit</h6>
                    <small>Transaction History shows information about cash deposits for your admin.</small>
                  </div>
                  <div>

                  </div>
                </div>
                    <form action="">

                        <div class="mb-4">

                        <Label class="form-label">Edit Bitcoin Address</Label>
                            <input type="text" class="form-control" placeholder="Edit Address">
                        </div>
                        <buttonv class="btn btn-primary">Save</button>
                    </form>
                </div>
              </div>




      </div>
    </div>

    <x-admin.canvas />

  </div>
  <x-admin.search />




</div>

@endsection
