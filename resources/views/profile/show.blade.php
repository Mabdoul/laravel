<x-master title='Page dacceuil'>
    <div class="container-fluid p-4">
        <div class="row">
            <div class="card my-4 py-4">
                <img class="card-img-top w-25 mx-auto"   src="{{ asset('storage/'.$profile->image) }}" alt="">
                <div class="card-body text-center">
                    <h4 class="card-title">#{{ $profile->id }} {{ $profile->name }}</h4>
                    <p class="card-text">{{ $profile->created_at ->format('d-m-Y') }}</p>
                    <p class="card-text">Email: <a href="mailto:{{ $profile->email }}">{{ $profile->email }}</a></p>
                    <p class="card-text">{{ $profile->bio }}</p>
                </div>
            </div>
        </div>
    </div>

 {{-- <br>
<br>
<div>
    <img height="500vh" src="{{ asset('storage/'.$profile->image) }}" alt="">
</div> --}}

    </x-master>
