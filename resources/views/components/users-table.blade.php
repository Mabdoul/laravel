@props(['users'])

<div>
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Nom</th>
                <th>Metier</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user['id'] }}</td>
                <td>{{ $user['nom'] }}</td>
                <td>{{ $user['metier'] }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
