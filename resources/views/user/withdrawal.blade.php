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
          <div class="container-fluid">
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
                        <img src="../assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <div class="card bg-success-subtle shadow-none">
                <div class="card-body p-4">
                  <div class="d-flex align-items-center">

                    <h6 class="mb-0">Available Balance</h6>
                    <div class="ms-auto text-info d-flex align-items-center">
                      <i class="ti ti-trending-down text-success fs-6 me-1"></i>
                      <span class="fs-2 fw-bold text-success">+ 3.20%</span>
                    </div>
                  </div>
                  <div class="d-flex align-items-center justify-content-between mt-4">
                    <h3 class="mb-0 fw-semibold fs-7">0.00</h3>
                    <span class="fw-bold">USD</span>
                  </div>
                </div>
              </div>



              <div class="row text-truncate ">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-12">


                                    <h4 class="card-title">Withdrawal Earnings</h4>
                                    <p>Request for withdrawal here</p>
                                </div>
                                <div class="col-12">
                                    <form action="">
                                        <div>
                                            <label for="">Withdrawal Method</label>
                                            <input type="text">
                                        </div>
                                    </form>
                                </div>
                            </div>


                        </div>
                        <div class="card-body truncate">
                            <div class="table-responsive">
                                <table class="table table-striped mb-0">
                                    <thead>
                                        <tr >
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
