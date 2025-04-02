@once<ul class="nav nav-tabs">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href={{ route('homepage') }}>Home</a>
        </li>
        @guest
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('login.show') }}">Se connecter</a>
        </li>
        @endguest





        <li class="nav-item">
            <a class="nav-link" href={{ route('profiles.index') }}>Tous les Profile</a>
        </li>
        {{-- <li class="nav-item">
      <a class="nav-link" href={{ route('settings.index') }}>Settings</a>
    </li> --}}
        <li class="nav-item">
            <a class="nav-link" href={{ route('profiles.create') }}>Ajouter profile</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href={{ route('publications.create') }}>Ajouter publication</a>
        </li>
        @auth


        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
              {{ Auth::user()->name }}
            </button>
            <ul class="dropdown-menu dropdown-menu-dark">
              <li><a class="dropdown-item active" href="{{ route('profiles.show', Auth::user()->id) }}">Your Profile</a></li>
              <li><a class="dropdown-item active" href="{{ route('profiles.edit', Auth::user()->id) }}">edit</a></li>
              <li><a class="dropdown-item active" href="{{ route('login.logout') }}">Se deconnecter</a></li>

            </ul>
          </div>
          @endauth

</ul>

  @endonce
