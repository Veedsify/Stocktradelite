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
                <h4 class="fw-semibold mb-8">Users</h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a class="text-muted text-decoration-none" href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">users</li>
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
                    <h5 class="mb-0">User Datatable</h5>
                  </div>
                  <div class="table-responsivPe">
                    <table id="zero_config" class="table border table-striped table-bordered text-nowrap align-middle">
                      <thead>
                        <!-- start row -->
                        <tr>
                          <th>Name</th>
                          <th>Tier</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Orders Request</th>
                          <th>Balance</th>
                          <th>Edit Settings</th>
                          <th>Edit Trades</th>
                        </tr>
                        <!-- end row -->
                      </thead>
                      <tbody>
                        <!-- start row -->
                        @foreach ($users as $user)
                        <tr>
                          <td>{{$user->name}}</td>
                          <td>{{
                            \App\Models\Tier::where('id', $user->tier)->first()->name
                            }}</td>
                          <td>{{$user->email}}</td>
                          <td>{{$user->phone}}</td>
                          <td>
                            <a href="{{route('admin.orders', [$user->id])}}"
                              class=" text-decoration-underline text-neutral-950 ">View Order</a>
                          </td>
                          <td>${{number_format($user->balance)}}</td>
                          <td>
                            <a href="{{route('admin.balance.editbalance', $user->id)}}"
                              class="btn-sm btn btn-secondary">Settings</a>
                          </td>
                          <td>
                            <a href="{{route('admin.balance.editbalance', $user->id)}}"
                              class="btn-sm btn btn-primary">Edit</a>
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