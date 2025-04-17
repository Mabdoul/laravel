<x-master title='Page Publicastion'>
    <h3>Publication</h3>
    <div class="container w-50 mx-auto ">
        <div class="row">
            @foreach ($publications as $publication)
                <x-publication  :publication='$publication'/>
            @endforeach
        </div>
    </div>
    {{ $publications->links() }}
</x-master>
