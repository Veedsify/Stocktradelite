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
          @foreach ($blogs as $blog)

          <div class="col-md-6 col-lg-4">
            <div class="card rounded-2 overflow-hidden hover-img">
              <div class="position-relative">
                <a href="{{route('blog.single', [$blog->slug])}}"><img src="{{asset($blog->image)}}"
                    class="card-img-top rounded-0" alt="{{$blog->title}}"></a>
                <span
                  class="badge text-bg-light fs-2 rounded-4 lh-sm mb-9 me-9 py-1 px-2 fw-semibold position-absolute bottom-0 end-0">
                  @php
                  Str::macro('readDuration', function(...$body) {
                  $totalWords = str_word_count(implode(" ", $body));
                  $minutesToRead = round($totalWords / 200);
                  return (int)max(1, $minutesToRead);
                  });

                  $est = Str::readDuration($blog->content). ' min read';
                  @endphp
                  {{
                  $est
                  }}
                </span>
                <img src="{{asset($blog->user->avatar)}}" alt=""
                  class="object-fit-cover rounded-circle position-absolute bottom-0 start-0 mb-n9 ms-9" width="40"
                  height="40" data-bs-toggle="tooltip" data-bs-placement="top" data-bs-title="Addie Keller">
              </div>
              <div class="card-body p-4">
                <span class="badge text-bg-light fs-2 rounded-4 py-1 px-2 lh-sm  mt-3">
                  {{strtoupper($blog->category)}}
                </span>
                <a target="_blank" class="d-block my-4 fs-5 text-dark fw-semibold"
                  href="{{route('blog.single', [$blog->slug])}}">
                  {{($blog->title)}}
                </a>
                <p class="mb-5">
                  {{Str::limit($blog->meta_description, 100)}}
                </p>
                <div class="d-flex align-items-center gap-4">
                  <div class="d-flex align-items-center gap-2">
                    <button class="btn btn-sm btn-primary rounded-4">
                      <i class="ti ti-pencil fs-5"></i>
                      Edit Blog
                    </button>
                  </div>
                  <div class="d-flex align-items-center fs-2 ms-auto"><i class="ti ti-point text-dark"></i>
                    {{
                    $blog->created_at->format('d-m-Y h:i A')
                    }}
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
        </div>
        <nav aria-label="d-flex justify-contents-end">
          {{$blogs->links('vendor/pagination/bootstrap-4')}}
        </nav>
      </div>
    </div>

    <x-admin.canvas />

  </div>
  <x-admin.search />
</div>

@endsection