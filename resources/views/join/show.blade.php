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
        GDPR PERMISSION: BY CLICKING "I AGREE" WITHIN THE CHECKBOX BELOW YOU ARE AGREEING TO THE TERMS AND CONDITIONS SET OUT IN OUR PRIVACY POLICY: HTTPS://TINYURL.COM/Y6FQ85K9

        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="gdpr" value="" id="gdpr">
          <label class="form-check-label" for="gdpr">
            I agree
          </label>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Add Your Name</button>
    </form>
    @endif
  </div>
@endsection
