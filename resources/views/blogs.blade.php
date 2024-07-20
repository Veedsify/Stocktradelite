@extends('layouts.app')
@section('content')
<x-pages.header />

<!-- PageTitle -->
<section class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="heading">All Articles</h3>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li>
            <p class="fs-18">/</p>
          </li>
          <li>
            <p class="fs-18">Blog</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- End PageTitle -->

<section class="blog-default">
  <div class="container">
    <div class="row">
      <div class="col-xl-4 col-md-12">
        <div class="sidebar">
          <form class="form-search" action="#">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Search Post">
              <button type="submit" class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
            </div>
          </form>
          <div class="widget category">
            <h6 class="heading">Category</h6>

            <ul>
              @foreach ($categories as $category)
              @if ($loop->iteration < 10) <li><a href="#">{{ $category->category }}</a></li>
                @endif
                @endforeach
            </ul>
          </div>
          <div class="widget recent">
            <h6 class="heading">Recent Post</h6>
            <ul>
              @foreach ($blogs as $blog)
              @if($loop->iteration < 3) <li>
                <div class="image">
                  <img src="{{asset($blog->image)}}" alt="{{$blog->title}}">
                </div>
                <div class="content">
                  <a href="{{route('blog.single',[$blog->slug])}}" class="category">
                    {{$blog->category}}
                  </a>
                  <a href="{{route('blog.single',[$blog->slug])}}" class="title">
                    {{$blog->title}}
                  </a>
                </div>
                </li>
                @endif
                @endforeach
            </ul>
          </div>

          <div class="widget tags">
            <h6 class="heading">Popular tags</h6>

            <ul>
              <li><a href="blog-grid-v1.html">Crypto</a></li>
              <li><a href="blog-grid-v1.html">Virtual Land</a></li>
              <li><a href="blog-grid-v1.html">Metaverse</a></li>
              <li><a href="blog-grid-v1.html">NFT Marketplace</a></li>
              <li><a href="blog-grid-v1.html">Token</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="col-xl-8 col-md-12">
        <div>
          @if(count($blogs) == 0)
          <h3>
            No Blogs Found !
          </h3>
          @endif
        </div>
        <div class="blog-main row">
          @foreach ($blogs as $blog)
          <div class="blog-box col-md-6">
            <div class="box-image">
              <img src="{{ asset($blog->image) }}" alt="" class="ratio-1x1">
            </div>

            <div class="box-content">
              <a href="#" class="category btn-action">
                {{ $blog->category }}
              </a>
              <a href="{{ route('blog.single', [$blog->slug]) }}" class="title">
                {{ $blog->title }}
              </a>

              <div class="meta">
                <a href="#" class="name"><span></span>
                  {{ $blog->user->name }}
                </a>
                <a href="#" class="time">
                  {{ $blog->created_at->diffForHumans() }}
                </a>
              </div>
              <p class="text">
                {{ Str::limit($blog->meta_description, 200) }}
              </p>
              <a href="{{ route('blog.single', [$blog->slug]) }}">Read More</a>
            </div>
          </div>
          @endforeach
          {{-- PAGINATION HERE --}}
          {{
          $blogs->links('vendor.pagination.bootstrap-5')
          }}
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-sale">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="block-text">
          <h4 class="heading">Signup and Earn higher profits here on Stocklitetrade</h4>
          <p class="desc">
            Discover how specific cryptocurrencies work — and get a bit of
            each crypto to try out for yourself.
          </p>
        </div>
      </div>
      <div class="col-md-5">
        <div class="button">
          <a href="#">Create Account</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection
