
<section class="work-carousel section-padding pt-0 metro position-re">
    <div class="container ontop">
        <div class="row">
            <div class="col-lg-12 no-padding">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        @foreach($projects as $project)
                           {{-- @php
                                $images = json_decode($project->photos);
                               // dd(array_shift($images))
                            @endphp--}}
                            <div class="swiper-slide">
                                <div class="content wow noraidus fadeInUp" data-wow-delay=".3s">
                                    <div class="item-img bg-img wow imago"
                                        data-background="{{$project->first_photo}}">
                                    </div>
                                    <div class="cont">
                                        <h6>
                                            <a href="{{route('home')}}">
                                              {{$project->category->name}}
                                            </a>
                                        </h6>
                                        <h4>
                                            <a href="{{route('portfolio.single',$project->slug)}}">
                                                {{$project->field('title')}}
                                            </a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <!-- slider setting -->
                    <div class="swiper-button-next swiper-nav-ctrl simp-next cursor-pointer">
                        <span class="simple-btn right">Suivante</span>
                    </div>
                    <div class="swiper-button-prev swiper-nav-ctrl simp-prev cursor-pointer">
                        <span class="simple-btn">Précédente</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="half-bg top"></div>
</section>