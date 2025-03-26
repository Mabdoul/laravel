<x-master title='Form'>
    <h3>Request/Response</h3>

    <form  method="post" action="{{ route('form') }}">
           @csrf
        <input type="text" name="input_field" class="form-control">
        <input type="submit" value="Envoyer" class="btn btn-sm btn-primary">
    </form>
</x-master>
