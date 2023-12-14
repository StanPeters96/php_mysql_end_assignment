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
    <div class="grid-container">
        <header>
            <h1>Ledenadministratie</h1>
            <div class="logout-block">
                @auth
                    <span class="welkom">Welkom {{auth()->user()->name}}!</span>      
                @endauth
                <form action="logout" method="POST">
                    @csrf
                    <button type="submit" class="terug"><i class="fa-solid fa-right-from-bracket"></i> logout</button>
                </form>
            </div>
        </header>
        <nav>
            <h3>Menu:</h3>
            <ul>
                <li><a href="/">Home</a></li>
            </ul>
            <h4>Familieleden & families:</h4>
            <ul>
                <li><a href="/familielid">Familielid/familieleden</a></li>
                <li><a href="/familie">Familie(s)</a></li>
            </ul>
            <h4>Onderhoud:</h4>
            <ul>
                <li><a href="/soort-lid">Soort leden</a></li>
                <li><a href="/contributie">Staffels contributies</a></li>
                <li><a href="/boekjaar">Boekjaar</a></li>
            </ul>
            <h4>Gebruikers (admin):</h4>
            <ul>
                <li><a href="/users">Gebruikers</a></li>
            </ul>
        </nav>
        <main>
            {{$slot}}
        </main>
        <div class="spacer_footer"></div>
        <footer>
            <h2>&copy; Ledenadministratie applicatie 2023</h2>
        </footer>
    </div>
    <x-flash_message></x-flash_message>
</body>
</html>
