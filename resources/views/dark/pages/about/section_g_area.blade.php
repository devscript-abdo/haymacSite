
<section class="min-area sub-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="img">
                    <img class="thumparallax-down" src="{{Voyager::image(setting('about.about_section_image'))}}" alt="{{setting('about.about_section_title')}}">
                </div>
            </div>
            <div class="col-lg-6 valign">
                <div class="content">
                    <h4 class="wow custom-font" data-splitting>{{setting('about.about_section_title')}}</h4>
                    <p class="wow txt" data-splitting>{{setting('about.about_section_description')}}
                    </p>
                  {!! setting('about.about_section_list') !!}
                </div>
            </div>
        </div>
    </div>
</section>