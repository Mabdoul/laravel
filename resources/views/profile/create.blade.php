<x-master title="Mon Profile" >
    <h3>Ajouter Profile</h3>
 
    <form action="{{ route('store') }}" method="POST">
      @csrf
      <div class="form-group">
        <label >full Name</label>
        <input type="text" name="name" id="" class="form-control" >
      
      </div>
      <div class="form-group">
        <label >email</label>
        <input type="text" name="email" id="" class="form-control" >
      
      </div>
      <div class="form-group">
        <label >password</label>
        <input type="password" name="password" id="" class="form-control" >
   
      </div>
      <div class="form-group">
        <label >bio</label>
        <textarea name="bio" class="form-control" cols="30" rows="10"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Ajouter</button>
    </form>

</x-master>