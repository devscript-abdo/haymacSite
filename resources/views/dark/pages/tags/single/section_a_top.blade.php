
    <header class="pages-header bg-img valign parallaxie" data-background="{{Voyager::image(setting('site.default_background'))}}" data-overlay-dark="5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="cont text-center">
                        <h1>{{setting('tags.tags_title')}}</h1>
                        <div class="path">
                            <a href="{{route('home')}}">Acceuil</a>
                            <span>/</span>
                            <a href="{{route('tags')}}">Tags</a>
                            <span>/</span>
                            <a href="{{route('tags.single',$tag->slug)}}" class="active">{{$tag->name}}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>