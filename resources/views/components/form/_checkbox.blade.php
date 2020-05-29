<hr>
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="{{ $formInput->formName }}" value="yes" id="{{ $formInput->formName }}">
  <label class="form-check-label" for="{{ $formInput->formName }}">
    {{ $formInput->name }} @if ($formInput->required) * @endif
  </label>
</div>
