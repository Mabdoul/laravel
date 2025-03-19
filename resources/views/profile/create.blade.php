<x-master title="Mon Profile" >
    <h3>Ajouter Profile</h3>
    @if ($errors->any())
    <x-alert type="danger">
      <ul>
      @foreach ($errors->all() as $error )
      <li>{{ $error }}</li>
      
        
      @endforeach
      </ul>
    </x-alert>
   
        
    @endif
    <form action="{{ route('store') }}" method="POST">
      @csrf
      <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
          @error('name')
              <div class="text-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
          <label for="email">Email</label>
          <input type="text" name="email" id="email" class="form-control" value="{{ old('email') }}">
          @error('email')
              <div class="text-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" class="form-control">
          @error('password')
              <div class="text-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
          <label for="bio">Bio</label>
          <textarea name="bio" id="bio" class="form-control">{{ old('bio') }}</textarea>
          @error('bio')
              <div class="text-danger">{{ $message }}</div>
          @enderror
      </div>
      <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>
  

</x-master>