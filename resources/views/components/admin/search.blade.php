     <!--  Search Bar -->
     <div class="modal fade" id="exampleModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-lg">
          <div class="modal-content rounded-1">

            <div class="modal-body message-body" data-simplebar="">
              <h5 class="mb-0 fs-5 p-1">Quick Page Links</h5>
              <ul class="list mb-0 py-2">
                <li class="p-1 mb-1 bg-hover-light-black">
                  <a href="{{route('admin')}}">
                    <span class="fs-3 text-dark fw-normal d-block">Dashboard</span>
                    <span class="fs-3 text-muted d-block">/home</span>
                  </a>
                </li>
                <li class="p-1 mb-1 bg-hover-light-black">
                  <a href="{{route('mail')}}">
                    <span class="fs-3 text-dark fw-normal d-block">Send a mail</span>
                    <span class="fs-3 text-muted d-block">/home/mailing</span>
                  </a>
                </li>
                <li class="p-1 mb-1 bg-hover-light-black">
                  <a href="{{route('users')}}">
                    <span class="fs-3 text-dark fw-normal d-block">Users</span>
                    <span class="fs-3 text-muted d-block">/home/Users</span>
                  </a>
                </li>

                <li class="p-1 mb-1 bg-hover-light-black">
                  <a href="{{route('admin.notification')}}">
                    <span class="fs-3 text-dark fw-normal d-block">Notification</span>
                    <span class="fs-3 text-muted d-block">/home/notification</span>
                  </a>
                </li>






              </ul>
            </div>
          </div>
        </div>
      </div>
