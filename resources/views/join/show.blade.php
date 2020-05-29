@extends('layouts.app')

@section('title')
  {{ $joinPage->title }}
@endsection

@section('content')
  <div class="container">
    <h1 class="h1 mb-4">{{ $joinPage->header }}</h1>

    <p>{!!  nl2br($joinPage->content) !!}</p>

    @if($joinPage->formInputs->count() > 0)
    <div class="row justify-content-around">

      @foreach($joinPage->formInputs as $formInput)
        @include('components.form._'.$formInputs->type, ['formInput' => $formInput])
      @endforeach

    </div>
    @endif
  </div>
@endsection
