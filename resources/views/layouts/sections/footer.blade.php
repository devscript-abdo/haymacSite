<!-- ==================== Start Footer ==================== -->

<footer class="footer-half sub-bg section-padding pb-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-5">
                <div class="cont">
                    <div class="logo">
                        <a href="{{route('home')}}">
                            <img src="{{Voyager::image(setting('site.logo'))}}" alt="Haymacproduction">
                        </a>
                    </div>
                    <div class="con-info custom-font">
                        <ul>
                            {{--<li><span>Email : </span> Avo_support@website.com</li>--}}
                            <li><span>Adresse : </span> {{setting('contact.contact_adresse')}}
                            </li>
                            <li><span>Tél : </span>  {{setting('contact.contact_tele')}}</li>
                        </ul>
                    </div>
                    <div class="social-icon">
                        <h6 class="custom-font stit simple-btn">Suivez nous</h6>
                        <div class="social">
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
            <div class="col-lg-5 offset-lg-2">
                <div class="subscribe mb-50">
                    <h6 class="custom-font stit simple-btn">newsletter</h6>
                    <p>Inscrivez-vous à la newsletter!</p>
                      @livewire('subscribe.subscribe')
                </div>
                <div class="insta">
                    <h6 class="custom-font stit simple-btn">Instagram Post</h6>
                    <div class="insta-gallary">
                        <a href="#0">
                            <img src="{{asset('img/insta/1.jpg')}}" alt="">
                        </a>
                        <a href="#0">
                            <img src="{{asset('img/insta/2.jpg')}}" alt="">
                        </a>
                        <a href="#0">
                            <img src="{{asset('img/insta/3.jpg')}}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyrights text-center">
            <p>© 2021, HayMacProduction. Made with passion by <a href="{{route('home')}}">HayMacProduction</a>.</p>
        </div>
    </div>
</footer>