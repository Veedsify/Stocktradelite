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
          <div class="container-fluid ">
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                  <div class="row align-items-center">
                    <div class="col-9">
                      <h4 class="fw-semibold mb-8">Change Password</h4>
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item">
                            <a class="text-muted text-decoration-none" href="index.html">Home</a>
                          </li>
                          <li class="breadcrumb-item" aria-current="page">Change Password</li>
                        </ol>
                      </nav>
                    </div>

                  </div>
                </div>
              </div>


                  <div class="row">

                        <div class="col-12 p-0">
                          <div class="col-12 p-0 card shadow-none border">
                            <div class=" w-100 card-body">
                              <div class=" m-0 ">
                                <h5 class="card-title fw-semibold">Update Password</h5>

                                      <form>
                                        <div class="row">


                                          <div class="col-12 mb-3 mt-3">
                                            <div>
                                              <label for="exampleInputtext4" class="form-label">Current Password</label>
                                              <input type="text" class="form-control" id="exampleInputtext4" placeholder="Enter Current Password">
                                            </div>
                                          </div>
                                          <div class="col-12 mb-3">
                                              <div>
                                                  <label for="exampleInputtext4" class="form-label">New Password</label>
                                                  <input type="number" class="form-control" id="exampleInputtext4" placeholder="Enter New Password">
                                                </div>
                                            </div>
                                          <div class="col-12 mb-3">
                                              <div>
                                                  <label for="exampleInputtext4" class="form-label">Confirm Password</label>
                                                  <input type="number" class="form-control" id="exampleInputtext4" placeholder="Re-enter New Password">
                                                </div>
                                            </div>

                                          <div class="col-12">
                                            <div class="mt-2 ">
                                              <button class="btn btn-primary col-lg-6 col-12">Update </button>
                                            </div>
                                          </div>
                                        </div>
                                      </form>

                              </div>
                            </div>
                          </div>

                        </div>
                  </div>







        <x-user.canvas />

    </div>
    <x-user.search />




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
