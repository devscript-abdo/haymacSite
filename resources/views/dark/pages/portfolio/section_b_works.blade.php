
      <section class="portfolio section-padding pb-70">
        <div class="container">
            <div class="gallery full-width">

                @foreach($projects as $project)
                    <div class="col-md-6 items brand lg-mr">
                        <div class="item-img wow fadeInUp" data-wow-delay=".4s">
                            <a href="{{route('portfolio.single',$project->slug)}}">
                                <img src="{{$project->first_photo}}" alt="{{$project->title}}">

                            </a>
                        </div>
                        <div class="cont">
                            <h6>{{$project->title}}</h6>
                            <span>
                                @foreach($project->tags as $tag)
                                 <a href="{{route('tags.single',$tag->slug)}}">{{$tag->name}}</a>
                                  {{! $loop->last ? ',':''}}
                                @endforeach
                                
                            </span>
                        </div>
                    </div>
                @endforeach


            </div>

        </div>
    </section>