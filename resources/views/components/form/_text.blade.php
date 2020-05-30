<div class="form-group">
  <label for="{{ $formInput->formName }}">{{ $formInput->name }} @if ($formInput->required) * @endif</label>
  <input type="text" class="form-control" name="{{ $formInput->formName }}"
    @error("{{ $formInput->formName }}")
      <div class="alert alert-danger">{{ $message }}</div>
    @enderror
  >
</div>
