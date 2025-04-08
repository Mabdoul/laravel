<div class="card my-2 bg-light">
    <div class="card-body">

        @auth
        @if ($canUpdate===true)
        <a class="float-end btn btn-primary"
        href="{{ route('publications.edit', $publication->id) }}">Modifier</a>
        @endif
         @endauth

        <blockquote class="blockquote">
            <div class="container">
                <div class="col-md-4 ">
                    <div>
                        <div class="col-md-4 d-flex align-items-center gap-2">
                            <!-- Image as clickable link -->
                            <a href="{{ route('profiles.show', $publication->profile->id) }}">
                                <img class="rounded-circle" src="{{ asset('storage/'.$publication->profile->image) }}" width="80px">
                            </a>
                    </div>
                </div>
                <div class="col">
                    {{ $publication->profile->name }}
                </div>
            </div>
            <hr>
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
