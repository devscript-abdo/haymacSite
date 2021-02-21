<?php

namespace App\Http\Livewire\Search;

use App\Services\SearchService;
use Livewire\Component;

class Search extends Component
{

    public $query;

    public $results;

    public function render()
    {
        return view('livewire.search.search', ['results' => $this->results]);
    }

    public function submit(SearchService $service)
    {
        //dd($this->query);
        $this->results = $service->execute('runSearcher', $this->query);
    }
}
