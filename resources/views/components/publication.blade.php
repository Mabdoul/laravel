<div class="card my-2 bg-light">
    <div class="card-body">
        @auth
        @if ($canUpdate===true)
        <a class="float-end btn btn-primary"
        href="{{ route('publications.edit', $publication->id) }}">Modifier</a>
        @endif
         @endauth

        <blockquote class="blockquote">
            <p>{{ $publication->titre }}</p>
            <p> {{ $publication->body }}</p>
            <footer class="card-blockquote">
                <img class="img-fluid" width="500px" height="500px"
                    src="{{ asset('storage/' . $publication->image) }}" alt="$publication->titre ">
                <form action="{{ route('publications.destroy', $publication->id) }}" method="post">
                @csrf
                @auth
                @if ($canUpdate===true)


                @method('DELETE')
                <button onclick="return confirm('voulez vous suprimer ca')" class="btn btn-danger float-end">Suprimer</button>
                </form>
                 @endif
                 @endauth

            </footer>
        </blockquote>
    </div>
</div>
