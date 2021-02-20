        <!-- ==================== Start Contact ==================== -->

        <section class="contact section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form md-mb50">

                            <h4 class="extra-title mb-50">{{setting('contact.contact_form_title')}}</h4>

                            @livewire('contact.contact')
                            
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <div class="cont-info">
                            <h4 class="extra-title mb-50">{{setting('contact.contact_form_info')}}</h4>
                            {{--<h3 class="custom-font wow" data-splitting>Let's Talk.
                            </h3>--}}
                            <div class="item mb-40">
                                @php 
                                    $email = explode('@',setting('contact.contact_email'));
                                    $domain = explode('.',$email[1]);
                                //  dd($email,$domain);
                                @endphp
                                <h5>
                    
                                    <a href="#" class="cryptedmail"
                                        data-name="{{$email[0]}}"
                                        data-domain="{{$domain[0]}}"
                                        data-tld="{{$domain[1]}}"
                                        onclick="window.location.href = 'mailto:' + this.dataset.name + '@' + this.dataset.domain + '.' + this.dataset.tld; return false;">
                                    
                                    </a>
                                </h5>
                                <h5> {{setting('contact.contact_tele')}}</h5>
                            </div>
                            <h3 class="custom-font wow" data-splitting>
                                Adresse
                            </h3>
                            <div class="item">
                                <h6>{{setting('contact.contact_adresse')}}</h6>
                            </div>
                            <div class="social mt-50">
                                <a href="{{setting('contact.contact_facebook')}}" class="icon">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="{{setting('contact.contact_twitter')}}" class="icon">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a href="{{setting('contact.contact_linkedin')}}" class="icon">
                                    <i class="fab fa-linkedin"></i>
                                </a>
                                <a href="{{setting('contact.contact_instagram')}}" class="icon">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- ==================== End Contact ==================== -->