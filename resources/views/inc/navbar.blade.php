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
      <ul class="navbar-nav mr-auto">

      </ul>

      {{-- Right Side Of Navbar --}}
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          {{ link_to_route('contact.form', __('Contact'), null, ['class' => 'nav-link']) }}
        </li>
        @guest
          <li class="nav-item">
            {{ link_to_route('login', __('Login'), null, ['class' => 'nav-link']) }}
          </li>
          @if (Route::has('register'))
            <li class="nav-item">
              {{ link_to_route('register', __('Register'), null, ['class' => 'nav-link']) }}
            </li>
          @endif
        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
              @role('admin', 'backpack')
                {{ link_to_route('backpack.dashboard', __('Admin'), null, [
                  'class' => 'dropdown-item',
                  'data-turbolinks' => 'false',
                ]) }}
              @endrole
              {{ link_to_route('settings.edit', __('Settings'), null, [
                'class' => 'dropdown-item',
              ]) }}
              {{ link_to_route('logout', __('Logout'), null, [
                'class' => 'dropdown-item',
                'onclick' => "event.preventDefault(); document.getElementById('logout-form').submit();",
              ]) }}

              {{ Form::open(['route' => 'logout', 'id' => 'logout-form', 'class' => 'd-none']) }}
              {{ Form::close() }}
            </div>
          </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>

