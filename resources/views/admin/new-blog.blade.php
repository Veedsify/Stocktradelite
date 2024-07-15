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
                  <h4 class="fw-semibold mb-8">New Blog </h4>
                  <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                      <li class="breadcrumb-item">
                        <a class="text-muted text-decoration-none" href="https://bootstrapdemos.adminmart.com/modernize/dist/main/index.html">Home</a>
                      </li>
                      <li class="breadcrumb-item" aria-current="page">create Blog</li>
                    </ol>
                  </nav>
                </div>

              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12 ">
              <div class="card">
                <div class="card-body">

                  <form action="https://bootstrapdemos.adminmart.com/modernize/dist/main/eco-add-product.html" class="form-horizontal">
                    <div class="mb-4">
                      <label class="form-label">Add Title.. <span class="text-danger">*</span>
                      </label>
                      <input type="text" class="form-control" value="Product Name">
                    </div>
                    <div>
                      <label class="form-label">Descriptio <span class="text-danger">*</span></label>
                      <div>
                        <div id="editor" style="min-height: 30vh">
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  <h4 class="card-title mb-7">Media <span class="text-danger">*</span></h4>

                  <div class="form-group">
                    <div class="mb-2">
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

             <div class="row">

                <div class="col-lg-6">

                    <textarea name="description" placeholder="Write a description" id="" cols="30" rows="10" required="" class="form-control shadow-sm p-3 fw-bold mb-3"></textarea>
            </div>
            <div class="col-lg-6">


              <div class="card">


                <div class="card-body">
                <h4 class="card-title mb-7">Feature image <span class="text-danger">*</span></h4>
                <div class="form-group">
                    <div class="mb-2">
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

            <div class="card">
                <div class="card-body">
                  <div class="d-flex align-items-center justify-content-between mb-7">
                    <h4 class="card-title">Status <span class="text-danger">*</span></h4>
                    <div class="p-2 h-100 bg-success rounded-circle"></div>
                  </div>
                  <form action="https://bootstrapdemos.adminmart.com/modernize/dist/main/eco-add-product.html" class="form-horizontal">
                    <div>
                      <select class="form-select mr-sm-2  mb-2" id="inlineFormCustomSelect">
                        <option selected="">Published</option>
                        <option value="1">Draft</option>
                        <option value="2">Sheduled</option>
                        <option value="3">Inactive</option>
                      </select>
                      <p class="fs-2 mb-0">
                        Set the product status.
                      </p>
                    </div>
                  </form>
                </div>
              </div>


              <div class="form-actions mb-5">
                <button type="submit" class="btn btn-primary">
                  Save changes
                </button>
                <button type="button" class="btn bg-danger-subtle text-danger ms-6">
                  Cancel
                </button>
              </div>
            </div>

          </div>
        </div>
      </div>

    <x-admin.canvas />

  </div>
  <x-admin.search />
</div>

@endsection
