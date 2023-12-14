<x-layout>
    <button class="terug"><a href="/soort-lid">Terug</a></button><br><br>
    <p>Bewerk soort lid:</p>
    <div>
        <form action="/soort-lid/{{$soort_lid->id}}" method="POST">
            @csrf
            @method('PUT')
            <label for="omschrijving">Omschrijving:</label>
            <input type="text" name="omschrijving" id="omschrijving" value="{{$soort_lid->omschrijving}}"><br><br>
            <input type="submit" value="Sla bewerkingen op" name="submit">
        </form>
    </div>
</x-layout>