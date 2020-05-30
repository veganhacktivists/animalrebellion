<hr>
<div class="form-check">
  <input class="form-check-input @error($formInput->formName) is-invalid @enderror" type="checkbox" name="{{ $formInput->formName }}" value="yes" id="{{ $formInput->formName }}">
  <label class="form-check-label" for="{{ $formInput->formName }}">
    {{ $formInput->name }} @if ($formInput->required) * @endif
  </label>
  @error($formInput->formName)
    <div class="invalid-feedback">You must agree to submit a response</div>
  @enderror
</div>
