<x-layout>
    <p>Voeg hier een contributie toe of bekijk alle contributies. Ook is elk contributie aan te passen.</p>
    <button class="add"><a href="/contributie/add">Contributie toevoegen</a></button>
    <p>Bekijk alle contributies:</p>
    <table>
        <tr>
            <th>ID</th>
            <th>Leeftijd</th>
            <th>Soort lid</th>
            <th>Bedrag</th>
            <th>Boekjaar</th>
            <th>Aangemaakt</th>
            <th>Updated</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        @foreach ($contributies as $contributie)
            <tr class="hover">
                <td>{{$contributie->id}}</td>
                <td>{{$contributie->leeftijd}}</td>
                <td>{{$contributie->soortLid->omschrijving}}</td>
                <td>{{$contributie->bedrag}}</td>
                @php
                // dd($contributie)
            @endphp
                <td>{{$contributie->Boekjaar->jaar}}</td>
                
                 {{-- <td>
                    @if ($contributie->boekjaar)
                        {{$contributie->boekjaar->jaar}}
                    @else
                        Relationship is null
                    @endif --}}
                </td>
                @php
                    // dd($contributie)
                @endphp
                <td>{{$contributie->created_at}}</td>
                <td>{{$contributie->updated_at}}</td>
                <td class="center_icon edit"><a href="/contributie/{{$contributie->id}}/edit"><i class="fa-regular fa-pen-to-square"></i></a></td>
                <td class="center_icon delete"><a href="/contributie/{{$contributie->id}}/delete"><i class="fa-regular fa-trash-can"></i></a></td>
            </tr>
        @endforeach
    </table>
</x-layout>