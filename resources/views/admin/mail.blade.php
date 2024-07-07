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
            <div class="card-body px-4 py-3">
              <div class="row align-items-center">
                <div class="col-9">
                  <h4 class="fw-semibold mb-8">Send Mail</h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="index.html">Home</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">mail</li>
                    </ol>
                  </nav>
                </div>
                <div class="col-3">
                  <div class="text-center mb-n5">
                    <img src="{{asset('user-assets/images/breadcrumb/ChatBc.png')}}" alt="" class="img-fluid mb-n4">
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-body">
            
              <form action="" class="form-horizontal">
                <div class="mb-4">
                  <label class="form-label">To:<span class="text-danger">*</span>
                  </label>
                  <input type="text" class="form-control"  >
                </div>
                <div class="mb-4">
                  <label class="form-label">Subject: <span class="text-danger">*</span>
                  </label>
                  <input type="text" class="form-control"  >
                </div>
                <div>
                  <label class="form-label">Message:</label>
                  <div id="editor" style="min-height: 30vh">
                  </div>
                </div>
                <button class="btn btn-primary mt-2">Send</button>
              </form>
            </div>
          </div>



      </div>
    </div>

    <x-admin.canvas />

  </div>
  <x-admin.search />




</div>

@endsection
