<x-layout>
    <button class="terug"><a href="/users">Terug</a></button><br>
    <p>Voeg een gebruiker toe:</p>
    <div>
        <form action="/users/create" method="POST">
            @csrf
            <label for="name">Naam gebruiker:</label>
            <input type="text" name="name" id="name" required>
            <br>
            <label for="email">Email gebruiker:</label>
            <input type="email" name="email" id="email" required>
            <br>
            <label for="password">Wachtwoord gebruiker:</label>
            <input type="password" name="password" id="password" required>
            <br>
            <label for="password_confirmation">Herhaal wachtwoord:</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
            <br><br>
            <input type="submit" value="Maak gebruiker aan" name="submit">
        </form>
    </div>
</x-layout>