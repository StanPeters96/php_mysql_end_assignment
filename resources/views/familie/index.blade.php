<x-layout>
    <p>Voeg hier een familie toe of bekijk alle families. Ook is elk familie aan te passen.</p>
    <button class="add"><a href="/familie/add">Familie toevoegen</a></button>
    <p>Bekijk alle leden:</p>
    <table>
        <tr>
            <th>ID</th>
            <th>Naam familie</th>
            <th>Adres</th>
            <th>Aangemaakt</th>
            <th>Updated</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($families as $familie)
            <tr class="hover">
                <td>{{$familie->id}}</td>
                <td>{{$familie->name_family}}</td>
                <td>{{$familie->adress}}</td>
                <td>{{$familie->created_at}}</td>
                <td>{{$familie->updated_at}}</td>
                <td class="center_icon edit"><a href="/familie/{{$familie->id}}/edit"><i class="fa-regular fa-pen-to-square"></i></a></td>
                <td class="center_icon delete"><a href="/familie/{{$familie->id}}/delete"><i class="fa-regular fa-trash-can"></i></a></td>
            </tr>
        @endforeach
    </table>
</x-layout>