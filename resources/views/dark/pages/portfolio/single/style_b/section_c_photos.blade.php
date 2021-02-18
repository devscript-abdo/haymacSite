
<section class="projdtal">
    <div class="justified-gallery">
     @if($project->all_photos)
        @foreach($project->all_photos as $photo)
            <a href=""{{$project->singlePhoto($photo)}}">
                <img alt="{{$project->title}}" src="{{$project->singlePhoto($photo)}}" />
            </a>
        @endforeach
    @endif()
    </div>
</section>