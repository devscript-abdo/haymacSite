
        <section class="call-action section-padding sub-bg bg-img" data-background="{{Voyager::image(setting('talks.talk_image'))}}">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-9">
                        <div class="content sm-mb30">
                            <h6 class="wow" data-splitting>{{setting('talks.talk_title')}}</h6>
                            <h2 class="wow custom-font" data-splitting>{!!setting('talks.talk_title_grand')!!}</h2>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 valign">
                        <a href="{{setting('talks.talk_btn_route')}}" class="btn-curve btn-lit wow fadeInUp" data-wow-delay=".5s">
                            <span>
                              {{setting('talks.talk_title_btn')}}
                            </span>
                        </a>
                    </div>

                </div>
            </div>
        </section>