<x-layout>
    <button class="terug"><a href="/familie">Terug</a></button><br>
    <p>Voeg een familie toe:</p>
    <div>
        <form action="/familie/create" method="POST">
            @csrf
            <label for="name_family">Naam familie:</label>
            <input type="text" name="name_family" id="name_family" required><br>
            <label for="adress">Adres familie:</label>
            <input type="text" name="adress" id="adress" required>
            <br><br>
            <input type="submit" value="Maak familie aan" name="submit">
        </form>
    </div>
</x-layout>