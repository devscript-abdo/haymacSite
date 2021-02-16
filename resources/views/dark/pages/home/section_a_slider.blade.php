<!-- ==================== Start Slider ==================== -->

<header class="slider slider-prlx fixed-slider text-center">
    <div class="swiper-container parallax-slider">
        <div class="swiper-wrapper">
            @foreach($sliders as $slider)
                <div class="swiper-slide">
                    <div class="bg-img valign" data-background="{{Voyager::image($slider->image)}}" data-overlay-dark="6">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 col-md-9">
                                    <div class="caption center">
                                        {{--<h1 data-splitting>Unique <br> brand Stories</h1>--}}
                                        <h1 data-splitting>{{$slider->title}}</h1>
                                        <p>{{$slider->description}}</p>
                                        <a href="{{$slider->button_link}}" class="btn-curve btn-lit mt-30">
                                            <span>{{$slider->button_text}}</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        <!-- slider setting -->
        <div class="setone setwo">
            <div class="swiper-button-next swiper-nav-ctrl next-ctrl cursor-pointer">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div class="swiper-button-prev swiper-nav-ctrl prev-ctrl cursor-pointer">
                <i class="fas fa-chevron-left"></i>
            </div>
        </div>
        <div class="swiper-pagination top botm custom-font"></div>

        <div class="social-icon">
            <a href="#0"><i class="fab fa-facebook-f"></i></a>
            <a href="#0"><i class="fab fa-twitter"></i></a>
            <a href="#0"><i class="fab fa-behance"></i></a>
            <a href="#0"><i class="fab fa-pinterest-p"></i></a>
        </div>
    </div>
</header>

<!-- ==================== End Slider ==================== -->