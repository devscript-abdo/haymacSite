
<section class="clients section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 valign">
                <div class="sec-head custom-font mb-0">
                    <h6>{{setting('tags.tags_title')}}</h6>
                    <h3>{!!setting('tags.tags_title')!!}</h3>
                </div>
            </div>
            <div class="col-lg-8">
                <div>
                    <div class="row bord">
                        @foreach($tags as $tag)
                            <div class="col-md-3 col-6 brands">
                                <div class="item wow fadeIn" data-wow-delay=".3s">
                                    <div class="img">
                                        <img src="{{$tag->default_logo}}" alt="{{$tag->seo_description}}">
                                        <a  href="{{route('tags.single',$tag->slug)}}" class="link" data-splitting>
                                            {{$tag->name}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
  
                </div>
            </div>
        </div>
    </div>
</section>