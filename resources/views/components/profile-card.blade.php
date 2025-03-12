<div class="col-sm-4">
    <div class="card">
        <img class="card-img-top" src="https://picsum.photos/200/300?grayscale" alt="">
        <div class="card-body">
            
            <h4 class="card-title">{{ $profile->name }}</h4>
            <p class="card-text">{{ Str::limit($profile->bio,50) }}</p>
            <div class="card-footer text-muted">
                <a href="{{ route('profiles.show',$profile->id) }}" class="btn btn-primary">Affichez plus</a>
            </div>
        </div>
    </div>

</div>