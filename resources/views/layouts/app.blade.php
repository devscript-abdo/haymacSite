<!DOCTYPE html>
<html lang="fr">

<head>

    @include('layouts.parts.metas')
    @include('layouts.parts.links')

    <title>Haymacproduction</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" rel="stylesheet">
   
     @yield('livewireSectionStyle')

    

    @stack('styles')
    
</head>

<body>

     {{--@include('layouts.sections.loader')

     @include('layouts.sections.progress')--}}

     @include('layouts.sections.cursor')

     @include('layouts.sections.__navbar')

    @if(request()->routeIs('home') || request()->routeIs('portfolio') || request()->routeIs('contact'))
    
        @yield('contentSlider')

        <div class="main-content">

            @yield('content')

            @include('layouts.sections.footer')

        </div>

    @else

        @yield('content')

        @include('layouts.sections.footer')

     @endif   
     
    <script src="{{asset('js/app.js')}}"></script>

   

    @yield('livewireSectionScript')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    @include('layouts.parts.__eventerScript')
    
    @stack('eventer')

    <script>
        let = searcher = document.getElementById('haymacSearch');

        searcher.addEventListener("click", function(){

            window.location = '{{route('search')}}';
        });
    </script>

</body>
<!--Elmarzougui Abdelghafour  Haymacproduction 2021-->
</html>