
    <header class="pages-header bg-img valign parallaxie" data-background="{{Voyager::image(setting('about.about_image'))}}" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1>{{setting('tags.tags_title')}}</h1>
                        <div class="path">
                            <a href="{{route('home')}}">Acceuil</a>
                            <span>/</span>
                            <a href="{{route('tags')}}" class="active">{{setting('tags.tags_title')}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>