<div id="{{$item->id}}" class="card resource-card">
  <h5 class="card-header">{{ $item->title }}</h5>

  <div class="card-body">
    @if(!empty($item->blurb))
    <p class="card-text">{{ $item->blurb }}</p>
    @endif

    <div class="text-right">
      <!-- Button trigger modal -->
      <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#resourceModal-{{$item->id}}">
        Learn More
      </button>
    </div>
  </div>

  <div class="card-footer text-muted">
    <span class="badge badge-dark type-badges">{{ $item->item_type->name }}</span>
    @if(count($item->tags) > 0)
    @foreach($item->tags as $tag)
    <span class="badge badge-pill badge-dark tag-badges">{{ $tag->name }}</span>
    @endforeach
    @endif
  </div>
</div>
