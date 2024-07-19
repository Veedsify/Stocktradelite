@extends('../layouts/user/userlayout')
@section('content')



<div id="main-wrapper">
  <!-- Sidebar Start -->
  <x-user.aside />
  <!--  Sidebar End -->

  <div class="page-wrapper">
    <!--  Header Start -->
    <x-user.header />
    <!--  Header End -->
    <div class="body-wrapper">
      <div class="container-fluid">
        <!--  Owl carousel -->
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
          <div class="card-body px-4 py-3">
            <div class="row align-items-center">
              <div class="col-9">
                <h4 class="fw-semibold mb-8">
                  Upgrade Account to {{
                  $tier->name
                  }}
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
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title" style="font: 700 !important">BITCOIN</h4>
                <img src="{{asset ('user-assets/images/png/bitcoin.jpg')}}" alt="" class="w-100">
                <!-- Custom width modal -->
                <button onclick="openModal({node:'deposit_eth', address:'{{$wallet->btc_address}}'})" type="button"
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
                <img src="{{asset ('user-assets/images/png/ethereum.png')}}" alt="" class="w-100">
                <button onclick="openModal({node:'deposit_eth', address:'{{$wallet->eth_address}}'})" type="button"
                  class="btn mb-1 mt-3 bg-primary-subtle w-100 text-primary px-4 fs-4  text-black ">
                  <i class="ti ti-chevrons-right fs-5 "></i>
                  Choose this one
                </button>
              </div>
            </div>
          </div>
        </div>
        <x-user.search />
      </div>



      {{-- DEPOSIT --}}
      <template id="deposit_eth">
        <x-user.deposit-eth-modals :wallet="$wallet" />
      </template>
      <template id="deposit_btc">
        <x-user.deposit-btc-modals :wallet="$wallet" />
      </template>
      {{--

      {{-- WITHDRAW --}}
      {{--
      <x-user.confirm-deposit /> --}}
      @endsection