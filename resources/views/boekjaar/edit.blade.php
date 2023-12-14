<x-layout>
    <button class="terug"><a href="/boekjaar">Terug</a></button><br><br>
    <p>Bewerk boekjaar:</p>
    <div>
        <form action="/boekjaar/{{$boekjaar->id}}" method="POST">
            @csrf
            @method('PUT')
            <label for="boekjaar">Boekjaar:</label>
            <input type="text" name="jaar" id="jaar" value="{{$boekjaar->jaar}}"><br><br>
            <input type="submit" value="Sla bewerkingen op" name="submit">
        </form>
    </div>
</x-layout>