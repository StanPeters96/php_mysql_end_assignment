<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />
    <script src="//unpkg.com/alpinejs" defer></script>
    <link href="{{ asset('stylesheet.css') }}" rel="stylesheet">
    <title>Ledenadministratie</title>
</head>
<body>
    <h5>Ledenadministratie app 2023</h5>
    <div class="login-container">
        <p>Login op de Ledenadministratie:</p><br>
        <form action="/users/authenticate" method="POST" class="login-form">
            @csrf
            <label for="email">Email gebruiker:</label>
            <input type="email" name="email" id="email" required>
            <br>
            <label for="password">Wachtwoord gebruiker:</label>
            <input type="password" name="password" id="password" required>
            <br>
            <input type="submit" value="Login" name="submit">
        </form>
        <br>
        <p>Geen account? neem contact op met de admin.</p>
        <x-flash_message></x-flash_message>
    </div>
</body>