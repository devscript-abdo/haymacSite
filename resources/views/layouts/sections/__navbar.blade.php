
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
                    <a class="nav-link" href="{{route('home')}}">Nos solutions</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('blog')}}">Blog et actualitée</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('contact')}}">Contactez nous</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" 
                    data-toggle="dropdown" href="#" role="button"
                        aria-haspopup="true" aria-expanded="false">Language</a>
                    <div class="dropdown-menu">
                        @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                            <a 
                              rel="alternate" 
                              hreflang="{{ $localeCode }}" 
                              href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}"
                              class="dropdown-item" 
                            >
                              {{ $properties['native'] }}
                            </a>
                        @endforeach
                    </div>
                </li>
            </ul>
            <div class="search">
                <span class="icon pe-7s-search cursor-pointer"></span>
                <div class="search-form text-center custom-font">
                    <form>
                        <input type="text" name="search" placeholder="Search">
                    </form>
                    <span class="close pe-7s-close cursor-pointer"></span>
                </div>
            </div>
        </div>
    </div>
</nav>

<!-- ==================== End Navbar ==================== -->