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
              <div class="col-3">
                <div class="text-center mb-n5">
                  <img src="{{asset('user-assets/images/breadcrumb/ChatBc.png')}}" alt="" class="img-fluid mb-n4">
                </div>
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

                  <div class="table-responsive">
                    <table id="zero_config" class="table border table-striped table-bordered text-nowrap align-middle">
                      <thead>
                        <!-- start row -->
                        <tr>
                          <th>Name</th>
                          <th>Tier</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Balance</th>
                          <th>Order</th>
                          <th>Edit Balance</th>
                        </tr>
                        <!-- end row -->
                      </thead>
                      <tbody>
                        <!-- start row -->
                        <tr>
                          <td>
                            Crytp Emmanuel
                          </td>
                          <td>
                            <form class="d-flex gap-1">
                              <input type="hidden" name="_token" autocomplete="off"> <input type="hidden" name="_method"
                                value="PUT"> <select name="role" id="role"
                                class="px-1 py-1 border-1 border-muted btn-outline-info rounded-2">
                                <option value="BEGINNER" selected="">BEGINNER
                                </option>
                                <option value="STANDARD">STANDARD
                                </option>
                                <option value="GOLD">
                                  GOLD
                                </option>
                                <option value="GOLD-PLUS">
                                  GOLD PLUS
                                </option>
                                <option value="DIAMOND">
                                  DIAMOND
                                </option>
                                <option value="DIAMOND-PLUS">
                                  DIAMOND PLUS
                                </option>
                              </select>
                              <button type="submit" class="btn btn-primary btn-sm">Update</button>
                            </form>
                          </td>
                          <td>Emmanuel@gmail.com</td>
                          <td>0983738449</td>
                          <td>$80,0000</td>
                          <td><a href="#" style="text-decoration: underline;">edit</a></td>
                          <td><a href="{{ route('admin.balance.editbalance'," [id]") }}"
                              style="text-decoration: underline;">Edit Balance</a></td>
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