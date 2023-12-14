<x-layout>
    <p>Voeg hier een lid toe of bekijk alle leden. Ook is elk lid aan te passen.</p>
    <button class="add"><a href="/familielid/add">Familie lid toevoegen</a></button>
    <p>Bekijk alle leden:</p>
    <table>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Geboortedatum</th>
            <th>Soort lid</th>
            <th>Familie</th>
            <th>Aangemaakt</th>
            <th>Updated</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($familieleden as $familielid)
            <tr class="hover">
                <td>{{$familielid->id}}</td>
                <td>{{$familielid->name}}</td>
                <td>{{$familielid->dateOfBirth}}</td>
                <td>{{$familielid->soortLid->omschrijving}}</td>
                <td>{{$familielid->Familie->name_family}}</td>
                <td>{{$familielid->created_at}}</td>
                <td>{{$familielid->updated_at}}</td>
                <td class="center_icon edit"><a href="/familielid/{{$familielid->id}}/edit"><i class="fa-regular fa-pen-to-square"></i></a></td>
                <td class="center_icon delete"><a href="/familielid/{{$familielid->id}}/delete"><i class="fa-regular fa-trash-can"></i></a></td>
            </tr>
        @endforeach
    </table>
</x-layout>