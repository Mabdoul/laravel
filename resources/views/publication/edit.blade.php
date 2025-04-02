<x-master title="Mon Profile" >
    <h3>Modifier publication</h3>
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
    <form action="{{ route('publications.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="form-group">
          <label for="name">Titre</label>
          <input type="text" name="titre" id="name" class="form-control" value="{{ old('titre') }}">
          @error('titre')
              <div class="text-danger">{{ $message }}</div>
          @enderror
      </div>

      <div class="form-group">
          <label for="body">body</label>
          <textarea name="body" class="form-control">{{ old('body') }}</textarea>
          @error('body')
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
