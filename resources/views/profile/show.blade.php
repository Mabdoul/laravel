<x-master title='Page dacceuil'>
    <h3>Profile</h3>
{{ $profile->name }} <br>
{{ $profile->email }}<br>
<div>
    <img height="500vh" src="{{ asset('storage/'.$profile->image) }}" alt="">
</div>

    </x-master>
