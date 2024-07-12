﻿@extends('../layouts/user/userlayout')

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
      <div class="container-fluid ">
        <!--  Owl carousel -->
        <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
          <div class="card-body px-4 py-3">
            <div class="row align-items-center">
              <div class="col-9">
                <h4 class="fw-semibold mb-8">Request Withdrawal</h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a class="text-muted text-decoration-none" href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Withdrawal </li>
                  </ol>
                </nav>
              </div>
              <div class="col-3">
                <div class="text-center mb-n5">
                  <img src="{{asset ('user-assets/images/breadcrumb/ChatBc.png')}}" alt="" class="img-fluid mb-n4">
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card bg-success-subtle">
          <div class="card-body p-4">
            <div class="d-flex align-items-center">
              <h6 class="mb-0">Available Balance</h6>
              <div class="ms-auto text-info d-flex align-items-center">
                <i class="ti ti-trending-down text-success fs-6 me-1"></i>
                <span class="fs-2 fw-bold text-success">+ 3.20%</span>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between mt-4">
              <h3 class="mb-0 fw-semibold fs-7">
                {{number_format(auth()->user()->balance, 2)}}
              </h3>
              <span class="fw-bold">USD</span>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="p-3">
            <h4 class="card-title">Choose your Withdrawal Method</h4>
            <p>Request for withdrawal here</p>
          </div>
          <div class="col-12 ">
            <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                  id="bitcoin-tab" data-bs-toggle="pill" data-bs-target="#bitcoin" type="button" role="tab"
                  aria-controls="bitcoin" aria-selected="true">
                  <i class="ti ti-coin-bitcoin me-2 fs-6"></i>
                  <span class="d-none d-md-block">Bitcoin</span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                  id="ethereum-tab" data-bs-toggle="pill" data-bs-target="#ethereum" type="button" role="tab"
                  aria-controls="ethereum" aria-selected="false">
                  <i class="ti ti-currency-ethereum me-2 fs-6"></i>

                  <span class="d-none d-md-block">Ethereum </span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                  id="bank-transfer-tab" data-bs-toggle="pill" data-bs-target="#bank-transfer" type="button" role="tab"
                  aria-controls="bank-transfer" aria-selected="false">
                  <i class="ti ti-wallet me-2 fs-6"></i>
                  <span class="d-none d-md-block">Bank Transfer</span>
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                  id="credit-card-tab" data-bs-toggle="pill" data-bs-target="#credit-card" type="button" role="tab"
                  aria-controls="credit-card" aria-selected="false">
                  <i class="ti ti-credit-card me-2 fs-6"></i>
                  <span class="d-none d-md-block">Credit card</span>
                </button>
              </li>
            </ul>

            <div class="card-body ">
              {{-- Bitcoin start --}}
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="bitcoin" role="tabpanel" aria-labelledby="bitcoin-tab"
                  tabindex="0">
                  <div class="row p-0">
                    <div class="col-12 p-0 d-flex align-items-stretch">
                      <div class=" w-100  p-0 position-relative overflow-hidden">
                        <div class=" m-0 p-2">
                          <h5 class="card-title fw-semibold">Bitcoin</h5>
                          <p class="card-subtitle mb-4">Request for withdrawal using bitcoin</p>

                          <form>
                            <div class="row">


                              <div class="col-12 mb-3">
                                <div>
                                  <label for="exampleInputtext4" class="form-label">Bitcoin Address</label>
                                  <input type="text" class="form-control" id="exampleInputtext4"
                                    placeholder="BTC Address">
                                </div>
                              </div>
                              <div class="col-12">
                                <div>
                                  <label for="exampleInputtext4" class="form-label">Amount To Withdraw (USD)</label>
                                  <input type="number" class="form-control" id="exampleInputtext4" placeholder="Amount">
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="mt-4 ">
                                  <button class="btn btn-primary col-lg-6 col-12">Withdraw</button>
                                </div>
                              </div>
                            </div>
                          </form>

                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                {{-- Bitcoin ends --}}
                {{-- Ethereum start --}}

                <div class="tab-pane fade" id="ethereum" role="tabpanel" aria-labelledby="ethereum-tab" tabindex="0">
                  <div class="row p-0">
                    <div class="col-12 p-0 d-flex align-items-stretch">
                      <div class=" w-100  p-0 position-relative overflow-hidden">
                        <div class=" m-0 p-2">
                          <h5 class="card-title fw-semibold">Ethereum</h5>
                          <p class="card-subtitle mb-4">Request for withdrawal using ethereum</p>
                          <form>
                            <div class="row">
                              <div class="col-12 mb-3">
                                <div>
                                  <label for="exampleInputtext4" class="form-label">Ethereum Address</label>
                                  <input type="text" class="form-control" id="exampleInputtext4"
                                    placeholder="ETH Address">
                                </div>
                              </div>
                              <div class="col-12">
                                <div>
                                  <label for="exampleInputtext4" class="form-label">Amount To Withdraw (USD) </label>
                                  <input type="number" class="form-control" id="exampleInputtext4" placeholder="Amount">
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="mt-4 ">
                                  <button class="btn btn-primary col-lg-6 col-12">Withdraw</button>
                                </div>
                              </div>
                            </div>
                          </form>

                        </div>
                      </div>
                    </div>

                  </div>
                </div>
                {{-- Ethereum Ends --}}
                {{-- Bank transfer start--}}
                <div class="tab-pane fade" id="bank-transfer" role="tabpanel" aria-labelledby="bank-transfer-tab"
                  tabindex="0">
                  <div class="row p-0">
                    <div class="col-12 p-0 d-flex align-items-stretch">
                      <div class=" w-100  p-0 position-relative overflow-hidden">
                        <div class=" m-0 p-2">
                          <h5 class="card-title fw-semibold">Bank Transfer</h5>
                          <p class="card-subtitle mb-4">Request for withdrawal using Bank Transfer</p>

                          <form>
                            <div class="row">


                              <div class="col-12 mb-3">
                                <div>
                                  <label for="exampleInputtext4" class="form-label">Bank Name</label>
                                  <input type="text" class="form-control" id="exampleInputtext4"
                                    placeholder="Enter Bank Name">
                                </div>
                              </div>
                              <div class="col-12 mb-3">
                                <div>
                                  <label for="exampleInputtext4" class="form-label">Account Name</label>
                                  <input type="text" class="form-control" id="exampleInputtext4"
                                    placeholder="Enter Account Name">
                                </div>
                              </div>
                              <div class="col-12 mb-3">
                                <div>
                                  <label for="exampleInputtext4" class="form-label">Account Number</label>
                                  <input type="number" class="form-control" id="exampleInputtext4"
                                    placeholder="Enter Account Number">
                                </div>
                              </div>
                              <div class="col-12 mb-3">
                                <div>
                                  <label for="exampleInputtext4" class="form-label">Swift Code</label>
                                  <input type="number" class="form-control" id="exampleInputtext4"
                                    placeholder="Enter Swift Code">
                                </div>
                              </div>
                              <div class="col-12 mb-3">
                                <div>
                                  <label for="exampleInputtext4" class="form-label">Amount To Withdraw</label>
                                  <input type="number" class="form-control" id="exampleInputtext4"
                                    placeholder="Amount ">
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="mt-4 ">
                                  <button class="btn btn-primary col-lg-6 col-12">Withdraw</button>
                                </div>
                              </div>
                            </div>
                          </form>

                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                {{-- Bank transfer ends --}}

                {{-- Credit card start --}}

                <div class="tab-pane fade" id="credit-card" role="tabpanel" aria-labelledby="credit-card-tab"
                  tabindex="0">
                  <div class="row p-0">
                    <div class="col-12 p-0 d-flex align-items-stretch">
                      <div class=" w-100  p-0 position-relative overflow-hidden">
                        <div class=" m-0 p-2">
                          <h5 class="card-title fw-semibold">Credit Card</h5>
                          <p class="card-subtitle mb-4">Request for withdrawal using Credit Card</p>

                          <form>
                            <div class="row">


                              <div class="col-12 mb-3">
                                <div>
                                  <label for="exampleInputtext4" class="form-label">*FullName (Surname
                                    First)</label>
                                  <input type="text" class="form-control" id="exampleInputtext4"
                                    placeholder="(on the card)">
                                </div>
                              </div>

                              <div class="col-12 mb-3">
                                <div>
                                  <label for="exampleInputtext4" class="form-label">Card Number</label>
                                  <div class="d-flex align-items-center">

                                    <input type="number" class="form-control" id="exampleInputtext4"
                                      placeholder="Enter Card Number">
                                    <i class="ti ti-brand-visa fs-6"></i>
                                    <i class="ti ti-brand-mastercard fs-6"></i>
                                    <i class="ti ti-cards fs-6"></i>

                                  </div>
                                </div>
                              </div>
                              <div class="row mb-3">
                                <div class="col-md-4 col-6">
                                  <label for="exampleInputtext4" class="form-label">Year</label>
                                  <input type="number" class="form-control" id="exampleInputtext4" placeholder="YY">
                                </div>
                                <div class="col-md-4 col-6">
                                  <label for="exampleInputtext4" class="form-label">Month</label>
                                  <input type="number" class="form-control" id="exampleInputtext4" placeholder="MM">
                                </div>
                                <div class="col-md-4 mt-md-0 mt-2">
                                  <label for="exampleInputtext4" class="form-label">CVV</label>
                                  <input type="number" class="form-control" id="exampleInputtext4" placeholder="CVV">
                                </div>
                              </div>
                              <div class="col-12 mb-3">
                                <div>
                                  <label for="exampleInputtext4" class="form-label">Amount To Withdraw</label>
                                  <input type="number" class="form-control" id="exampleInputtext4"
                                    placeholder="Amount ">
                                </div>
                              </div>
                              <div class="col-12">
                                <div class="mt-4 ">
                                  <button class="btn btn-primary col-lg-6 col-12">Withdraw</button>
                                </div>
                              </div>
                            </div>
                          </form>

                        </div>
                      </div>
                    </div>

                  </div>
                </div>

                {{-- Credit card ends --}}

              </div>
            </div>
          </div>
        </div>
        <div class="row text-truncate ">
          <div class="col-lg-12">
            <div class="card">
              <div class="card-body truncate">
                <div class="table-responsive">
                  <table class="table table-striped mb-0">
                    <thead>
                      <tr>
                        <th>Amount</th>
                        <th class="">Withdrawal Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>0.00</td>
                        <td>2022-02-02</td>
                        <td><span class="badge bg-success">Success</span></td>
                        <td>
                          <a href="javascript:void(0);" class="btn btn-sm btn-primary">View</a>
                        </td>
                      </tr>
                    </tbody>
                  </table>

                </div>


              </div>
            </div>
          </div>

          <x-user.canvas />

        </div>
        <x-user.search />




      </div>


      <script>
        function copyText(inputId) {
      var input = document.getElementById(inputId);

      if (input && input.value) {
        // Create a temporary input element
        var tempInput = document.createElement('input');
        tempInput.setAttribute('type', 'text');
        tempInput.setAttribute('value', input.value);
        document.body.appendChild(tempInput);

        // Select the text in the temporary input
        tempInput.select();
        tempInput.setSelectionRange(0, 99999); // For mobile devices

        // Copy the selected text
        document.execCommand('copy');

        // Clean up - remove the temporary input element
        document.body.removeChild(tempInput);

        // Visual feedback - change button text to 'Copied!' temporarily
        var copyButton = input.nextElementSibling.querySelector('.btn-primary');
        copyButton.innerText = 'Copied!';
        setTimeout(function() {
          copyButton.innerText = 'Copy';
        }, 1500); // Reset button text after 1.5 seconds
      }
    }
      </script>

      @endsection