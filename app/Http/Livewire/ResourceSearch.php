<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Livewire\Component;
use Livewire\WithPagination;

class ResourceSearch extends Component
{
    use WithPagination;

    public $searchTerm;

    public function updatingSearchTerm()
    {
        $this->gotoPage(1);
    }

    public function render()
    {
        return view('livewire.resource-search', [
            'items' => Item::where('title', 'like', '%'.$this->searchTerm.'%')->orWhere('blurb', 'like', '%'.$this->searchTerm.'%')->paginate(10),
        ]);
    }
}
