
<section class="clients section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 valign">
                <div class="sec-head custom-font mb-0">
                    <h6>{{setting('clients.clients_title')}}</h6>
                    <h3>{!!setting('clients.clients_title_our')!!}</h3>
                </div>
            </div>
            <div class="col-lg-8">
                <div>
                    <div class="row bord">
                        @foreach($clients as $client)
                            <div class="col-md-3 col-6 brands">
                                <div class="item wow fadeIn" data-wow-delay=".3s">
                                    <div class="img">
                                        <img src="{{$client->default_logo}}" alt="{{$client->seo_description}}">
                                        <a  href="#" class="link" data-splitting>
                                            {{$client->name}}
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                   {{--<div class="row">
                        <div class="col-md-3 col-6 brands">
                            <div class="item wow fadeIn" data-wow-delay=".4s">
                                <div class="img">
                                    <img src="img/clients/brands/05.png" alt="">
                                    <a href="#0" class="link" data-splitting>www.avo.com</a>
                                </div>
                            </div>
                        </div>
        
                    </div>--}}
                </div>
            </div>
        </div>
    </div>
</section>
