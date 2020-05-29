<?php

namespace App\Http\Livewire;

use App\Models\Item;
use Illuminate\Database\Eloquent\Builder;
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
        $items = Item::query()
        ->when($this->searchTerm, function (Builder $query) {
            return $query->where('title', 'like', '%'.$this->searchTerm.'%')
                        ->orWhere('blurb', 'like', '%'.$this->searchTerm.'%')
                        ->orWhereHas('tags', function (Builder $query) {
                            $query->where('name', 'like', '%'.$this->searchTerm.'%');
                        })
                        ->orWhereHas('item_type', function (Builder $query) {
                            $query->where('name', 'like', '%'.$this->searchTerm.'%');
                        });
        })
        ->paginate(10);

        return view('livewire.resource-search', ['items' => $items]);
    }
}
