<div>

  <div class="row mb-5">
    <div class="col-6 mx-auto">
      <form>
        <div class="form-group">
          <label for="resource-search-bar">Search Resources</label>
          <input id="resource-search-bar" class="form-control" type="text" wire:model.debounce.200ms="searchTerm" />
          <small id="search-help" class="form-text text-muted">Search for resources by title, description, type, or tag.</small>
        </div>
      </form>
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
