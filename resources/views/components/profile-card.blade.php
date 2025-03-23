<div class="col-sm-4">
    <div class="card m-2">
        <img class="card-img-top" height="350vh" src="{{ asset('storage/'.$profile->image) }}" alt="">
        <div class="card-body">

            <h4 class="card-title">{{ $profile->name }}</h4>
            <p class="card-text">{{ Str::limit($profile->bio,50) }}</p>
            <div class="card-footer text-muted">
                <a href="{{ route('profiles.show',$profile->id) }}" class="stretched-link"></a>
            </div>

        </div>
        <div class="card-foot border-top px-2 py-2 bg-light " style="z-index: 9">
            <form action="{{ route('profiles.destroy',$profile->id) }}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger float-end">Suprimer</button>
            </form>
            <form action="{{ route('profiles.edit',$profile->id) }}" method="get">
                @csrf
                <button class="btn btn-primary mx-2 float-end">Modifier</button>

            </form>
        </div>
    </div>

</div>
