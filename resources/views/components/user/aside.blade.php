<aside class="left-sidebar with-vertical">
  <div>
    <!-- ---------------------------------- -->
    <!-- Start Vertical Layout Sidebar -->
    <!-- ---------------------------------- -->
    <div class="brand-logo d-flex align-items-center justify-content-between">
      <a href="{{route('user')}}" class="text-nowrap logo-img">
        <img src="{{asset('assets/images/logo/log-footer.png')}}" alt="Logo-Dark" width="180px">
      </a>
      <a href="javascript:void(0)" class="sidebartoggler ms-auto text-decoration-none fs-5 d-block d-xl-none">
        <i class="ti ti-x"></i>
      </a>
    </div>


    <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
      <ul id="sidebarnav">
        <!-- ---------------------------------- -->
        <!-- Home -->
        <!-- ---------------------------------- -->
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">Main</span>
        </li>
        <!-- ---------------------------------- -->
        <!-- Dashboard -->
        <!-- ---------------------------------- -->
        @if(auth()->user()->verified == true)
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{route('user')}}" aria-expanded="false">
            <span>
              <i class="ti ti-dashboard"></i>
            </span>
            <span class="hide-menu">
              Trade Center</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{route('deposit')}}" aria-expanded="false">
            <span>
              <i class="ti ti-receipt"></i>
            </span>
            <span class="hide-menu">Deposit</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{route('withdrawal')}}" aria-expanded="false">
            <span>
              <i class="ti ti-currency-dollar"></i>
            </span>
            <span class="hide-menu">Withdrawal</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{route('tradehistory')}}" aria-expanded="false">
            <span>
              <i class="ti ti-activity-heartbeat"></i>
            </span>
            <span class="hide-menu">Trade History</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{route('upgradeaccount')}}" aria-expanded="false">
            <span>
              <i class="ti ti-arrow-up"></i>
            </span>
            <span class="hide-menu">Upgrade Account</span>
          </a>
        </li>
        @endif
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{route('kyc')}}" aria-expanded="false">
            <span>
              <i class="ti ti-shield"></i>
            </span>
            <span class="hide-menu">KYC Verification</span>
          </a>
        </li>
        <!-- ---------------------------------- -->
        <!-- Apps -->
        <!-- ---------------------------------- -->
        <li class="nav-small-cap">
          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
          <span class="hide-menu">User Account Functions</span>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{route('profile')}}" aria-expanded="false">
            <span>
              <i class="ti ti-user"></i>
            </span>
            <span class="hide-menu">Profile</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{route('changepassword')}}" aria-expanded="false">
            <span>
              <i class="ti ti-key"></i>
            </span>
            <span class="hide-menu">Change Password</span>
          </a>
        </li>
        <li class="sidebar-item">
          <a class="sidebar-link" href="{{route('logout')}}" aria-expanded="false">
            <span>
              <i class="ti ti-logout"></i>
            </span>
            <span class="hide-menu">Logout</span>
          </a>
        </li>
      </ul>
    </nav>

    <div class="fixed-profile p-3 mx-4 mb-2 bg-secondary-subtle rounded mt-3">
      <div class="hstack gap-3">
        <div class="john-img">
          <img src="{{asset(auth()->user()->avatar)}}" class="rounded-circle" width="40" height="40" alt="">
        </div>
        <div class="john-title">
          <h6 class="mb-0 fs-4 fw-semibold">{{ucwords(explode(' ', auth()->user()->name)[0])}}</h6>
          <span class="fs-2">{{\App\Models\Tier::where('id', auth()->user()->tier)->first()->name ?? 'User'}}</span>
        </div>
        <a class="border-0 bg-transparent text-primary ms-auto" tabindex="0" href="{{route('logout')}}"
          aria-label="logout" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="logout">
          <i class="ti ti-power fs-6"></i>
        </a>
      </div>
    </div>

    <!-- ---------------------------------- -->
    <!-- Start Vertical Layout Sidebar -->
    <!-- ---------------------------------- -->
  </div>
</aside>