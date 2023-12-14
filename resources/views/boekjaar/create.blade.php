<x-layout>
    <button class="terug"><a href="/boekjaar">Terug</a></button><br>
    <p>Voeg een soort lid toe:</p>
    <div>
        <form action="/boekjaar/create" method="POST">
            @csrf
            <label for="jaar">Jaar:</label>
            <input type="text" name="jaar" id="jaar" required><br><br>
            <input type="submit" value="Maak boekjaar aan" name="submit">
        </form>
    </div>
</x-layout>