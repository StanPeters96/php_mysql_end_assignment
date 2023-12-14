<x-layout>
    <p>Voeg hier een soort lid toe of bekijk alle soorten leden. Ook is elk soort lid aan te passen of te verwijderen.</p>
    <button class="add"><a href="/soort-lid/add">Soort lid toevoegen</a></button>
    <p>Bekijk alle soorten leden:</p>
    <table>
        <tr>
            <th>ID</th>
            <th>omschrijving</th>
            <th>Aangemaakt</th>
            <th>Updated</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($soorten_leden as $soort_lid)
            <tr class="hover">
                <td>{{$soort_lid->id}}</td>
                <td>{{$soort_lid->omschrijving}}</td>
                <td>{{$soort_lid->created_at}}</td>
                <td>{{$soort_lid->updated_at}}</td>
                <td class="center_icon edit"><a href="/soort-lid/{{$soort_lid->id}}/edit"><i class="fa-regular fa-pen-to-square"></i></a></td>
                <td class="center_icon delete"><a href="/soort-lid/{{$soort_lid->id}}/delete"><i class="fa-regular fa-trash-can"></i></a></td>
            </tr>
        @endforeach
    </table>
</x-layout>