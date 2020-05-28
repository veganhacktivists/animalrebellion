<div>

  <div class="row mb-5">
    <div class="col-8 mx-auto">
      <input type="text" wire:model="searchTerm" />
    </div>
  </div>

  <div class="row">
    <div class="card-columns">
      @foreach($items as $item)
        @include('components._resource_card', ['item' => $item])
      @endforeach
    </div>
  </div>

  <div class="row">
    <div class="pagination-links mx-auto">
      {{ $items->links() }}
    </div>
  </div>

</div>
