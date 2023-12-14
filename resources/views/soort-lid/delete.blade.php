<x-layout>
    <button class="terug"><a href="/soort-lid">Terug</a></button>
    <p>Soort lid verwijderen, bent u er zeker van?</p>
    <p>U wilt verwijderen:</p><br>
    <p>- omschrijving: {{$soort_lid->omschrijving}}</p>
    <br>
    <div>
        <form action="/soort-lid/{{$soort_lid->id}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Verwijder soort lid" name="submit">
        </form>
    </div>
</x-layout>