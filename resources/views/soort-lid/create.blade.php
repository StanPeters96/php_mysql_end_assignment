<x-layout>
    <button class="terug"><a href="/soort-lid">Terug</a></button><br>
    <p>Voeg een soort lid toe:</p>
    <div>
        <form action="/soort-lid/create" method="POST">
            @csrf
            <label for="omschrijving">Omschrijving soort lid:</label>
            <input type="text" name="omschrijving" id="omschrijving" required><br>
            <label for="omschrijving">Contributie bedrag soort lid:</label>
            <select name="contributies_id" id="contributies_id" required>
                <option value="" disabled selected>Maak een keuze</option>
                {{-- <option value="1" @if($contributie->soort_lids_id == 1) selected @endif>Jeugd: jonger dan 9 jaar 50% korting</option>
                <option value="2" @if($contributie->soort_lids_id == 2) selected @endif>Aspirant: van 8 tot 12 jaar 40% korting</option>
                <option value="3" @if($contributie->soort_lids_id == 3) selected @endif>Junior: van 13 tot 17 jaar 25% korting</option>
                <option value="4" @if($contributie->soort_lids_id == 4) selected @endif>Senior: van 18 tot 50 jaar 0% korting</option>
                <option value="5" @if($contributie->soort_lids_id == 5) selected @endif>Veteraan: Vanaf 51 jaar 45% korting</option> --}}
                @foreach($alleContributies as $contributies)
                    <option value="{{ $contributies->id }}" 
                            @if($contributies->contributies_id == $contributies->id) selected @endif>{{ $contributies->bedrag}}</option>
                @endforeach
            </select><br><br>
            <input type="submit" value="Maak lid aan" name="submit">
        </form>
    </div>
</x-layout>