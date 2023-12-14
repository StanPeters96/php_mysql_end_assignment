<x-layout>
    <button class="terug"><a href="/contributie">Terug</a></button><br>
    <p>Voeg een soort lid toe:</p>
    <div>
        <form action="/contributie/create" method="POST">
            @csrf
            <label for="leeftijd">Leeftijd:</label>
            <input type="text" name="leeftijd" id="leeftijd" required><br>
            <label for="soort_lids_id">Soort lid:</label><br>
            <select name="soort_lids_id" id="soort_lids_id" required>
                <option value="" disabled selected>Maak een keuze</option>
                {{-- <option value="1" @if($contributie->soort_lids_id == 1) selected @endif>Jeugd: jonger dan 9 jaar 50% korting</option>
                <option value="2" @if($contributie->soort_lids_id == 2) selected @endif>Aspirant: van 8 tot 12 jaar 40% korting</option>
                <option value="3" @if($contributie->soort_lids_id == 3) selected @endif>Junior: van 13 tot 17 jaar 25% korting</option>
                <option value="4" @if($contributie->soort_lids_id == 4) selected @endif>Senior: van 18 tot 50 jaar 0% korting</option>
                <option value="5" @if($contributie->soort_lids_id == 5) selected @endif>Veteraan: Vanaf 51 jaar 45% korting</option> --}}
                @foreach($alleSoortLeden as $soortLid)
                <option value="{{ $soortLid->id }}" 
                        @if($contributie->soort_lids_id == $soortLid->id) selected @endif>{{ $soortLid->omschrijving }}</option>
                @endforeach
            </select><br>
            <label for="boekjaars_id">Boekjaar</label><br>
            <select name="boekjaars_id" id="boekjaars_id" required>
                <option value="" disabled selected>Maak een keuze</option>
                {{-- <option value="1" @if($contributie->boekjaars_id == 1) selected @endif>2023</option>
                <option value="2" @if($contributie->boekjaars_id == 2) selected @endif>2024</option> --}}
                @foreach($alleBoekjaren as $boekjaar)
                <option value="{{ $boekjaar->id }}" 
                        @if($contributie->boekjaars_id == $boekjaar->id) selected @endif>{{ $boekjaar->jaar }}</option>
                @endforeach
            </select><br>
            <label for="bedrag">Bedrag:</label>
            <input type="number" step="0.01" name="bedrag" id="bedrag" required><br><br>
            <input type="submit" value="Maak contributie aan" name="submit">
        </form>
    </div>
</x-layout>