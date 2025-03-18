@once<ul class="nav nav-tabs">
    <li class="nav-item">
      <a class="nav-link active" aria-current="page" href={{ route('homepage') }}>Home</a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href={{ route('profiles.index') }}>Tous les Profile</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href={{ route('settings.index') }}>Settings</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href={{ route('profiles.create') }}>Ajouter profile</a>
    </li>
  </ul>@endonce