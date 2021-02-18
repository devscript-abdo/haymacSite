
    <section class="team section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 valign">
                    <div class="full-width">
                        <div class="sec-head custom-font mb-0">
                            <h6>{{setting('teams.teams_title_emp')}}</h6>
                            <h3>{{setting('teams.teams_title')}}</h3>
                        </div>
                        <div class="navs mt-30 wow fadeInUp" data-wow-delay=".3s">
                            <span class="prev cursor-pointer">
                                <i class="fas fa-chevron-left"></i>
                            </span>
                            <span class="next cursor-pointer">
                                <i class="fas fa-chevron-right"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="team-container">
                        @foreach($teams as $team)
                            <div class="item wow fadeInUp" data-wow-delay=".3s">
                                <div class="img wow imago" oncontextmenu="return false;">
                                    <img src="{{$team->full_photo}}" alt="{{$team->name}}">
                                </div>
                                <div class="info">
                                    <h5>{{$team->name}}</h5>
                                    <span>{{$team->post}}</span>
                                    <div class="social">
                                        <a href="{{$team->facebook ? $team->facebook : 'https://www.facebook.com/'}}"
                                            target="_blank"
                                        >
                                            <i class="fab fa-facebook-f"></i>
                                        </a>
                                        <a href="{{$team->twitter ? $team->twitter : 'https://www.twitter.com/'}}"
                                           target="_blank"
                                        >
                                            <i class="fab fa-twitter"></i>
                                        </a>

                                        <a href="{{$team->linkedin ? $team->linkedin : 'https://www.linkedin.com/'}}"
                                           target="_blank"
                                        >
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                        <a href="{{$team->website ? $team->website : request()->url()}}"
                                            target="_blank"
                                        >
                                            <i class="fa fa-link" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
          
                    </div>
                </div>
            </div>
        </div>
    </section>