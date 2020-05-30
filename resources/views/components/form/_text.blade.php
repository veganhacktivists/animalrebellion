<div class="form-group">
  <label for="{{ $formInput->formName }}">{{ $formInput->name }} @if ($formInput->required) * @endif</label>

  <input type="text" class="form-control @error($formInput->formName) is-invalid @enderror" name="{{ $formInput->formName }}"
    @error($formInput->formName) required @enderror
  >

  @error($formInput->formName)
    <div class="invalid-feedback">This field is required</div>
  @enderror
</div>
