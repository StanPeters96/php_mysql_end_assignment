<x-layout>
    <button class="terug"><a href="/users">Terug</a></button><br><br>
    <p>Bewerk user:</p>
    <div>
        <form action="/users/{{$user->id}}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Naam user:</label>
            <input type="text" name="name" id="name" value="{{$user->name}}
            "><br>
            <label for="email">Email gebruiker:</label>
            <input type="email" name="email" id="email" value="{{$user->email}}">
            <br><br>
            <input type="submit" value="Sla bewerkingen op" name="submit">
        </form>
    </div>
</x-layout>