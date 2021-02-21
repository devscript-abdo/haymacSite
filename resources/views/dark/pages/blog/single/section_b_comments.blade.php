<div class="comments-area">
    <h5>commentaires :</h5>
    @foreach($post->comments as $comment)
        <div class="item">
            <div class="comment-img">
                <img src="{{Voyager::image(setting('commenter.commenter_image'))}}" alt="{{$comment->name}}">
            </div>
            <div class="info">
                <h6>{{$comment->name}} - {!! $comment->full_date !!}</h6>
                {{--<span class="replay"><a href="#0">Replay <i class="fas fa-reply"></i></a></span>--}}
                <p>{{$comment->commenter}}</p>
            </div>
        </div>
    @endforeach

    {{--<div class="item relped">
        <div class="comment-img">
            <img src="{{asset('img/blog/01.jpg')}}" alt="">
        </div>
        <div class="info">
            <h6>Jorden Griffin - <span> 6 Aug 2019</span></h6>
            <span class="replay"><a href="#0">Replay <i class="fas fa-reply"></i></a></span>
            <p>the main component of a healthy environment for self esteem is that it needs
                be nurturing. The main compont of a healthy environment.</p>
        </div>
    </div>--}}

</div>