<div>
  <div>
    {{ $formInput->name }} @if ($formInput->required) * @endif
  </div>

  <div class="form-check">
    <input class="form-check-input" type="radio" name="{{ $formInput->formName }}" id="exampleRadios1" value="yes">
    <label class="form-check-label" for="{{ $formInput->formName }}">
      Yes
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="{{ $formInput->formName }}" id="exampleRadios2" value="no">
    <label class="form-check-label" for="{{ $formInput->formName }}">
      No
    </label>
  </div>
</div>
