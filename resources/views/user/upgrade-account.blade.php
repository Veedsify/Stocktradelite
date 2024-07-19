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
                <h4 class="fw-semibold mb-8">
                  Upgrade Plans
                </h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a class="text-muted text-decoration-none" href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">
                      Upgrade Plans
                    </li>
                  </ol>
                </nav>
              </div>

            </div>
          </div>
        </div>


        <div class="row justify-content-center">
          <div class="col-lg-6 text-center mb-5">
            <h2 class="fw-bolder mb-2 fs-8 lh-base">
              Flexible Plans For You
            </h2>
            <p class="fs-4">
              All plans comes with higher interest on trades and 24/7 access to customers support
            </p>
          </div>
        </div>

        <div class="row">

          @foreach ($tiers as $tier)
          <div class="col-sm-6 col-lg-4">
            <div class="card {{auth()->user()->tier === $tier->id ? " border border-warning" : "" }}">
              <div class="card-body">
                {!! auth()->user()->tier === $tier->id ? "<button class='cutom-badge'>Current</button>" : ""
                !!}
                <span class="fw-bolder text-uppercase fs-3 d-block mb-7">
                  {{$tier->name}}
                </span>
                <div class="my-4">
                  <img src="{{asset('user-assets/images/backgrounds/tiers/plan-'. $loop->iteration . '.png')}}" alt=""
                    class="img-fluid" width="80" height="80">
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
                <h2 class="fw-bolder fs-big mb-3">INVEST ${{number_format($tier->price)}}</h2>
                @if(auth()->user()->tier < $tier->id)
                <a href="{{route('upgrade.deposit', [$tier->id])}}"
                  class="btn btn-primary fw-bolder py-6 w-100 text-capitalize">Choose
                  {{$tier->name}}
                </a>
                @endif
              </div>
            </div>
          </div>
          @endforeach

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