<x-layout>
    <p>Voeg hier een boekjaar toe of bekijk alle soorten boekjaren. Ook is elk boekjaar aan te passen of te verwijderen.</p>
    <button class="add"><a href="/boekjaar/add">Boekjaar toevoegen</a></button>
    <p>Bekijk alle boekjaren:</p>
    <table>
        <tr>
            <th>ID</th>
            <th>Jaar</th>
            <th>Aangemaakt</th>
            <th>Updated</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($boekjaren as $boekjaar)
            <tr class="hover">
                <td>{{$boekjaar->id}}</td>
                <td>{{$boekjaar->jaar}}</td>
                <td>{{$boekjaar->created_at}}</td>
                <td>{{$boekjaar->updated_at}}</td>
                <td class="center_icon edit"><a href="/boekjaar/{{$boekjaar->id}}/edit"><i class="fa-regular fa-pen-to-square"></i></a></td>
                <td class="center_icon delete"><a href="/boekjaar/{{$boekjaar->id}}/delete"><i class="fa-regular fa-trash-can"></i></a></td>
            </tr>
        @endforeach
    </table>
</x-layout>