<div class="form-group">
  <label for="{{ $formInput->formName }}">{{ $formInput->name }} @if ($formInput->required) * @endif</label>
  @error($formInput->formName)
    <div class="alert alert-danger">This field is required</div>
  @enderror

  <input type="email" class="form-control" name="{{ $formInput->formName }}">
</div>
