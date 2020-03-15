<nav class="navbar navbar-expand-md navbar-dark bg-success shadow-sm">
  <div class="container">
    {{ link_to_route('home', config('app.name'), null, ['class' => 'navbar-brand']) }}
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      {{-- Left Side Of Navbar --}}
      <ul class="navbar-nav mr-auto">

      </ul>

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
        @guest
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

