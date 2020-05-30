<div class="form-group">
  @error($formInput->formName)
    <div class="invalid-feedback">This field is required</div>
  @enderror

  <label for="{{ $formInput->formName }}">{{ $formInput->name }} @if ($formInput->required) * @endif</label>
  <input type="tel" class="form-control" name="{{ $formInput->formName }}"
     @if($formInput->required) required @endif
  >
</div>
