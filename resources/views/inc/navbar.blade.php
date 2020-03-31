<nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
  <div class="container">
    <a href="{{url('')}}" class="logo d-flex flex-row">
      <img class="logo-img" src="https://animalrebellion.org/wp-content/uploads/2020/01/cropped-Animal-Rebellion-Logo-White-No-Background.png" alt="">
      <div class="ml-4">
        <h4 class="logo-text mb-0 mt-2">Animal</h4>
        <h4 class="logo-text">Rebellion</h4>
      </div>
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      {{-- Left Side Of Navbar --}}
      <ul class="navbar-nav mr-auto"></ul>

      {{-- Right Side Of Navbar --}}
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a id="aboutDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            About Us <span class="caret"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="aboutDropdown">
            @foreach($aboutPages as $aboutPage)
            <a class="dropdown-item" href="{{ route('about.show', $aboutPage) }}">{{ $aboutPage->title }}</a>
            @endforeach
          </div>
        </li>
        <li class="nav-item">
          {{ link_to_route('contact.form', __('Contact'), null, ['class' => 'nav-link']) }}
        </li>
      </ul>
    </div>
  </div>
</nav>
