
<section class="testimonials section-padding">
    <div class="container position-re">
        <div class="sec-head custom-font text-center">
            <h6 class="wow fadeIn" data-wow-delay=".5s">{{setting('testimonials.testimonials_people')}}</h6>
            <h3 class="wow" data-splitting>{{setting('testimonials.testimonials_title')}}</h3>
            <span class="tbg">{{setting('testimonials.testimonials_title')}}</span>
        </div>
        <div class="row justify-content-center wow fadeInUp" data-wow-delay=".5s">
            <div class="col-lg-8">
                <div class="slic-item">
                    @foreach($testimonials as $testi)
                        <div class="item">
                            <p>{{$testi->content}}</p>
                            <div class="info">
                                <div class="cont">
                                    <div class="author">
                                        <div class="img">
                                            <img src="{{$testi->default_avatar}}" alt="{{$testi->name}}">
                                        </div>
                                        <h6 class="author-name custom-font">{{$testi->name}}</h6>
                                        <span class="author-details">{{$testi->post}}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>

        <div class="arrows">
            <div class="next cursor-pointer">
                <span class="pe-7s-angle-right"></span>
            </div>
            <div class="prev cursor-pointer">
                <span class="pe-7s-angle-left"></span>
            </div>
        </div>
    </div>
</section>
