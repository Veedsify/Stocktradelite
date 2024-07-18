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
          <div class="col-sm-12">
            <div class="card bg-primary-subtle shadow-none">
              <div class="card-body p-4">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0">Total Balance <span>$</span></h6>
                </div>
                <form action="{{ route('admin.balance.edit', $user->id) }}" method="post" class="row">
                  @csrf
                  <div class="d-flex align-items-center justify-content-between fs-7 col-sm-12 col-md-9 mb-3 m-mb-0">
                    <input type="number" name="total_balance" value="{{ $user->balance ? $user->balance : 0 }}" id=""
                      class="form-control fs-7 bg-white">
                  </div>
                  <div class="col-sm-12 col-md-3">
                    <button class="col-6 fs-6 w-100 btn btn-primary">Save</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card bg-primary-subtle shadow-none">
              <div class="card-body p-4">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0">Total Trade <span>$</span></h6>
                </div>
                <form class="row" action="{{ route('admin.trades.edit', $user->id) }}" method="post">
                  @csrf
                  <div class="d-flex align-items-center justify-content-between fs-7 col-sm-12 col-md-8 mb-3 m-mb-0">
                    <input type="number" name="user_trades" id="" class="form-control fs-7 bg-white"
                      value="{{ $user->trades->first()->total_count ?? 0 }}">
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <button class="col-6 fs-6 w-100 btn btn-primary">Save</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card bg-primary-subtle shadow-none">
              <div class="card-body p-4">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0">Today Changes <span>$</span></h6>
                </div>
                <form class="row" action="{{ route('admin.profits.edit', $user->id) }}" method="post">
                  @csrf
                  <div class="d-flex align-items-center justify-content-between fs-7 col-sm-12 col-md-8 mb-3 m-mb-0">
                    <input type="number" name="total_changes_today" id="" class="form-control fs-7 bg-white" required
                      value="{{ 0 }}">
                  </div>
                  <div class="col-sm-12 col-md-4">
                    <button class="col-6 fs-6 w-100 btn btn-primary">Save</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-5 mb-5">
          <h2>
            User Account Changes
          </h2>
        </div>

        <div class="table-responsive">
          <table id="zero_config" class="table border table-striped table-bordered text-nowrap align-middle">
            <thead>
              <!-- start row -->
              <tr>
                <th>Name</th>
                <th>Profits</th>
                <th>
                  Date
                </th>
              </tr>
              <!-- end row -->
            </thead>
            <tbody>
              @foreach ($user->profits as $profit)
              <tr>
                <td>{{ $profit->user->name }}</td>
                <td>$ {{ $profit->total_profit }}</td>
                <td>{{ $profit->created_at->format('d M Y h:i A') }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>

      <x-admin.canvas />

    </div>
    <x-admin.search />




  </div>

  @endsection