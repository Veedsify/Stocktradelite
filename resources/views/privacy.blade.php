@extends('layouts.app')
@section('content')
<x-pages.header />
<!-- PageTitle -->
<section class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="heading">Privacy Policy</h3>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li>
            <p class="fs-18">/</p>
          </li>
          <li>
            <p class="fs-18">Privacy Policy</p>
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
          <h3 class="title">
            {{ $privacyContent->title }}
          </h3>
          <div class="content">

                {!! $privacyContent->content !!}

          </div>
          <form action="#">
            <h6 class="heading">Have a question?</h6>
            <div class="form-group">
              <input class="form-control" type="text" placeholder="Name">
              <input class="form-control" type="text" placeholder="Email">
            </div>
            <div class="form-group">
              <textarea class="form-control" cols="30" rows="10" placeholder="Qeuestion"></textarea>
            </div>
            <button class="btn-action" type="submit">Send</button>
          </form>
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
