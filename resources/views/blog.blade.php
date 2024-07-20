@extends('layouts.app')
@section('content')
<x-pages.header />
<!-- PageTitle -->
<section class="page-title">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h3 class="heading">Blog Details</h3>
      </div>
      <div class="col-md-6">
        <ul class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li>
            <p class="fs-18">/</p>
          </li>
          <li>
            <p class="fs-18">Blog Details</p>
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
            Virtual Land in the Metaverse Is Selling for Millions of Dollars
          </h3>

          <div class="meta">
            <a href="#" class="category btn-action">learn & earn</a>

            <div class="meta-info">
              <a href="#" class="name"><span></span>Floyd Buckridge</a>
              <a href="#" class="time">Feb 03, 2021</a>
            </div>
          </div>
          <div class="content">
            <h5>What is the Metaverse?</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit.
              Posuere sed nec, vestibulum odio diam amet. In massa auctor
              integer est. Morbi viverra neque sagittis varius. Ornare in
              nibh dui ornare mattis vel. Volutpat aenean enim sit cras
              egestas diam volutpat integer est. Ornare in odio lorem
              pharetra tempor, neque sit. Lacus fermentum urna tellus
              vulputate aliquam nullam amet, posuere. Magna ligula et ut
              sagittis interdum duis. Ut sed tristique tempor nibh bibendum
              accumsan, fringilla. Eget rhoncus in hendrerit nascetur odio
              consectetur enim tristique. In porttitor.
            </p>

            <div class="box-image">
              <img src="{{asset('assets/images/blog/blog-01.jpg')}}" alt="">
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

            <h5>What is Virtual Land?</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lacus
              quis diam integer ridiculus facilisis. Laoreet diam, ipsum
              congue augue vel aenean mus. At felis, quis massa elementum
              tortor dignissim erat. Pharetra eleifend facilisis sit nisi,
              pharetra urna volutpat. Amet lacus sed lorem euismod at diam
              neque, mi. Eget congue id phasellus pulvinar id at enim
              feugiat cursus. Aliquam egestas vulputate semper at cursus
              quam. Augue egestas montes, amet mauris molestie nibh. Aliquam
              viverra nec, ornare vitae. Eu etiam donec morbi purus quis
              quis nibh. Venenatis cras magna.
            </p>
            <div class="image">
              <img src="{{asset('assets/images/blog/blog-details-1.jpg')}}" alt="">
              <img src="{{asset('assets/images/blog/blog-details-2.jpg')}}" alt="">
            </div>

            <h5>The Frontier of a New Economy</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Massa
              aenean turpis nec pharetra. Eu massa egestas dolor a facilisi.
              Sed amet, ultrices et venenatis vitae ipsum ante. Cras viverra
              dui augue nulla nulla phasellus magna. Quam congue ut nibh ut
              magna non. Elit elementum cursus curabitur aliquet senectus.
              Donec velit ac sed vitae vulputate lorem. Amet, amet feugiat
              dui cursus integer luctus. Malesuada eu sodales et arcu varius
              ac porta. Eu tincidunt et, tellus enim. Natoque in augue ac
              donec tellus. Libero vel magnis leo nunc erat adipiscing
              pretium diam. Nibh sagittis consequat massa vel. Tellus
              interdum elit velit velit tincidunt egestas nunc, eu. Sit enim
              vitae neque at nulla. Libero at facilisis scelerisque velit
              gravida pellentesque amet, amet. Massa et viverra vitae, nec
              turpis nisi. A suspendisse feugiat ac faucibus.
            </p>
            <div class="img">
              <img src="{{asset('assets/images/blog/blog-details-3.jpg')}}" alt="">
            </div>
            <h5>The Value Creation Machine</h5>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi
              iaculis laoreet morbi malesuada. Ligula semper faucibus eu
              posuere enim diam. Pharetra amet velit lacus, montes, justo.
              Tortor, lorem vivamus sit in mi ipsum sit sollicitudin dolor.
              Nunc justo cras sed sollicitudin in. Lacus euismod hendrerit
              duis pellentesque urna pulvinar lacinia. Platea tempor tellus,
              amet odio mauris cursus pharetra. Massa nec, pretium
              scelerisque nulla. Quam vitae vulputate et nunc nibh
              vestibulum consectetur. Viverra non scelerisque quam rhoncus
              id diam. Proin.
            </p>
          </div>

          <div class="details-bottom">
            <div class="tags">
              <h6>Tags:</h6>
              <ul>
                <li><a href="blog-grid-v1.html">Metaverse</a></li>
                <li><a href="blog-grid-v1.html">NFT Marketplace</a></li>
                <li><a href="blog-grid-v1.html">Virtual Land</a></li>
              </ul>
            </div>
            <div class="share">
              <h6>Share:</h6>
              <ul>
                <li>
                  <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa-brands fa-instagram"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa-brands fa-youtube"></i></a>
                </li>
                <li>
                  <a href="#"><i class="fa-brands fa-twitter"></i></a>
                </li>
              </ul>
            </div>
          </div>

          <form action="#">
            <h6 class="heading">Leave a comment</h6>
            <div class="form-group">
              <input class="form-control" type="text" placeholder="Name">
              <input class="form-control" type="text" placeholder="Email">
            </div>
            <div class="form-group">
              <textarea class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            <button class="btn-action" type="submit">Send comment</button>
          </form>
        </div>
      </div>
      <div class="col-xl-4 col-md-12">
        <div class="sidebar">
          <div class="widget recent mt-0">
            <h6 class="heading">Recent Post</h6>

            <ul>
              <li>
                <div class="image">
                  <img src="{{asset('assets/images/blog/blog-01.jpg')}}" alt="">
                </div>
                <div class="content">
                  <a href="#" class="category">LEARN & EARN</a>
                  <a href="" class="title">Learn about UI8 coin and earn an All-Access Pass</a>
                </div>
              </li>
              <li>
                <div class="image">
                  <img src="{{asset('assets/images/blog/blog-01.jpg')}}" alt="">
                </div>
                <div class="content">
                  <a href="#" class="category">LEARN & EARN</a>
                  <a href="" class="title">Learn about UI8 coin and earn an All-Access Pass</a>
                </div>
              </li>
              <li>
                <div class="image">
                  <img src="{{asset('assets/images/blog/blog-01.jpg')}}" alt="">
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
              <li><a href="blog-grid-v1.html">NFTs</a></li>
              <li><a href="blog-grid-v1.html">Bitcoin</a></li>
              <li><a href="blog-grid-v1.html">Arts</a></li>
              <li><a href="blog-grid-v1.html">Wallet</a></li>
            </ul>
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
