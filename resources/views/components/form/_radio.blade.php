<div>
  <div>
    {{ $formInput->name }} @if ($formInput->required) * @endif
  </div>

  <div class="form-check">
    <input class="form-check-input" type="radio" name="{{ $formInput->formName }}" id="{{ $formInput->formName }}-1" value="yes">
    <label class="form-check-label" for="{{ $formInput->formName }}-1">
      Yes
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="{{ $formInput->formName }}" id="{{ $formInput->formName }}-2" value="no">
    <label class="form-check-label" for="{{ $formInput->formName }}-2">
      No
    </label>
  </div>
</div>
