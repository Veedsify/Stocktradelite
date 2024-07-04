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
                      <h4 class="fw-semibold mb-8">Fund Account</h4>
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item">
                            <a class="text-muted text-decoration-none" href="index.html">Home</a>
                          </li>
                          <li class="breadcrumb-item" aria-current="page">deposit</li>
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

          <p class="px-2">Make your first deposit with any of the following methods immediately your deposit has been confirmed.</p>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title" style="font: 700 !important">BITCOIN</h4>
                            <img src="{{asset ('/user-assets/images/png/bitcoin.jpg')}}" alt="" class="w-100">
                             <div id="bitcoin-model" class="modal fade" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-md">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="text-center mt-2 mb-4">

                                                <h4>BITCOIN DEPOSIT</h4>
                                                </div>
                                                <p>Please send the specified bitcoin amount to the Bitcoin address below</p>
                                                <p>Please note that there is a minimum deposit amount of 500 USD. Forward the amount paid via the input box provided</p>

                                                <small>Send BITCOIN To</small>
                                                <div class="input-group mb-3">
                                                    <input type="text" id="inputText1" class="form-control" value=" 27wml"
                                                    style="border-bottom-right-radius: 0px !important; border-top-right-radius: 0px !important;"
                                                    disabled>
                                                    <div class="input-group-append">
                                                      <button class="btn btn-primary " type="button"
                                                      style="border-bottom-left-radius: 0px !important; border-top-left-radius: 0px !important;"
                                                      onclick="copyText('inputText1')">Copy</button>

                                                    </div>
                                                  </div>

                                                  <p class="text-center">

                                                      <a href="#" class="btn  btn-primary d-inline-block mx-auto">Pay Using BTC Wallet App</a>
                                                    </p>

                                                      <form class="ps-3 pr-3" action="#">

                                                    <div class="mb-3">
                                                        <label for="amount">Amount Paid ($)</label>
                                                        <input class="form-control" type="number" id="amount" required="" placeholder="0.00">
                                                    </div>


                                                        <div class="mb-3 text-center">
                                                            <button class="btn btn-primary w-100" type="submit">
                                                                Confirm Deposit
                                                            </button>
                                                         </div>
                                                        </form>
                                                    </div>
                                                </div>
                          <!-- /.modal-content -->
                        </div>
                        <!-- /.modal-dialog -->
                      </div>
                      <!-- /.modal -->
                      <!-- Custom width modal -->
                      <button type="button" class="btn mb-1 mt-3 bg-primary-subtle w-100 text-primary px-4 fs-4  text-black" data-bs-toggle="modal" data-bs-target="#bitcoin-model">
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
                                    <img src="{{asset ('/user-assets/images/png/ethereum.png')}}" alt="" class="w-100">



                                        <!-- ethereum-model content -->
                            <div id="ethereum-model" class="modal fade" tabindex="-1" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-scrollable modal-md">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <div class="text-center mt-2 mb-4">
                                                <h4>Ethereum DEPOSIT</h4>
                                                </div>
                                                <p>PPlease send the specified ethereum amount to the Ethereum address below</p>
                                                <p>Please note that there is a minimum deposit amount of 500 USD. Forward the amount paid via the input box provided</p>

                                                <small>Send ETHEREUM To</small>
                                                <div class="input-group mb-3">
                                                    <input type="text" id="inputText2" class="form-control" value="bc1qy0cyjuhk3hxjj4lt4fgkhp2vaega0dnpw27wml"
                                                    style="border-bottom-right-radius: 0px !important; border-top-right-radius: 0px !important;"
                                                    disabled>
                                                    <div class="input-group-append">
                                                      <button class="btn btn-primary " type="button"
                                                      style="border-bottom-left-radius: 0px !important; border-top-left-radius: 0px !important;"
                                                      onclick="copyText('inputText2')">Copy</button>

                                                    </div>
                                                  </div>

                                                  <p class="text-center">

                                                      <a href="#" class="btn  btn-primary d-inline-block mx-auto">Pay Using BTC Wallet App</a>
                                                    </p>

                                                      <form class="ps-3 pr-3" action="#">

                                                    <div class="mb-3">
                                                        <label for="amount">Amount Paid ($)</label>
                                                        <input class="form-control" type="number" id="amount" required="" placeholder="0.00">
                                                    </div>


                                                        <div class="mb-3 text-center">
                                                            <button class="btn btn-primary w-100" type="submit">
                                                                Confirm Deposit
                                                            </button>
                                                         </div>
                                                        </form>
                                                    </div>
                                                </div>
                                </div>
                                <!-- /.modal-dialog -->
                              </div>
                              <!-- /.modal -->
                              <!-- Custom width modal -->
                              <button type="button" class="btn mb-1 mt-3 bg-primary-subtle w-100 text-primary px-4 fs-4  text-black " data-bs-toggle="modal" data-bs-target="#ethereum-model">
                                <i class="ti ti-chevrons-right fs-5 "></i>
                                Choose this one
                              </button>
                                </div>
                                </div>
                                </div>
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
