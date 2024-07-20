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
                    <li class="breadcrumb-item" aria-current="page">privacy policy</li>
                  </ol>
                </nav>
              </div>

            </div>
          </div>
        </div>

        <div class="card">
          <div class="card-body">

            <form action="{{ route('admin.settings.update.privacy.policy') }}" method="post" class="form-horizontal">
              @csrf
              <div class="mb-4">
                <input type="text" class="form-control" name="title" value="{{old('title') ?? $privacyPolicy->title}}">
              </div>
              <div>
                <div id="editor" style="min-height: 30vh; width: 100%; outline: none;" name="content" class="p-3">
                  {!! $privacyPolicy->content !!}
                </div>
                <textarea name="content" id="textareaMail" class="d-none" cols="30" rows="10">{!! $privacyPolicy->content !!}</textarea>
              </div>
              <button class="btn btn-primary mt-2 w-50 btn-lg">
                Save
              </button>
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