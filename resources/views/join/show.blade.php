@extends('layouts.app')

@section('title')
  {{ $joinPage->title }}
@endsection

@section('content')
  <div class="container">
    <h1 class="h1 mb-4">{{ $joinPage->header }}</h1>

    <p>{!!  nl2br($joinPage->content) !!}</p>

    @if($joinPage->formInputs->count() > 0)
    <form action="/join-responses" method="POST">
      @csrf

      <input type="hidden" name="page_id" value="{{ $joinPage->id }}">

      @foreach($joinPage->formInputs as $formInput)
        @include('components.form._'.$formInput->type, ['formInput' => $formInput])
      @endforeach

      <div>
        <hr>
        GDPR PERMISSION: BY CLICKING "I AGREE" WITHIN THE CHECKBOX BELOW YOU ARE AGREEING TO THE TERMS AND CONDITIONS SET OUT IN OUR <a href="/privacy" target="_blank">PRIVACY POLICY</a>

        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="has_gdpr_consent" value="yes" id="has_gdpr_consent" required>
          <label class="form-check-label" for="has_gdpr_consent">
            I agree
          </label>
        </div>
        @error('has_gdpr_consent')
          <div class="invalid-feedback">You must agree to submit a response</div>
        @enderror
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    @endif
  </div>
@endsection
