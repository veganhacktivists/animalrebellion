<!-- Modal -->
<div class="modal fade" id="resourceModal-{{$item->id}}" tabindex="-1" role="dialog" aria-labelledby="resourceModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="resourceModalLabel">{{$item->title}}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

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

        <div class="resource-type">
          <p><b>Resource Type:</b> <span class="badge badge-dark type-badges">{{ $item->item_type->name }}</span></p>
        </div>

        <div class="resource-tags">
          @if(count($item->tags) > 0)
          <p><b>Resource Tags:</b>
            @foreach($item->tags as $tag)
            <span class="badge badge-pill badge-dark tag-badges">{{ $tag->name }}</span>
            @endforeach
          </p>
          @endif
        </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
