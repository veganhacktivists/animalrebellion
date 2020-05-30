<!-- field_type_name -->
<div @include('crud::inc.field_wrapper_attributes') >
  <label>{!! $field['label'] !!}</label>
  @if (isset($field['value']))
    @foreach($field['value'] as $key => $value)
      <div>
        <strong>{{ $key }}:</strong> {{ $value }}
      </div>
    @endforeach
  @endif
  {{-- HINT --}}
  @if (isset($field['hint']))
    <p class="help-block">{!! $field['hint'] !!}</p>
  @endif
</div>
