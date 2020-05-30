<hr>
<div class="form-check">
  <input class="form-check-input" type="checkbox" name="{{ $formInput->formName }}" value="yes" id="{{ $formInput->formName }}">
  <label class="form-check-label" for="{{ $formInput->formName }}">
    {{ $formInput->name }} @if ($formInput->required) * @endif
  </label>
  @error($formInput->formName)
    <span class="alert alert-danger">This field is required</span>
  @enderror
</div>
