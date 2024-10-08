<header class="topbar">
  <div class="with-vertical">
    <nav class="navbar navbar-expand-lg p-0">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)">
            <i class="ti ti-menu-2"></i>
          </a>
        </li>
        <li class="nav-item d-none d-lg-block">
          <a class="nav-link nav-icon-hover" href="javascript:void(0)" data-bs-toggle="modal"
            data-bs-target="#exampleModal">
            <i class="ti ti-search"></i>
          </a>
        </li>
      </ul>
      <ul class="navbar-nav quick-links d-none d-lg-flex">
        <li class="nav-item dropdown-hover d-none d-lg-block">
          <a class="nav-link" href="{{route('tradehistory')}}">Trade History</a>
        </li>
        <li class="nav-item dropdown-hover d-none d-lg-block">
          <a class="nav-link" href="{{route('upgradeaccount')}}">Upgrade Account</a>
        </li>
      </ul>
      <div class="d-block d-lg-none">
        <a href="{{route('user')}}" class="text-nowrap logo-img">
          <img src="{{asset('assets/images/logo/log-footer.png')}}" alt="Logo-Dark" width="200px">
        </a>
      </div>
      <a class="navbar-toggler nav-icon-hover p-0 border-0" href="javascript:void(0)" data-bs-toggle="collapse"
        data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="p-2">
          <i class="ti ti-dots fs-7"></i>
        </span>
      </a>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <div class="d-flex align-items-center justify-content-between">
          <a href="javascript:void(0)" class="nav-link d-flex d-lg-none align-items-center justify-content-center"
            type="button" data-bs-toggle="offcanvas" data-bs-target="#mobilenavbar"
            aria-controls="offcanvasWithBothOptions">
            <i class="ti ti-align-justified fs-7"></i>
          </a>
          <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-center">
            <li class="nav-item dropdown">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                aria-expanded="false">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
              <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                <div class="d-flex align-items-center justify-content-between py-3 px-7">
                  <h5 class="mb-0 fs-5 fw-semibold">Notifications</h5>
                  <span class="badge text-bg-primary rounded-4 px-3 py-1 lh-sm">5 new</span>
                </div>
                <div class="message-body" data-simplebar="">
                  @foreach($customNotifications as $notification)
                  <a href="{{route ('notification')}}"
                    class="py-6 px-7 d-flex align-items-center dropdown-item {{!$notification->is_read ? "
                    bg-primary-subtle" : "" }}">
                    <div class="w-75 d-inline-block v-middle ">
                      <h6 class="mb-1 fw-semibold lh-base">
                        {{$notification->title}}
                      </h6>
                      <span class="fs-2 d-block text-body-secondary">
                        {{Str::limit($notification->content, 50)}}
                      </span>
                    </div>
                    <small>
                      {{$notification->created_at->diffForHumans()}}
                    </small>
                  </a>
                  @endforeach
                </div>
                <div class="py-6 px-7 mb-1">
                </div>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
                aria-expanded="false">
                <div class="d-flex align-items-center">
                  <div class="user-profile-img">
                    <img src="{{asset(auth()->user()->avatar)}}" class="rounded-circle" width="35" height="35" alt="">
                  </div>
                </div>
              </a>
              <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop1">
                <div class="profile-dropdown position-relative" data-simplebar="">
                  <div class="py-3 px-7 pb-0">
                    <h5 class="mb-0 fs-5 fw-semibold">User Profile</h5>
                  </div>
                  <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                    <img src="{{asset(auth()->user()->avatar)}}" class="rounded-circle" width="80" height="80" alt="">
                    <div class="ms-3">
                      <h5 class="mb-1 fs-3">
                        {{ucwords(auth()->user()->name)}}
                      </h5>
                      <p class="mb-0 d-flex align-items-center gap-2">
                        <i class="ti ti-mail fs-4"></i> {{strtolower(auth()->user()->email)}}
                      </p>
                    </div>
                  </div>
                  <div class="message-body">
                    <a href="{{route('admin.profile')}}" class="py-8 px-7 mt-8 d-flex align-items-center">
                      <span class="d-flex align-items-center justify-content-center text-bg-light rounded-1 p-6">
                        <img src="../user-assets/images/svgs/icon-account.svg" alt="" width="24" height="24">
                      </span>
                      <div class="w-75 d-inline-block v-middle ps-3">
                        <h6 class="mb-1 fs-3 fw-semibold lh-base">My Profile</h6>
                        <span class="fs-2 d-block text-body-secondary">Account Settings</span>
                      </div>
                    </a>
                  </div>
                  <div class="d-grid py-4 px-7 pt-8">
                    <form action="{{route('logout')}}" method="get">
                      <input type="submit" value="Logout" class="btn btn-outline-primary w-100" />
                    </form>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

</header>