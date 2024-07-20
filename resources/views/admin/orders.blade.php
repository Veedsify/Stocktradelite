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
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
          <div class="card-body px-4 py-3">
            <div class="row align-items-center">
              <div class="col-9">
                <h4 class="fw-semibold mb-8">Upgrade Requests
                  For {{$user->name}}
                </h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a class="text-muted text-decoration-none" href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                      Upgrade Requests
                    </li>
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
                    <h5 class="mb-0">Upgrade Datatable</h5>
                  </div>
                  <div class="table-responsive">
                    <table id="zero_config" class="table border table-striped table-bordered text-nowrap align-middle">
                      <thead>
                        <!-- start row -->
                        <tr>
                          <th>Name</th>
                          <th>Amount</th>
                          <th>Status</th>
                          <th>Payment Method</th>
                          <th>Payment Proof</th>
                          <th>Type</th>
                          <th>Action</th>
                          <th>Date</th>
                        </tr>
                        <!-- end row -->
                      </thead>
                      <tbody>
                        <!-- start row -->
                        @foreach($orders as $deposit)
                        <tr>
                          <td>
                            {{$deposit->user->name}}
                          </td>
                          <td>$
                            {{number_format($deposit->amount)}}
                          </td>
                          <td>
                            <div
                              class="text-capitalize badge p-2 {{$deposit->status == 'pending' ? 'badge-warning text-warning' : ($deposit->status == 'approved' ? 'badge-success text-success' : 'badge-danger text-danger')}}">
                              {{$deposit->status}}
                            </div>
                          </td>
                          <td>
                            {{$deposit->payment_method}}
                          </td>
                          <td>
                            <a href="{{asset($deposit->payment_proof)}}" style="text-decoration: underline;"
                              download>Download
                              Receipt</a>
                            <br>
                          </td>
                          <td>
                            {{$deposit->is_upgrade ? 'Upgrade' : 'Deposit'}}
                          </td>
                          <td>
                            <form class="d-flex gap-1" action="{{route('admin.deposit.update', [
                                'id' => $deposit->id,
                                'tier'=> $deposit->is_upgrade ? 'upgrade' : 'deposit',
                              ])}}" method="post">
                              @csrf
                              <select name="deposit_status" id="verification_status"
                                class="px-1 py-1 border-1 border-muted btn-outline-info rounded-2">
                                <option value="pending" {{$deposit->status == 'pending' ? 'selected' : ''}}
                                  >Pending
                                </option>
                                <option value="approved" {{$deposit->status == 'approved' ? 'selected' : ''}}
                                  >Approved
                                </option>
                                <option value="declined" {{$deposit->status == 'rejected' ? 'selected' : ''}}
                                  >
                                  Decline
                                </option>
                              </select>
                              <button type="submit" class="btn btn-primary btn-sm">Update</button>
                            </form>
                          </td>
                          <td>
                            {{$deposit->created_at->format('d M Y h:i A')}}
                          </td>
                        </tr>
                        @endforeach
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