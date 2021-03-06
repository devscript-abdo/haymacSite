
    <section class="services section-padding">
        <div class="container">
            <div class="row">
                @foreach($services as $service)
                    <div class="col-lg-4 mt-2">
                        <div class="item md-mb50 wow fadeInUp" data-wow-delay=".3s">
                            <span class="icon {{$service->icon}}"></span>
                            <h6>{{$service->field('title')}}</h6>
                            <p>{{$service->field('excerpt')}}</p>
                        </div>
                    </div>
                @endforeach

            </div>
        </div>
    </section>