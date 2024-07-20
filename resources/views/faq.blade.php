@extends('layouts.app')
@section('content')
<x-pages.header />
<!-- PageTitle -->
<section class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="heading">FAQ</h3>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li>
            <p class="fs-18">/</p>
          </li>
          <li>
            <p class="fs-18">FAQ</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<!-- End PageTitle -->

  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <!-- FAQ 1 - Bootstrap Brain Component -->


        <div class="faq">
            <div class="block-text">
                <div class="heading">
                    <h4>Frequently Asked Questions</h4>
                </div>
            </div>

            <div class="flat-accordion">
                <div class="flat-toggle">
                    <div class="toggle-title">
                        <h6>Question 1: What is Stocktradelite?</h6>
                    </div>
                    <div class="toggle-content">
                        <p>Stocktradelite is a platform that allows you to smartly invest in cryptocurrencies. It provides an easy and secure way to buy and sell various digital currencies.</p>
                        <a href="#">Learn More about Investing</a>
                    </div>
                </div>

                <div class="flat-toggle">
                    <div class="toggle-title">
                        <h6>Question 2: How do I get started with Stocktradelite?</h6>
                    </div>
                    <div class="toggle-content">
                        <p>To get started with Stocktradelite, simply sign up on our platform. It's the easiest place to begin your cryptocurrency trading journey.</p>
                        <a href="#">Sign Up Now</a>
                    </div>
                </div>

                <div class="flat-toggle">
                    <div class="toggle-title">
                        <h6>Question 3: Is Stocktradelite secure?</h6>
                    </div>
                    <div class="toggle-content">
                        <p>Yes, Stocktradelite prioritizes security measures to safeguard your investments. We use advanced encryption and authentication methods to ensure a safe trading environment.</p>
                        <a href="#">Learn About Our Security Features</a>
                    </div>
                </div>
            </div>
        </div>


      </div>
    </div>
  </div>

<section class="section-sale">
  <div class="container">
    <div class="row">
      <div class="col-md-7">
        <div class="block-text">
          <h4 class="heading" >Signup and Earn higher profits here on Stocklitetrade</h4>
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
