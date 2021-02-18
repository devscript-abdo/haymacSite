    
<section class="page-header proj-det bg-img parallaxie valign" 
    data-background="{{Voyager::image(setting('portfolio.portfolio_default_background'))}}"
    data-overlay-dark="4"
>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-9">
                        <div class="cont">
                            {{--<h6>art & illustration</h6>--}}
                            <h2>{{$project->title}}</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3">
                        <div class="item mt-30">
                            <h6>Client</h6>
                            <p> 
                                <a href="{{$project->site_url ? $project->site_url : request()->url()}}" target="_blank">
                                 {{$project->client_name}}
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="item mt-30">
                            <h6>date de réalisation</h6>
                            {!! $project->full_date !!}
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="item mt-30">
                            <h6>catégorie</h6>
                            <p><a href="#0">{{$project->category->name}} </a></p>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="item mt-30">
                            <h6>Tags</h6>
                            <p>
                                @foreach($project->tags as $tag)
                                <a href="{{route('tags.single',$tag->slug)}}">{{$tag->name}}</a>
                                 {{! $loop->last ? ',':''}}
                               @endforeach
                            </p>
                        </div>
                    </div>
                </div>
            </div>
</section>