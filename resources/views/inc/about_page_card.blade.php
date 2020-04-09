<style>
  .other-page-card {
    width: 25vw;
  }
  .other-page-icon {
    background: #82C36B;
    width: 100%;
    height: 175px;
    margin: 0;
    padding: 0;
  }
</style>

<div class="card other-page-card border-primary border-1">

  <div class="card-header other-page-icon">
    <div class="d-flex justify-content-center align-content-center">
      <span style="font-size:7rem;"><i class="{{ $otherPage->thumbnail }}"></i></span>
    </div>
  </div>

  <div class="card-body">
    <div class="d-flex justify-content-center my-2">
      <h2>{{ $otherPage->title }}</h2>
    </div>
    <a class="btn btn-lg btn-dark" href="{{ route('about.show', $otherPage) }}">Find out more
    </a>
  </div>

</div>
