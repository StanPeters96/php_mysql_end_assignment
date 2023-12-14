<x-layout>
        <p>Voeg hier een gebruiker toe of bekijk alle gebruiker. Ook is elk gebruker aan te passen of te verwijderen.</p>
        <button class="add"><a href="/users/add">gebruiker toevoegen</a></button>
        <p>Bekijk alle gebruikers:</p>
        <table>
            <tr>
                <th>ID</th>
                <th>Naam:</th>
                <th>Email:</th>
                <th>Aangemaakt</th>
                <th>Updated</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            @foreach ($users as $user)
                <tr class="hover">
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>{{$user->updated_at}}</td>
                    <td class="center_icon edit"><a href="/users/{{$user->id}}/edit"><i class="fa-regular fa-pen-to-square"></i></a></td>
                    <td class="center_icon delete"><a href="/users/{{$user->id}}/delete"><i class="fa-regular fa-trash-can"></i></a></td>
                </tr>
            @endforeach
        </table>
</x-layout>