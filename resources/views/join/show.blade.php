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

      <button></button>
    </form>
    @endif
  </div>
@endsection
