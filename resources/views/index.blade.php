@php 
 $getRecord = DB::table('welcomes')->get();
 $successes = DB::table('successes')->get();
 $news = DB::table('news')->get();
 $wanteds = DB::table('wanteds')->get();
 $losts = DB::table('losts')->get();

@endphp
@extends('layouts.body.master_home')


@section('home_content')
 
 <!-- welcome section -->
 <section class="welcome_section layout_padding">
    <div class="container-fluid">
      <div class="row">
      @foreach($getRecord as $value)
        <div class=" col-md-6">
          <div>
            <img class="img-fluid" src="{{$value->image}}" alt="" />
          </div>
        </div>
        <div class=" col-md-6">
       
          <div class="welcome_detail">
            <h3>
              Welcome
            </h3>
            <h2>
              {{$value->title}}
            </h2>
            <p>
            {{$value->text}}
            </p>
            <div class="welcome_detail-btn">
              <a href="">
                <span>
                  Read More
                </span>
                <img src="frontend/images/arrow-black.png" alt="" class="ml-2" />
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- end welcome section -->

  <!-- service section -->
  <section class="service_section ">
    <div class="container">
      <div class="service_detail">
        <h3>
          We
        </h3>
        <h2>
          we provide best services
        </h2>
      </div>
      <div class="service_img-container">
        <div class="service_img-box i-box-1">
          <a href=""> Bank security</a>
        </div>
        <div class="service_img-box i-box-2">
          <a href="">society Guard </a>
        </div>
        <div class="service_img-box i-box-3">
          <a href="">Hotel Security </a>
        </div>
        <div class="service_img-box i-box-4">
          <a href=""> Home security</a>
        </div>
      </div>
      <div class="service_btn">
        <a href="">
          <span>
            Read More
          </span>
          <img src="frontend/images/arrow-black.png" alt="" class="ml-2" />
        </a>
      </div>
    </div>
  </section>
  <!-- end service section -->

  <!-- security section -->

  <section class="security_section layout_padding">
    <h3>
      Security


    </h3>
    <h2>
      Our Top Officers
    </h2>
    <div class="security_container">
      <div class="carousel-wrap">
        <div class="owl-carousel">
          <div class="item">
            <div class="security_img-box i-box-1">
              <a href=""> View More</a>
            </div>
          </div>
          <div class="item">
            <div class="security_img-box i-box-2">
              <a href=""> View More</a>
            </div>
          </div>
          <div class="item">
            <div class="security_img-box i-box-3">
              <a href=""> View More</a>
            </div>
          </div>

        </div>
      </div>
    </div>
    <div class="security_btn">
      <a href="">
        <span>
          Read More
        </span>
        <img src="frontend/images/arrow-black.png" alt="" class="ml-2" />
      </a>
    </div>
  </section>
  <!-- end security section -->


  <!-- story section -->

  <section class="layout_padding story_section">
    <div class="container-fluid">
      <div class="row">
        <div class=" col-md-6">
          <div>
            <img class="img-fluid" src=" {{$value->image}}" alt="" />
          </div>
        </div>
        @foreach($successes as $value)
        <div class=" col-md-6">
          <div class="story_detail">
            <h3>
              Our
            </h3>
            <h2>
            {{$value->title}}
            </h2>
            <p>
            {{$value->text}}
            </p>
            <div class="story_detail-btn">
              <a href="">
                <span>
                  Read More
                </span>
                <img src="frontend/images/arrow-black.png" alt="" class="ml-2" />
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- end story section -->

  <!-- news section -->
  
 <section class="welcome_section layout_padding">
    <div class="container-fluid">
      <div class="row">
      @foreach($news as $value)
        <div class=" col-md-6">
          <div>
            <img class="img-fluid" src="{{$value->image}}" alt="" />
          </div>
        </div>
        <div class=" col-md-6">
       
          <div class="welcome_detail">
            <h3>
              Police Weekly News
            </h3>
            <h2>
              {{$value->title}}
            </h2>
            <p>
            {{$value->text}}
            </p>
            <div class="welcome_detail-btn">
              <a href="">
                <span>
                  Read More
                </span>
                <img src="frontend/images/arrow-black.png" alt="" class="ml-2" />
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- end news section -->


  <!-- Wanted section -->

  <section class="layout_padding story_section">
    <div class="container-fluid">
      <div class="row">
      @foreach($wanteds as $value)
        <div class=" col-md-6">
          <div>
            <img class="img-fluid" src=" {{$value->image}}" alt="" />
          </div>
        </div>
       
        <div class=" col-md-6">
          <div class="story_detail">
            <h3>
            Wanted
            </h3>
            <h2>
            {{$value->title}}
            </h2>
            <p>
            {{$value->text}}
            </p>
            <div class="story_detail-btn">
              <a href="">
                <span>
                  Read More
                </span>
                <img src="frontend/images/arrow-black.png" alt="" class="ml-2" />
              </a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>

  <!-- end Wanted section -->

  <!-- Lost section -->
  
 <section class="welcome_section layout_padding">
    <div class="container-fluid">
      <div class="row">
      @foreach($losts as $value)
        <div class=" col-md-6">
          <div>
            <img class="img-fluid" src="{{$value->image}}" alt="" />
          </div>
        </div>
        <div class=" col-md-6">
       
          <div class="welcome_detail">
            <h3>
              LOST AND FOUND ITEMS
            </h3>
            <h2>
              {{$value->title}}
            </h2>
            <p>
            {{$value->text}}
            </p>
            <div class="welcome_detail-btn">
              <a href="">
                <span>
                  Read More
                </span>
                <img src="frontend/images/arrow-black.png" alt="" class="ml-2" />
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </section>
  <!-- end Lost section -->


 

  <!-- info section -->
  <section class="info_section layout_padding">
    <div class="container">
      <div class="row">
        <div class=" col-md-4 info_detail">
          <div>
           <p>
            We are bringing to you all the police services online to easy everyones work in the country
           </p>
          </div>
        </div>
        <div class=" col-md-4 address_container">
          <div>
            <h3>
              Address:
            </h3>
            <div class="address_link-container">
              <a href="">
                <img src="frontend/images/location.png" alt="">
                <span> Address: Naguru , Kampala
                </span>
              </a>
              <a href="">
                <img src="frontend/images/phone.png" alt="">
                <span> Tel: +256-776322439
                </span>
              </a>
              <a href="">
                <img src="frontend/images/mail.png" alt="">
                <span>
                  Email: ceoainembabaziderrick@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class=" col-md-4 news_container">
          <div>
            <div>
              <h3>
                newsletter

              </h3>
              <form action="">
                <input type="email" placeholder="ENTER YOUR EMAIL">
                <div>
                  <button type="submit">
                    Subscribe
                  </button>
                </div>
              </form>
            </div>
            <div class="social_container">
              <div>
                <img src="frontend/images/fb.png" alt="">
              </div>
              <div>
                <img src="frontend/images/twitter.png" alt="">
              </div>
              <div>
                <img src="frontend/images/linkedin.png" alt="">
              </div>
              <div>
                <img src="frontend/images/youtube.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end info section -->

  @endsection