<x-layout>
    <button class="terug"><a href="/familie">Terug</a></button>
    <p>Familie verwijderen, bent u er zeker van?</p>
    <p>U wilt verwijderen:</p><br>
    <p>- Naam familie: {{$familie->name_family}}</p>
    <p>- Adres:{{$familie->adress}}</p><br>
    <div>
        <form action="/familie/{{$familie->id}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Verwijder familie" name="submit">
        </form>
    </div>
</x-layout>