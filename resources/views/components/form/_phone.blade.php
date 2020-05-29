<div class="form-group">
  <label for="{{ $formInput->formName }}">{{ $formInput->name }} @if ($formInput->required) * @endif</label>
  <input type="phone" class="form-control" name="{{ $formInput->formName }}">
</div>
