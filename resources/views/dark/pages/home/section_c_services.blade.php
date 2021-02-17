<!-- ==================== Start Services ==================== -->
<section class="services">
    <div class="container">
        <div class="sec-head custom-font text-center">
            {{--<h6 class="wow fadeIn" data-wow-delay=".5s">Best Features</h6>--}}
            <h3 class="wow" data-splitting>{{__('home.our_services')}}</h3>
            <span class="tbg">Services</span>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6 item-box bg-img wow fadeInLeft" data-wow-delay=".3s"
                data-background="{{asset('img/1.jpg')}}">
                <h4 class="custom-font">{{__('home.our_services_features')}}</h4>
                <a href="{{route('services')}}" class="btn-curve btn-bord btn-lit mt-40">
                    <span>{{__('buttons.allservices')}}</span>
                </a>
            </div>
            @foreach($services as $service)
                <div class="col-lg-3 col-md-6 item-box wow fadeInLeft" data-wow-delay=".{{$loop->index+2}}s">
                    <span class="icon {{$service->icon}}"></span>
                    <h6>{{$service->field('title')}}</h6>
                    <p>{{$service->field('excerpt')}}</p>
                </div>
            @endforeach
        </div>
    </div>
    <div class="half-bg bottom"></div>
</section>

<!-- ==================== End Services ==================== -->