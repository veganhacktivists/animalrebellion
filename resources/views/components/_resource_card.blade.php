<div class="card resource-card">
  <h5 class="card-header">{{ $item->title }}</h5>

  <div class="card-body">
    <div class="resource-blurb">
      @if (!empty($item->blurb))
      <p>{{$item->blurb}}</p>
      @endif
    </div>

    <div class="resource-links">
      <div class="resource-link">
        <a href="{{$item->url}}" target="_blank">Link to {{ $item->title }}</a>
      </div>

      <div class="resource-source">
        @if (!empty($item->source))
        <a href="{{$item->source}}" target="_blank">Link to source</a>
        @endif
      </div>
    </div>

    <div class="resource-publication-date">
      @if (!empty($item->publication_date))
      <p><b>Publication Date:</b> {{$item->publication_date}}</p>
      @endif
    </div>

    <div class="resource-primary-author">
      @if (!empty($item->primary_author))
      <p><b>Primary Author:</b> {{$item->primary_author}}</p>
      @endif
    </div>

    <div class="resource-secondary-author">
      @if (!empty($item->secondary_author))
      <p><b>Secondary Author:</b> {{$item->secondary_author}}</p>
      @endif
    </div>
  </div>

  <div class="card-footer text-muted">
    <div class="resource-type">
      <p><b>Type:</b> <span class="badge badge-dark type-badges">{{ $item->item_type->name }}</span></p>
    </div>

    <div class="resource-tags">
      @if(count($item->tags) > 0)
      <p><b>Tags:</b>
        @foreach($item->tags as $tag)
        <span class="badge badge-pill badge-dark tag-badges">{{ $tag->name }}</span>
        @endforeach
      </p>
      @endif
    </div>
  </div>

</div>
