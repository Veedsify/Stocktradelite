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
                <h4 class="fw-semibold mb-8">eDIT </h4>
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item">
                      <a class="text-muted text-decoration-none" href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item" aria-current="page">Terms/Condition</li>
                  </ol>
                </nav>
              </div>

            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body">

            <form action="{{route('admin.terms.update')}}" class="form-horizontal" method="post">
              <div class="mb-4">

                <input type="text" class="form-control" value="Virtual Land In The Metaverse Is Selling For Millions Of Dollars" name="title">
              </div>

              <div>
                <div id="editor" style="min-height: 30vh" name="content">
                </div>
              </div>
              <button class="btn btn-primary mt-2" type="submit">Send</button>
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
