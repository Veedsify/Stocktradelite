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
            <!--  Owl carousel -->
            <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
                <div class="card-body px-4 py-3">
                 <div class="row align-items-center">
                   <div class="col-9">
                     <h4 class="fw-semibold mb-8">Pricing</h4>
                     <nav aria-label="breadcrumb">
                       <ol class="breadcrumb">
                         <li class="breadcrumb-item">
                           <a class="text-muted text-decoration-none" href="index.html">Home</a>
                         </li>
                         <li class="breadcrumb-item" aria-current="page">Pricing</li>
                       </ol>
                     </nav>
                   </div>
                   <div class="col-3">
                     <div class="text-center mb-n5">
                       <img src="../user-assets/images/breadcrumb/ChatBc.png" alt="" class="img-fluid mb-n4">
                     </div>
                   </div>
                 </div>
                 </div>
               </div>


               <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                  <h2 class="fw-bolder mb-0 fs-8 lh-base">Flexible Plans Tailored to Fit Your Community's Unique Needs!</h2>
                </div>
              </div>

              <div class="row">
                <div class="col-sm-6 col-lg-4">
                  <div class="card">
                    <div class="card-body">
                      <span class="fw-bolder text-uppercase fs-2 d-block mb-7">BEGINNER</span>
                      <div class="my-4">
                        <img src="{{asset('user-assets/images/backgrounds/silver.png')}}" alt="" class="img-fluid" width="80" height="80">
                      </div>
                      <ul class="list-unstyled mb-7">
                        <li class="d-flex align-items-center gap-2 py-2">
                          <i class="ti ti-check text-primary fs-4"></i>
                          <span class="text-dark">24x7 Support</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 py-2">
                          <i class="ti ti-check text-primary fs-4"></i>
                          <span class="text-dark">Professional Charts</span>
                        </li>
                        <li class="d-flex align-items-center gap-2 py-2">
                          <i class="ti ti-check text-primary fs-4"></i>
                          <span class="text-dark">Trading Alerts</span>
                        </li>


                      </ul>
                      <h2 class="fw-bolder fs-8 mb-3">INVEST $1,000</h2>

                      <button class="btn btn-primary fw-bolder py-6 w-100 text-capitalize">Choose Silver</button>
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
