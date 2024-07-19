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
                <button type="button" class="btn mb-1 mt-3 bg-primary-subtle w-100 text-primary px-4 fs-4  text-black">
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
                <button type="button" class="btn mb-1 mt-3 bg-primary-subtle w-100 text-primary px-4 fs-4  text-black ">
                  <i class="ti ti-chevrons-right fs-5 "></i>
                  Choose this one
                </button>
              </div>
            </div>
          </div>
        </div>
        <x-user.search />
      </div>

      {{-- MODALS --}}
      <div class="deposit-modal">
        <div class="bg-white p-5 rounded-2">
          <div class="mb-4 modal-header">
            <h3 class="fw-bold">
              Confirm Deposit
            </h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p class="card-subtitle mb-4">
              After depositing, click the button below to confirm your deposit
            </p>
            <form>
              <div class="mb-3">
                <input type="file" class="form-control border border-success" placeholder="Address">
                <label>
                  <img src="" id="" alt="" class="img-fluid">
                </label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control border border-success" placeholder="Email">
                <label><i class="ti ti-currency-dollar me-2 fs-4 text-success"></i><span
                    class="border-start border-success ps-3">
                    Transaction Ref</span></label>
                <small>
                  Paste the transaction reference here
                </small>
              </div>
              <div class="d-md-flex align-items-center">
                <div class="mt-3 mt-md-0 ms-auto">
                  <button type="submit" class="btn btn-success  rounded-pill px-4">
                    <div class="d-flex align-items-center">
                      <i class="ti ti-send me-2 fs-4"></i>
                      Submit Confirmation
                    </div>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

      {{-- DEPOSIT --}}
      {{-- <div class="deposit-modal">
        <div class="bg-white p-5 rounded-2">
          <div class="mb-4 modal-header">
            <h3 class="fw-bold">
              Deposit Bitcoin
            </h3>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <h5>
              Deposit to the address below
            </h5>
            <p class="card-subtitle mb-4">
              After depositing, click the button below to confirm your deposit
            </p>
            <form>
              <div class="form-floating mb-3">
                <input type="text" class="form-control border border-success" placeholder="Address">
                <label><i class="ti ti-book me-2 fs-4 text-success"></i><span
                    class="border-start border-success ps-3">Address</span></label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control border border-success" placeholder="Email">
                <label><i class="ti ti-currency-dollar me-2 fs-4 text-success"></i><span
                    class="border-start border-success ps-3">
                    Amount</span></label>
              </div>
              <div class="d-md-flex align-items-center">
                <div class="mt-3 mt-md-0 ms-auto">
                  <button type="submit" class="btn btn-success  rounded-pill px-4">
                    <div class="d-flex align-items-center">
                      <i class="ti ti-send me-2 fs-4"></i>
                      Confirm Deposit
                    </div>
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div> --}}
      @endsection