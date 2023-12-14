<x-layout>
    <button class="terug"><a href="/users">Terug</a></button>
    <p>User verwijderen, bent u er zeker van?</p>
    <p>U wilt verwijderen:</p><br>
    <p>- Naam: {{$user->name}}</p>
    <p>- Email: {{$user->email}}</p>
    <br>
    <div>
        <form action="/users/{{$user->id}}" method="POST">
            @csrf
            @method('DELETE')
            <input type="submit" value="Verwijder user" name="submit">
        </form>
    </div>
</x-layout>