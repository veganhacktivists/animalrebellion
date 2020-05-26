<div class="card resource-card">
  <h5 class="card-header">{{ $item->title }}</h5>
  <div class="card-body">
    <p class="card-text">{{ $item->blurb }}</p>
  </div>

  @if(count($item->tags) > 0)
    <div class="card-footer text-muted">
    @foreach($item->tags as $tag)
      <span class="badge badge-pill badge-dark tag-badges">{{ $tag->name }}</span>
    @endforeach
    </div>
  @endif

</div>
