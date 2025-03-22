<x-master title="Mon Profile" >
    <h3>Ajouter Profile</h3>
    @if ($errors->any())
    <x-alert type="danger">
      <h6>Errors:</h6>
      <ul>
      @foreach ($errors->all() as $error )
      <li>{{ $error }}</li>


      @endforeach
      </ul>
    </x-alert>


    @endif
    <form action="{{ route('store') }}" method="POST" enctype="multipart/form-data">
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
      </div>
      <div class="form-group">
          <label for="password">Validate Password</label>
          <input type="password" name="password_confirmation" id="password" class="form-control">
      </div>
      <div class="form-group">
          <label for="bio">Bio</label>
          <textarea name="bio" id="bio" class="form-control">{{ old('bio') }}</textarea>
          @error('bio')
              <div class="text-danger">{{ $message }}</div>
          @enderror
      </div>
      <div class="form-group">
          <label >Image</label>
          <input type="file" name="image"  class="form-control">
          @error('image')
              <div class="text-danger">{{ $message }}</div>
          @enderror
      </div>
      <button type="submit" class="btn btn-primary">Ajouter</button>
  </form>


</x-master>
