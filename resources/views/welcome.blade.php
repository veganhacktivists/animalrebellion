@extends('layouts.app')

@section('title', title(__('Home')))

@section('content')
  <div class="container">
    <h2 class="h1 mb-4">Events</h2>

    <div class="row">
      <div class="col-md mb-3">
        <div class="block-shadow mb-3">
          <div class="card border-0 mb-3">
            <img src="https://picsum.photos/id/1/200/150" class="card-img-top" alt="An awesome event!">
            <div class="card-body">
              <h3 class="card-title text-dark">Lorem ipsum dolor sit amet</h5>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

              <div class="d-flex flex-row justify-content-between mb-3">
                <span><i class="far fa-calendar pr-1"></i>02 Feb / 07 Feb</span>
                <span><i class="fa fa-map-marker-alt pr-1"></i>London</span>
              </div>

              <a href="#" class="btn btn-success px-5">Find out more</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md mb-3">
        <div class="block-shadow mb-3">
          <div class="card border-0 mb-3">
            <img src="https://picsum.photos/id/1/200/150" class="card-img-top" alt="An awesome event!">
            <div class="card-body">
              <h3 class="card-title text-dark">Lorem ipsum dolor sit amet</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

                <div class="d-flex flex-row justify-content-between mb-3">
                  <span><i class="far fa-calendar pr-1"></i>02 Feb / 07 Feb</span>
                  <span><i class="fa fa-map-marker-alt pr-1"></i>London</span>
                </div>

                <a href="#" class="btn btn-success px-5">Find out more</a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md mb-3">
        <div class="block-shadow mb-3">
          <div class="card border-0 mb-3">
            <img src="https://picsum.photos/id/1/200/150" class="card-img-top" alt="An awesome event!">
            <div class="card-body">
              <h3 class="card-title text-dark">Lorem ipsum dolor sit amet</h3>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

              <div class="d-flex flex-row justify-content-between mb-3">
                <span><i class="far fa-calendar pr-1"></i>02 Feb / 07 Feb</span>
                <span><i class="fa fa-map-marker-alt pr-1"></i>London</span>
              </div>

              <a href="#" class="btn btn-success px-5">Find out more</a>
            </div>
          </div>
        </div>
    </div>
  </div>
@endsection
