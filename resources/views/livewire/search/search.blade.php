<div>
    
    <div class="comment-form">
        <h1>Que cherchez vous ?</h1>
        <div class="form">
            <form action="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <input 
                                type="text"
                                placeholder=""
                                wire:model.defer="query"
                                name="query"
                            >

                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <button class="btn-curve btn-color btn-lg"
                              wire:click.prevent="submit()"
                             >
                             <span>cherchez</span>
                           </button>
                               
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="comments-area">
        
         @if($results) 
            nous avons trouvé {{ $results->count() }} résultats.
                @foreach($results->groupByType() as $type => $modelSearchResults)
                    <h2>{{ $type }}</h2>
                
                    @foreach($modelSearchResults as $searchResult)
                
                        <div class="item">
                            @if($searchResult->searchable->first_photo)
                                <div class="comment-img">
                                    <img src="{{$searchResult->searchable->first_photo}}" alt="{{ $searchResult->title }}">
                                </div>
                            @endif
                            @if($searchResult->searchable->photo)
                                <div class="comment-img">
                                    <img src="{{$searchResult->searchable->photo}}" alt="{{ $searchResult->title }}">
                                </div>
                            @endif
                            <div class="info">
                                <h6>
                                    <a href="{{ $searchResult->url }}">{{ $searchResult->title }}</a>
                                </h6>
                                <p>{{$searchResult->searchable->excerpt}}</p>
                            </div>
                        </div>
                    @endforeach
                @endforeach
        @endif
    </div>
</div>
