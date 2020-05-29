@extends('layouts.app')

@section('title', title(__('Donate')))

@section('content')

<div class="container">

  <div class="row">
    <div class="col-12 mt-2 text-center">
      <h1>Donate</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-8 offset-2 text-center">
      <p class="text-featured">Your donation is vital to continue our fight for Animal rights on Earth.</p>
      <p class="text-large">Animal Rebellion needs your help to continue as a non-profit during this difficult time of crisis. We need people to give regularly so that we can cover costs and sustain ourselves as an organisation.</p>
    </div>
  </div>

  <div class="row">
    <div class="col-12 text-center">
      <img src="https://animalrebellion.org/wp-content/uploads/2020/05/AxR-Donate-1-768x432.jpg" alt="Yellow banner with the following text: Become a regular giver to Animal Rebellion today. Keep your movement moving." />
    </div>
  </div>

  <div class="row">
    <div class="col-12 mt-2 text-center">
      <a href="https://chuffed.org/project/keepyourmovementmoving" target="_blank"><button type="button" class="btn btn-lg btn-dark">Donate to Animal Rebellion</button></a>
    </div>
  </div>

</div>

@endsection
