<div class="form-group">
  <label for="{{ $formInput->formName }}">{{ $formInput->name }} @if ($formInput->required) * @endif</label>
  @error($formInput->formName)
    <span class="alert alert-danger">This field is required</span>
  @enderror
  <input type="text" class="form-control" name="{{ $formInput->formName }}"
         @if($formInput->required) required @endif
  >
</div>
