<section class="blog-pg section-padding pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="posts">
                    @foreach($posts as $post)
                    <div class="item mb-80">
                        <div class="img">
                            <a href="{{route('blog.single',$post->slug)}}">
                                <img src="{{$post->photo}}" alt="{{$post->title}}">
                            </a>
                        </div>
                        <div class="content">
                            <div class="row">
                                <div class="col-10">
                                    <a href="{{route('blog.single',$post->slug)}}" class="date">
                                        {!! $post->full_date_single !!}
                                    </a>
                                    <div class="tags">

                                        @foreach($post->tags as $tag)
                                          <a href="{{route('tags.single',$tag->slug)}}">{{$tag->name}}</a>
                                         @endforeach
 
                                    </div>
                                    <h4 class="title"><a href="{{route('blog.single',$post->slug)}}">{{$post->title}}</a></h4>
                                    <p>
                                        {!! $post->excerpt !!}
                                    </p>
                                    <a href="{{route('blog.single',$post->slug)}}" class="simple-btn mt-30">Lire Plus</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
    
                    <div class="pagination">
                        {{$posts->links('vendor.pagination.haymacproduction')}}
                        {{--<span class="active"><a href="#0">1</a></span>
                        <span><a href="#0">2</a></span>
                        <span><a href="#0"><i class="fas fa-angle-right"></i></a></span>--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>