<x-layout>
    {{-- @php
        dd($contributie);
    @endphp --}}
    <button class="terug"><a href="/contributie">Terug</a></button>
    <p>Contributie verwijderen, bent u er zeker van?</p>
    <p>U wilt verwijderen:</p><br>
    <p>- leeftijd: {{$contributie->leeftijd}}</p>
    <p>- soort lid id: {{$contributie->soortlid_id}}</p>
    <p>- bedrag: {{$contributie->bedrag}}</p>

    <br>
    <div>
        <form action="/contributie/{{$contributie->id}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Verwijder contributie" name="submit">
        </form>
    </div>
</x-layout>