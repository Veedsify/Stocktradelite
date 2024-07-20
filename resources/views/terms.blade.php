@extends('layouts.app', [
    'title' => 'Terms and Condition',
  ])
@section('content')
<x-pages.header />
<!-- PageTitle -->
<section class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="heading">{{ $termsContent->title ?? "Privacy Policy" }}</h3>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li>
            <p class="fs-18">/</p>
          </li>
          <li>
            <p class="fs-18">Terms of Service</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- End PageTitle -->

<section class="blog-details">
  <div class="container">
    <div class="row">
      <div class="col-xl-8 col-md-12">
        <div class="blog-main">

          <div class="content">
            {!! $termsContent->content ?? "<p>Policy Page</p>" !!}
          </div>


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
