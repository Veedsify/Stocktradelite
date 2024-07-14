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
                <h4 class="fw-semibold mb-8">Kyc Center</h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a class="text-muted text-decoration-none" href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Kyc Center</li>
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
                    <h5 class="mb-0">New Users Datatable</h5>
                  </div>

                  <div class="table-responsive">
                    <table id="zero_config" class="table border table-striped table-bordered text-nowrap align-middle">
                      <thead>
                        <!-- start row -->
                        <tr>
                          <th>Name</th>
                          <th>Status</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Verification Type</th>
                          <th>
                            Files
                          </th>
                        </tr>
                        <!-- end row -->
                      </thead>
                      <tbody>
                        <!-- start row -->
                        @foreach($verifications as $verification)
                        <tr>
                          <td>
                            {{$verification->user->name}}
                          </td>
                          <td>
                            <form class="d-flex gap-1" data-verificarion="{{$verification->id}}">
                              <select name="role" id="role"
                                class="px-1 py-1 border-1 border-muted btn-outline-info rounded-2">
                                <option value="approve" {{$verification->status === 'approved' ? 'selected=true' : ''}}
                                  >APPROVE
                                </option>
                                <option value="pending" {{$verification->status === 'pending' ? 'selected=true' : ''}}
                                  >PENDING
                                </option>
                                <option value="rejected" {{$verification->status === 'rejected' ? 'selected=true' : ''}}
                                  >
                                  REJECTED
                                </option>
                              </select>
                              <button type="submit" class="btn btn-primary btn-sm">Update</button>
                            </form>
                          </td>
                          <td>
                            {{$verification->user->email}}s
                          </td>
                          <td>
                            {{$verification->user->phone}}
                          </td>
                          <td>
                            {{$verification->verification_type}}
                          </td>
                          <td>
                            <a href="{{asset($verification->file_path)}}" style="text-decoration: underline;"
                              download>Download
                              Front</a>
                            <br>
                            <a href="{{asset($verification->file_path2)}}" style="text-decoration: underline;"
                              download>Download
                              Back</a>
                          </td>
                        </tr>
                        @endforeach
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