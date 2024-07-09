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
          <div class="container-fluid ">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                  <div class="row align-items-center">
                    <div class="col-9">
                      <h4 class="fw-semibold mb-8">User Profile</h4>
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item">
                            <a class="text-muted text-decoration-none" href="index.html">Home</a>
                          </li>
                          <li class="breadcrumb-item" aria-current="page">User Profile</li>
                        </ol>
                      </nav>
                    </div>

                  </div>
                </div>
              </div>
              <div class="card overflow-hidden">
                <div class="card-body p-0">
                  <img src="{{asset('user-assets/images/backgrounds/profilebg.jpg')}}" alt="" class="img-fluid">
                  <div class="row align-items-center">

                    <div class="col-lg-4 mt-n3 order-lg-2 order-1">
                      <div class="mt-n5">
                        <div class="d-flex align-items-center justify-content-center mb-2">
                          <div class="d-flex align-items-center justify-content-center round-110">
                            <div
                              class="border border-4 border-white d-flex align-items-center justify-content-center rounded-circle overflow-hidden round-100">
                              <img src="{{asset('user-assets/images/profile/user-1.jpg')}}" alt="" class="w-100 h-100">
                            </div>
                          </div>
                        </div>
                        <div class="text-center">
                          <h5 class="fs-5 mb-0 fw-semibold">Mathew Anderson</h5>
                          <p class="mb-0 fs-4">Designer</p>
                        </div>
                      </div>
                    </div>

                  </div>

                </div>
              </div>

                  <div class="row">
                    <div class="col-lg-4">
                      <div class="card shadow-none border">
                        <div class="card-body">
                          <h4 class="fw-semibold mb-3">Profile</h4>

                          <ul class="list-unstyled mb-0">
                            <li class="d-flex align-items-center gap-6 flex-wrap mb-4">
                              <i class="ti ti-user text-dark fs-6"></i>
                              <h6 class="fs-4 fw-semibold mb-0">Mathew Anderson</h6>
                            </li>
                            <li class="d-flex align-items-center gap-6 flex-wrap mb-4">
                              <i class="ti ti-mail text-dark fs-6"></i>
                              <h6 class="fs-4 fw-semibold mb-0">xyzmathewanderson@gmail.com</h6>
                            </li>
                            <li class="d-flex align-items-center gap-6 flex-wrap mb-4">
                              <i class="ti ti-phone text-dark fs-6"></i>
                              <h6 class="fs-4 fw-semibold mb-0">+234 901 996 2712</h6>
                            </li>
                            <li class="d-flex align-items-center gap-6 flex-wrap mb-2">
                              <i class="ti ti-map-pin text-dark fs-6"></i>
                              <h6 class="fs-4 fw-semibold mb-0">Nogeria</h6>
                            </li>
                          </ul>
                        </div>
                      </div>

                    </div>
                        <div class="col-lg-8 p-0">
                          <div class="col-12 p-0 card shadow-none border">
                            <div class=" w-100 card-body">
                              <div class=" m-0 ">
                                <h5 class="card-title fw-semibold">Edit Your Profile</h5>

                                      <form>
                                        <div class="row">


                                          <div class="col-12 mb-3 mt-3">
                                            <div>
                                              <label for="exampleInputtext4" class="form-label">Full Name</label>
                                              <input type="text" class="form-control" id="exampleInputtext4" placeholder="FullName...">
                                            </div>
                                          </div>
                                          <div class="col-12 mb-3">
                                              <div>
                                                  <label for="exampleInputtext4" class="form-label">Phone Number</label>
                                                  <input type="number" class="form-control" id="exampleInputtext4" placeholder="Phone Number">
                                                </div>
                                            </div>
                                          <div class="col-12 mb-3">
                                              <div>
                                                  <label for="exampleInputtext4" class="form-label">Country</label>
                                                  <input type="number" class="form-control" id="exampleInputtext4" placeholder="Nigeria">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3">
                                              <div>
                                                <label for="exampleInputtext4" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="exampleInputtext4" disabled value="
xyzmathewanderson@gmail.com">
                                              </div>
                                            </div>
                                          <div class="col-12">
                                            <div class="mt-2 ">
                                              <button class="btn btn-primary col-lg-6 col-12">Save</button>
                                            </div>
                                          </div>
                                        </div>
                                      </form>

                              </div>
                            </div>
                          </div>

                        </div>
                  </div>







        <x-admin.canvas />

    </div>
    <x-admin.search />




    </div>
      </div>
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
