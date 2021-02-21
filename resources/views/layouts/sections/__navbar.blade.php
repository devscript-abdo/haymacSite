
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="logo" href="{{route('home')}}">
 
            <img src="{{Voyager::image(setting('site.logo'))}}" alt="haymacproduction logo">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"><i class="fas fa-bars"></i></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                {{--@include('layouts.sections.__navDropdown')--}}
                <li class="nav-item">
                    <a class="nav-link" href="{{route('home')}}">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('about')}}">L’agence</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('services')}}">Nos services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('portfolio')}}">Portfolio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('solutions')}}">Nos solutions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blog')}}">Blog et actualitée</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contactez nous</a>
                </li>
              {{--@include('layouts.sections.__language')--}}
            </ul>
            <div class="search">
                <span class="icon pe-7s-search cursor-pointer" id="haymacSearch"></span>
                    
                {{--@livewire('search.search')--}}
            </div>
        </div>
    </div>
</nav>