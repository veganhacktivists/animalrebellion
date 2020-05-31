<nav class="navbar navbar-expand-md navbar-dark bg-primary shadow-sm">
  <div class="container">
    <a href="{{ route('home') }}" class="logo d-flex flex-row">
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

        {{-- About Pages menu items --}}
        <li class="nav-item dropdown">
          <a id="aboutDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            @lang('navbar.about') <span class="caret"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="aboutDropdown">
            @foreach($aboutPages as $aboutPage)
            <a class="dropdown-item" href="{{ route('about.show', $aboutPage) }}">{{ $aboutPage->title }}</a>
            @endforeach
          </div>
        </li>

        {{-- Join Us menu items --}}
        <li class="nav-item dropdown">
          <a id="joinUsDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            @lang('navbar.join') <span class="caret"></span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="joinUsDropdown">
            @foreach($joinPages as $joinPage)
              <a class="dropdown-item" href="{{ route('join.show', $joinPage) }}">{{ $joinPage->title }}</a>
            @endforeach
            <a class="dropdown-item" href="{{ route('events.index') }}">Events</a>
            <a class="dropdown-item" href="{{ route('local-groups.index') }}">Local Groups</a>
            <a class="dropdown-item" href="{{ route('resources.index') }}">Resources</a>
          </div>
        </li>

        {{-- Blog menu item --}}
        <li class="nav-item">
          <a class="nav-link" href="{{ route('blog.index') }}">Blog</a>
        </li>

        {{-- Contact menu item --}}
        <li class="nav-item">
          {{ link_to_route('contact.index', __('navbar.contact'), null, ['class' => 'nav-link']) }}
        </li>

        {{-- Donate menu item --}}
        <li class="nav-item ml-2">
          <a href="{{ route('donate') }}"><button class="btn btn-dark btn-lg">Donate</button></a>
        </li>
      </ul>
    </div>
  </div>
</nav>
