<x-layout>
    <button class="terug"><a href="/familie">Terug</a></button><br><br>
    <p>Bewerk familie:</p>
    <div>
        <form action="/familie/{{$familie->id}}" method="POST">
            @csrf
            @method('PUT')
            <label for="name_family">Naam familie:</label>
            <input type="text" name="name_family" id="name_family" value="{{$familie->name_family}}"><br>
            <label for="adress">Adres:</label>
            <input type="text" name="adress" id="adress" value="{{$familie->adress}}">
            <br><br>
            <input type="submit" value="Sla bewerkingen op" name="submit">
        </form>
    </div>
</x-layout>