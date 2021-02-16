    <!-- ==================== Start about ==================== -->
    <section class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 valign">
                    <div class="content">
                        <div class="sub-title">
                            <h6>{{$pages['about']->title}}</h6>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <h3 class="co-tit custom-font wow" data-splitting>
                            Our 20 years working experience make a
                            different business agency
                            services.
                        </h3>
                        <p class="wow fadeInUp" data-wow-delay=".4s">
                          {{$pages['about']->excerpt}}
                        </p>
                        {{--<p class="mt-10 wow fadeInUp" data-wow-delay=".4s">
                            Nulla metus metus ullamcorper vel tincidunt
                        </p>--}}
                        <a href="#0" class="simple-btn custom-font mt-30 wow" data-splitting>
                            <span>Know More</span>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="blc-img">
                        <div class="bimg wow imago">
                            <img src="{{Voyager::image($pages['about']->image)}}" alt="{{$pages['about']->title}}">
                        </div>
                        <div class="skills-circle wow fadeInUp" data-wow-delay=".8">
                            <div class="item">
                                <div class="skill" data-value="0.9">
                                    <span class="custom-font">90%</span>
                                </div>
                                <div class="cont">
                                    <span>Project</span>
                                    <h6>Consulting</h6>
                                </div>
                            </div>
                            
                            <div class="item">
                                <div class="skill" data-value="0.75">
                                    <span class="custom-font">75%</span>
                                </div>
                                <div class="cont">
                                    <span>App</span>
                                    <h6>Development</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ==================== End about ==================== -->