@extends('layouts.app')
@section('content')
<x-pages.header />

<!-- PageTitle -->
<section class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="heading">Contact</h3>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li>
            <p class="fs-18">/</p>
          </li>
          <li>
            <p class="fs-18">Contact</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- End PageTitle -->

<section class="contact">
  <div class="container">
    <div class="row">
      <div class="col-xl-6 col-md-12">
        <div class="image">
          <img src="assets/images/layout/contact.jpg" alt="">
        </div>
      </div>
      <div class="col-xl-6 col-md-12">
        <div class="contact-main">
          <div class="block-text center">
            <h3 class="heading">Leave a message for us</h3>
            <p class="desc fs-20">Get in touch with Stocktradelite</p>
          </div>

          <form action="{{ route('contact.submit') }}" method="POST">
            @csrf
            <div class="form-group">
              <label>Your name</label>
              <input type="text" class="form-control" placeholder="Enter your name" name="name" required>
            </div>
            <div class="form-group">
              <label>Email </label>
              <input type="email" class="form-control" placeholder="Enter mail" name="email" required>
            </div>
            <div class="form-group">
              <label>Phone </label>
              <input type="number" class="form-control" placeholder="Enter Phone Number" name="phone" required>
            </div>

            <div class="form-group">
              <label>Subject </label>
              <input class="form-control" name="subject" placeholder="Subject">
            </div>
            <div class="form-group">
              <label>Message </label>
              <textarea cols="30" rows="10" class="form-control" name="message" placeholder="Enter your message"
                required></textarea>
            </div>

            <button type="submit" class="btn-action">Send message</button>
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
          <h4 class="heading">Earn up to $25 worth of crypto</h4>
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