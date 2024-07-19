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
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
          <div class="card-body px-4 py-3">
            <div class="row align-items-center">
              <div class="col-9">
                <h4 class="fw-semibold mb-8">Order</h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a class="text-muted text-decoration-none" href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Orders</li>
                  </ol>
                </nav>
              </div>

            </div>
          </div>
        </div>
        <div class="datatables">
          <!-- basic table -->
          <div class="row">
            <div class="col-12">
              <!-- start User Datatable -->
              <div class="card">
                <div class="card-body">
                  <div class="mb-2">
                    <h5 class="mb-0">Order Datatable</h5>
                  </div>
                  <div class="table-responsive">
                    <table id="zero_config" class="table border table-striped table-bordered text-nowrap align-middle">
                      <thead>
                        <!-- start row -->
                        <tr>
                          <th>Amount</th>
                          <th>Status</th>
                          <th>Payment Method</th>
                          <th>Payment Proof</th>
                          <th>Type</th>
                          <th>Action</th>
                        </tr>
                        <!-- end row -->
                      </thead>
                      <tbody>
                        <!-- start row -->
                        <tr>
                          <td>$1000</td>
                          <td>Pending</td>
                          <td>BTC</td>
                          <td>
                            <a href="{{asset('user-assets/images/breadcrumb/ChatBc.png')}}" style="text-decoration: underline;"
                              download>Download
                              Receipt</a>
                            <br>

                          </td>
                          <td>Buy</td>
                          <td>
                            <form class="d-flex gap-1 kyc-verification-form"
                                >
                                <input type="hidden" name="rejection_reason" id="rejection_reason">
                                <select name="verification_status" id="verification_status"
                                  class="px-1 py-1 border-1 border-muted btn-outline-info rounded-2">
                                  <option value="approved"
                                    >Pending
                                  </option>
                                  <option value="pending"
                                    >Successful
                                  </option>
                                  <option value="rejected"
                                    >
                                    Decline
                                  </option>
                                </select>
                                <button type="submit" class="btn btn-primary btn-sm">Update</button>
                              </form>
                          </td>

                        </tr>
                        <!-- end row -->


                    </table>
                  </div>
                </div>
              </div>
              <!-- end Alternative Pagination -->
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
