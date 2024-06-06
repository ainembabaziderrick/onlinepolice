@php 
 $sliders = DB::table('sliders')->get();

@endphp
 
 
 <!-- slider section -->
 <section class=" slider_section">
    <div id="carouselExampleIndicators" class="carousel slide vert" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
      @foreach($sliders as $key => $slider)
        <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" style="background-image: url({{asset($slider->image)}});">
          <div class="slider_box">
            <div class="fixed_company-detail">
              <p>
                Security Guard Company
              </p>
            </div>
            <div class="slider-detail">
              <div class="slider_detail-heading">
                <h2>
                {{ $slider->title }}
                </h2>
                <h1>
                  Provided security services
                </h1>
              </div>
              <div class="slider_detail-text">
                <p>
                {{ $slider->text }}
                </p>
              </div>
              <div class="slider_detail-btn">
                <a href="">
                  <span>
                    Read More
                  </span>
                  <img src="frontend/images/arrow.png" alt="" class="ml-2" />
                </a>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>

  <!-- end slider section -->