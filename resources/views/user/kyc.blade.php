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
                <h4 class="fw-semibold mb-8">KYC</h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a class="text-muted text-decoration-none" href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">KYC</li>
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
                <h5 class=" card-title fw-semibold mb-5">KYC verification</h5>
                @if(empty($verification))
                <form action="{{route('kyc.submit')}}" method="POST" class=m-0" enctype="multipart/form-data"
                  id="kyc-form">
                  @csrf
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <label class="form-label">
                            Select Identification Type <span class="text-danger">*</span>
                          </label>
                          <select required name="id_type" class="form-select form-select-lg px-3 py-3 mr-sm-2">
                            <option disabled label="Select an Option" selected></option>
                            <option value="National ID">National ID</option>
                            <option value="Social Security Number">Social Security Number (SSN)</option>
                            <option value="Drivers Lisence">Drivers Licence</option>
                            <option value="Employer Identification Number">Employer Identification Number (EIN)</option>
                          </select>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title mb-2">Front</h4>
                          <div class="form-group">
                            <div class="mb-3">
                              <label for="front-id" class="d-block border cursor-pointer">
                                <input type="file" class="d-none" id="front-id" name="front_id" class="form-control"
                                  placeholder="Upload ID">
                                <img src="{{asset('assets\images\custom\id_placeholder.jpg')}}" alt="upload"
                                  class="d-block ratio ratio-16x9 object-fit-cover">
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title mb-2">Back</h4>
                          <div class="form-group">
                            <div class="mb-3">
                              <label for="back-id" class="d-block border cursor-pointer">
                                <input type="file" class="d-none" name="back_id" id="back-id" class="form-control"
                                  placeholder="Upload ID">
                                <img src="{{asset('assets\images\custom\id_placeholder.jpg')}}" alt="upload"
                                  class="d-block ratio ratio-16x9 object-fit-cover">
                              </label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <input type="submit" class="p-3 py-3 mr-sm-2 btn btn-lg btn-primary w-100" value="Submit">
                        </div>
                      </div>
                    </div>
                  </div>
                </form>
                @elseif( $verification->status == "pending")
                <div class="alert alert-warning" role="alert">
                  <h4 class="alert-heading">Pending</h4>
                  <p>Your KYC verification is pending.
                    we will notify you once your verification is complete.</p>
                  <h5>
                    <span class="fw-semibold">ID Type:</span> {{$verification->verification_type}}
                  </h5>
                  <h5>
                    <span class="fw-semibold">Status:</span> {{$verification->status}}
                  </h5>
                  <p>
                    You can't submit another verification until this is complete.
                  </p>
                </div>
                @elseif($verification->status == "rejected")
                <div class="alert alert-danger" role="alert">
                  <h4 class="alert-heading">
                    Rejected
                  </h4>
                  <p>Your KYC verification has been rejected,
                    you cannot submit another verification.
                  </p>
                  <div class="row">
                    <div class="col-12">
                      <div class="card bg-transparent">
                        <div class="card-body">
                          <h4 class="card-title">
                            <span class="fw-semibold">ID Type:</span> {{$verification->verification_type}}
                          </h4>
                          <h4 class="card-title">
                            <span class="fw-semibold">Status:</span> {{$verification->status}}
                          </h4>
                          <h4 class="card-title">
                            <span class="fw-semibold">Date:</span> {{$verification->updated_at->format('d M Y h:i A')}}
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @else
                <div class="alert alert-success" role="alert">
                  <h4 class="alert-heading">Verified</h4>
                  <p>Your KYC verification has been verified. You can now proceed to trade.</p>
                  <div class="row">
                    <div class="col-12">
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">
                            <span class="fw-semibold">ID Type:</span> {{$verification->verification_type}}
                          </h4>
                          <h4 class="card-title">
                            <span class="fw-semibold">Status:</span> {{$verification->status}}
                          </h4>
                          <h4 class="card-title">
                            <span class="fw-semibold">Date:</span> {{$verification->updated_at->format('d M Y h:i A')}}
                          </h4>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endif
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
