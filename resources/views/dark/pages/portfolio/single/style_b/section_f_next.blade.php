


    <section class="next-prog section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="box">
                            <div class="bg-img valign" data-background="{{$project->singlePhoto($project->logo)}}"
                                data-overlay-dark="4">
                                <div class="caption ontop valign">
                                    <div class="o-hidden full-width">
                                        <h1>
                                            <a href="{{route('portfolio.single',$project->slug)}}">
                                                <div class="stroke">{{$project->title}}</div>
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                                <div class="copy-cap valign">
                                    <div class="cap full-width">
                                        <h1>
                                            <a href="{{route('portfolio.single',$project->slug)}}">
                                                <span>{{$project->title}}</span>
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>