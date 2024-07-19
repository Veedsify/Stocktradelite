@extends('../layouts/user/userlayout')
@section('content')
<div id="main-wrapper">
  <!-- Sidebar Start -->
  <x-user.aside />
  <!--  Sidebar End -->
  <div class="page-wrapper">
    <!--  Header Start -->
    <x-user.header />
    <div class="body-wrapper">
      <div class="container-fluid">
        <!--  Owl carousel -->
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
          <div class="card-body px-4 py-3">
            <div class="row align-items-center">
              <div class="col-9">
                <h4 class="fw-semibold mb-8">
                  Deposit To Account
                </h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a class="text-muted text-decoration-none" href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Upgrade</li>
                  </ol>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <div>
          @if($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title" style="font: 700 !important">BITCOIN</h4>
                <img src="{{asset ('user-assets/images/png/bitcoin.jpg')}}" alt="" class="w-50 d-block mx-auto">
                <!-- Custom width modal -->
                <button onclick="openModal({node:'deposit_btc'})" type="button"
                  class="btn mb-1 mt-3 bg-primary-subtle w-100 text-primary px-4 fs-4  text-black ">
                  <i class="ti ti-chevrons-right fs-5 "></i>
                  Choose this one
                </button>
              </div>
            </div>
          </div>
          {{-- Etherem --}}

          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title" style="font: 700 !important">Ethereum</h4>
                <img src="{{asset ('user-assets/images/png/ethereum.png')}}" alt="" class="w-50 d-block mx-auto">
                <button onclick=" openModal({node:'deposit_eth'})" type="button"
                  class="btn mb-1 mt-3 bg-primary-subtle w-100 text-primary px-4 fs-4  text-black ">
                  <i class="ti ti-chevrons-right fs-5 "></i>
                  Choose this one
                </button>
              </div>
            </div>
          </div>
        </div>

        <div class="row text-truncate ">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body truncate">
                <div class="table-responsive">
                  <table id="zero_config" class="table border table-striped table-bordered text-nowrap align-middle">
                    <thead>
                      <!-- start row -->
                      <tr>
                        <th>Amount</th>
                        <th>Status</th>
                        <th>Payment Method</th>
                        <th>Date</th>
                      </tr>
                      <!-- end row -->
                    </thead>
                    <tbody>
                      <!-- start row -->
                      @foreach ($deposits as $deposit)
                      <tr>
                        <td>$
                          {{ number_format($deposit->amount) }}
                        </td>
                        <td>
                          <div
                            class="text-capitalize badge p-2 {{ $deposit->status == 'pending' ? 'badge-warning text-warning' : ($deposit->status == 'approved' ? 'badge-success text-success' : 'badge-danger text-danger') }}">
                            {{ $deposit->status }}
                          </div>
                        </td>
                        <td>BTC</td>
                        <td>
                          {{ $deposit->created_at->format('d M Y h:i A') }}
                        </td>
                      </tr>
                      @endforeach
                  </table>
                </div>
              </div>
            </div>
          </div>

          <x-user.canvas />

        </div>

        <script>
          const tierData = {
                          min: '1',
                          max: '1000000',
                          btc: '{{$wallet->btc_address}}',
                          eth: '{{$wallet->eth_address}}',
                      }
        </script>
        <x-user.search />

        {{-- DEPOSIT --}}
        @php
        $deposit = ['action'=>'deposit'];
        @endphp
        <x-user.deposit-eth-modals :wallet="$wallet" :action="$deposit" />
        <x-user.deposit-btc-modals :wallet="$wallet" :action="$deposit" />
        {{--

        {{-- WITHDRAW --}}

        <x-user.confirm-deposit />

      </div>
      @endsection