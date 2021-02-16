<!DOCTYPE html>
<html lang="fr">

<head>

     @include('layouts.parts.metas')
    {{--@include('layouts.parts.links')--}}

    <!-- Title  -->
    <title>Haymacproduction</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}" />

</head>

<body>

     @include('layouts.sections.loader')

     @include('layouts.sections.progress')

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

</body>
<!--Elmarzougui Abdelghafour  Haymacproduction 2021-->
</html>