    <!-- ==================== Start top ==================== -->

    <header class="pages-header bg-img valign parallaxie" data-background="{{Voyager::image(setting('services.services_background'))}}" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1>{{$pages['service']->title}}</h1>

                        <div class="path">
                            <a href="{{route('home')}}">Accueil</a>
                            <span>/</span>
                            <a href="{{route('services')}}" class="active">{{$pages['service']->title}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- ==================== End top ==================== -->