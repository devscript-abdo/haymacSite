
<section class="blog-pg single section-padding pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11">
                <div class="post">
                    <div class="img">
                        <img src="{{$post->photo}}" alt="{{$post->title}}">
                    </div>
                    <div class="content pt-20">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="cont">
                                    {{--<div class="spacial">
                                        <p>Never ever think of giving up. Winners never quit and quitters never
  
                                        </p>
                                    </div>--}}
                                    <p>
                                        {!! $post->body !!}
                                    </p>

                                    {{--<h6>- We all intend to plan ahead.</h6>

                                    <ul>
                                        <li><span>01</span> Integer in volutpat libero.</li>
                                    </ul>--}}

                                    {{--<div class="quotes text-center">
                                        <p>Never ever think of giving up. Winners never quit and quitters never
                                            win. Take all negative words out of your mental dictionary and focus
                                            on the solutions with utmost conviction and patience. The battle is
                                            never lost until you’ve abandon your vision.</p>
                                    </div>--}}
                                    {{--<div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-10">
                                                <img src="{{asset('img/blog/single.jpg')}}" alt="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-10">
                                                <img src="{{asset('img/blog/single.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>--}}
                                    <div class="share-info">
                                        <div class="social">
                                            <a href="#0"><i class="fab fa-facebook-f"></i></a>
                                            <a href="#0"><i class="fab fa-twitter"></i></a>
                                            <a href="#0"><i class="fab fa-behance"></i></a>
                                        </div>
                                        <div class="tags">
                                            @foreach($post->tags as $tag)
                                                <a href="{{route('tags.single',$tag->slug)}}">{{$tag->name}}</a>
                                                {{! $loop->last ? ',':''}}
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                              {{--@include('dark.pages.blog.single.section_b_author')--}}
                            </div>
                        </div>
                    </div>

                    @include('dark.pages.blog.single.section_b_pagination')

                    @include('dark.pages.blog.single.section_b_comments')

                    {{--@include('dark.pages.blog.single.section_b_comments_form')--}}
    
                    @livewire('comment.comments', ['post' => $post])
                </div>
            </div>
        </div>
    </div>
</section>