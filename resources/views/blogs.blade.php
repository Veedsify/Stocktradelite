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
              <li><a href="blog-grid-v1.html">Blockchain</a></li>
              <li><a href="blog-grid-v1.html">Technology</a></li>
            </ul>
          </div>
          <div class="widget recent">
            <h6 class="heading">Recent Post</h6>

            <ul>
              <li>
                <div class="image">
                  <img src="assets/images/blog/blog-01.jpg" alt="">
                </div>
                <div class="content">
                  <a href="#" class="category">LEARN & EARN</a>
                  <a href="" class="title">Learn about UI8 coin and earn an All-Access Pass</a>
                </div>
              </li>
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
        <div class="blog-main row">
          <div class="blog-box col-md-6">
            <div class="box-image">
              <img src="assets/images/blog/blog-01.jpg" alt="" class="ratio-1x1">
            </div>

            <div class="box-content">
              <a href="#" class="category btn-action">learn & earn</a>
              <a href="" class="title">Learn about UI8 coin and earn an All-Access Pass</a>

              <div class="meta">
                <a href="#" class="name"><span></span>Floyd Buckridge</a>
                <a href="#" class="time">Feb 03, 2021</a>
              </div>
              <p class="text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Consectetur nibh curabitur sit in adipiscing purus ut sem.
                Donec nulla sem rhoncus dolor aliquam.
              </p>
              <a href="blog-details.html">Read More</a>
            </div>
          </div>
          <div class="blog-box col-md-6">
            <div class="box-image">
              <img src="assets/images/blog/blog-01.jpg" alt="">
              <div class="wrap-video">
                <a href="https://www.youtube.com/watch?v=i7EMACWuErA" class="popup-youtube">
                  <svg width="13" height="16" viewbox="0 0 13 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                      d="M0.466675 2.92407C0.466675 1.35705 2.187 0.398733 3.51938 1.22354L11.7197 6.2999C12.9827 7.0818 12.9827 8.91907 11.7197 9.70096L3.51938 14.7773C2.187 15.6021 0.466675 14.6438 0.466675 13.0768V2.92407Z"
                      fill="#777E90"></path>
                  </svg>
                </a>
              </div>
            </div>

            <div class="box-content">
              <a href="#" class="category btn-action">learn & earn</a>
              <a href="" class="title">Learn about UI8 coin and earn an All-Access Pass</a>

              <div class="meta">
                <a href="#" class="name"><span></span>Floyd Buckridge</a>
                <a href="#" class="time">Feb 03, 2021</a>
              </div>
              <p class="text">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                Consectetur nibh curabitur sit in adipiscing purus ut sem.
                Donec nulla sem rhoncus dolor aliquam.
              </p>
              <a href="blog-details.html">Read More</a>
            </div>
          </div>

          {{-- PAGINATION HERE --}}
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