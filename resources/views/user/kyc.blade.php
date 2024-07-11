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
                              <a class="text-muted text-decoration-none" href="index.html">Home</a>
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
                                <div class=" m-0 ">
                                  <h5 class="card-title fw-semibold">KYC verification</h5>
                                  <p class="card-subtitle">Choose KYC method:</p>

                                        <form>
                                          <div class="row mt-4">


                                                <label class="form-label">
                                                  select <span class="text-danger">*</span>
                                                </label>
                                                <select class="form-select mr-sm-2" id="inlineFormCustomSelect">
                                                  <option disabled selected="">Select an option</option>
                                                  <option value="1" >ID</option>
                                                  <option value="2" >Socaial Security Number</option>
                                                  <option value="3">Drivers  Licence</option>
                                                </select>




                                          </div>
                                        </form>



                              <div class=" row">
                                  <div class="card-body col-md-6">
                                      <h4 class="card-title mb-2">Front</h4>

                                      <form action="#" class="dropzone dz-clickable mb-2">
                                          <div class="dz-default dz-message">
                                              <button class="dz-button" type="button">Drop files here
                                                  to upload</button>
                                                </div>
                                       </form>
                                   </div>
                                        <div class="card-body col-md-6">
                                            <h4 class="card-title mb-2">Back</h4>

                                            <form action="#" class="dropzone dz-clickable mb-2">
                                                <div class="dz-default dz-message">
                                                    <button class="dz-button" type="button">Drop files here
                                                        to upload</button>
                                                </div>
                                             </form>
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
