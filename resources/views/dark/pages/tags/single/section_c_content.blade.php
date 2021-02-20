<section class="services section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 valign">
                <div class="sec-head custom-font mb-0">
                    <h6>{{setting('portfolio.portfolio_title')}}</h6>
                    <h3>{!!setting('portfolio.portfolio_title')!!}</h3>
                </div>
            </div>
            @foreach($tag->projects as $project)
                <div class="col-lg-4 mt-2">
                    <div class="item md-mb50 wow fadeInUp" data-wow-delay=".3s">
                        <span>
                            {{--<img src="{{$project->first_photo}}" alt="{{$project->title}}">--}}
                        </span>
                        <h6>
                            <a href="{{route('portfolio.single',$project->slug)}}">
                                {{$project->title}}
                            </a>
                        </h6>
                        {{--<p>{{$project->excerpt}}</p>--}}
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>