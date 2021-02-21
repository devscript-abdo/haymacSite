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