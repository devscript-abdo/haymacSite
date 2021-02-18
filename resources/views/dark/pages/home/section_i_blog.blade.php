
<section class="blog-curs section-padding sub-bg">
    <div class="container">
        <div class="sec-head custom-font text-center">
            <h6 class="wow fadeIn" data-wow-delay=".5s">{{setting('blog.blog_latest')}}</h6>
            <h3 class="wow" data-splitting>{{setting('blog.blog_title')}}</h3>
            <span class="tbg">Blogs</span>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="blg-swipe wow fadeInUp" data-wow-delay=".5s">
                   @foreach($posts as $post)
                    <div class="item-box">
                        <div class="item">
                            <div class="bimg">
                                <div class="img bg-img" data-background="{{$post->photo}}"></div>
                            </div>
                            <div class="cont valign">
                                <div class="full-width">
                                    <div class="info custom-font">
                                        <a href="#0" class="author">
                                            <span>by / Admin</span>
                                        </a>
                                        <a href="{{route('blog.single',$post->slug)}}" class="date">
                                            {!! $post->full_date !!}
                                        </a>
                                    </div>
                                    <h6 class="custom-font">
                                        <a href="{{route('blog.single',$post->slug)}}">{{$post->title}}</a>
                                    </h6>
                                    <div class="btn-more custom-font">
                                        <a href="{{route('blog.single',$post->slug)}}" class="simple-btn">Lire plus</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   @endforeach
            
                </div>
            </div>
        </div>
    </div>
</section>
