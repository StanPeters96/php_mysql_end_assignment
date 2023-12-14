<x-layout>
    <button class="terug"><a href="/boekjaar">Terug</a></button>
    <p>Boekjaar verwijderen, bent u er zeker van?</p>
    <p>U wilt verwijderen:</p><br>
    <p>- boekjaar: {{$boekjaar->jaar}}</p>
    <br>
    <div>
        <form action="/boekjaar/{{$boekjaar->id}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Verwijder boekjaar" name="submit">
        </form>
    </div>
</x-layout>