<x-layout>
    <button class="terug"><a href="/familielid">Terug</a></button>
    <p>Familielid verwijderen, bent u er zeker van?</p>
    <p>U wilt verwijderen:</p><br>
    <p>- naam: {{$familielid->name}}</p>
    <p>- geboortedatum:{{$familielid->dateOfBirth}}</p>
    <p>- soort lid ID:{{$familielid->soortlid_id}}</p><br>
    <div>
        <form action="/familielid/{{$familielid->id}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Verwijder familielid" name="submit">
        </form>
    </div>
</x-layout>