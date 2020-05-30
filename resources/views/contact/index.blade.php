@extends('layouts.app')

@section('title', title(__('Contact')))

@section('content')
<div class="container">
  <div class="col-12 mt-2 text-center">
    <h1>Contact Us</h1>
  </div>
  <section class="col-10 offset-1 mt-3 mb-3">
    @include('contact.accordion')
  </section>
  <section class="col-10 offset-1">
    @include('contact.form')
  </section>
</div>

@endsection
