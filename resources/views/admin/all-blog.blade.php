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
        <div class="container-fluid">
          <div class="card bg-info-subtle shadow-none position-relative overflow-hidden mb-4">
  <div class="card-body px-4 py-4">
    <div class="row align-items-center">
      <div class="col-9">
        <h4 class="fw-semibold mb-8">Blog</h4>
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a class="text-muted text-decoration-none" href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item" aria-current="page">Blog</li>
          </ol>
        </nav>
      </div>

    </div>
  </div>
</div>

          <div class="row">

            <div class="col-md-6 col-lg-4">
              <div class="card rounded-2 overflow-hidden hover-img">
                <div class="position-relative">
                  <a href="blog-detail.html"><img src="{{asset('user-assets/images/blog/blog-img6.jpg')}}" class="card-img-top rounded-0" alt="..."></a>
                  <span class="badge text-bg-light fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">2
                    min Read</span>
                  <img src="{{asset('user-assets/images/profile/user-2.jpg')}}" alt="" class="img-fluid rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40" height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Addie Keller">
                </div>
                <div class="card-body p-4">
                  <span class="badge text-bg-light fs-2 rounded-4 py-1 px-2 lh-sm  mt-3">Gadget</span>
                  <a class="d-block my-4 fs-5 text-dark fw-semibold" href="blog-detail.html">As yen
                    tumbles, gadget-loving Japan goes
                    for iPhones</a>
                  <div class="d-flex align-items-center gap-4">
                    <div class="d-flex align-items-center gap-2"><i class="ti ti-eye text-dark fs-5"></i>9,125</div>
                    <div class="d-flex align-items-center gap-2"><i class="ti ti-message-2 text-dark fs-5"></i>3</div>
                    <div class="d-flex align-items-center fs-2 ms-auto"><i class="ti ti-point text-dark"></i>Mon, Jan 16
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
          <nav aria-label="...">
            <ul class="pagination justify-content-center mb-0 mt-4">
              <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 d-flex align-items-center justify-content-center" href="#"><i class="ti ti-chevron-left"></i></a>
              </li>
              <li class="page-item active" aria-current="page">
                <a class="page-link border-0 rounded-circle round-32 mx-1 d-flex align-items-center justify-content-center" href="#">1</a>
              </li>
              <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center" href="#">2</a>
              </li>
              <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center" href="#">3</a>
              </li>
              <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center" href="#">4</a>
              </li>
              <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center" href="#">5</a>
              </li>
              <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center" href="#">...</a>
              </li>
              <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 mx-1 d-flex align-items-center justify-content-center" href="#">10</a>
              </li>
              <li class="page-item">
                <a class="page-link border-0 rounded-circle text-dark round-32 d-flex align-items-center justify-content-center" href="#"><i class="ti ti-chevron-right"></i></a>
              </li>
            </ul>
          </nav>
        </div>
      </div>

    <x-admin.canvas />

  </div>
  <x-admin.search />
</div>

@endsection
