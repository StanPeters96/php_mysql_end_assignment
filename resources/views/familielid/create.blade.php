<x-layout>
    <button class="terug"><a href="/familielid">Terug</a></button><br>
    <p>Voeg een lid toe:</p>
    <div>
        <form action="/familielid/create" method="POST">
            @csrf
            <label for="name">Naam lid:</label>
            <input type="text" name="name" id="name" required><br>
            <label for="dateOfBirth">Geboortedatum lid:</label>
            <input type="text" name="dateOfBirth" id="dateOfBirth" required><br>
            <label for="dateOfBirth">Soort lid:</label>
            <select name="soort_lids_id" id="soort_lids_id" required>
                <option value="" disabled selected>Maak een keuze</option>
                @foreach($alleSoortLeden as $soortLid)
                <option value="{{ $soortLid->id }}" 
                        @if($soortLid->soort_lids_id == $soortLid->id) selected @endif>{{ $soortLid->omschrijving }}</option>
                @endforeach
                    {{-- <option value="" disabled selected>Maak een keuze</option>
                    <option value="1">Jeugd: jonger dan 9 jaar 50% korting</option>
                    <option value="2">Aspirant: van 8 tot 12 jaar 40% korting</option>
                    <option value="3">Junior: van 13 tot 17 jaar 25% korting</option>
                    <option value="4">Senior: van 18 tot 50 jaar 0% korting</option>
                    <option value="5">Veteraan: Vanaf 51 jaar 45% korting</option> --}}
                </select><br>
            <label for="dateOfBirth">Familie:</label>
            <select name="families_id" id="families_id" required>
                    <option value="" disabled selected>Maak een keuze</option>
                    @foreach($alleFamilies as $families)
                    <option value="{{ $soortLid->id }}" 
                            @if($families->families_id == $families->id) selected @endif>{{ $families->name_family }}</option>
                    @endforeach
                        {{-- <option value="" disabled selected>Maak een keuze</option>
                        <option value="1">Jeugd: jonger dan 9 jaar 50% korting</option>
                        <option value="2">Aspirant: van 8 tot 12 jaar 40% korting</option>
                        <option value="3">Junior: van 13 tot 17 jaar 25% korting</option>
                        <option value="4">Senior: van 18 tot 50 jaar 0% korting</option>
                        <option value="5">Veteraan: Vanaf 51 jaar 45% korting</option> --}}
                    </select><br><br>
            <input type="submit" value="Maak lid aan" name="submit">
        </form>
    </div>
</x-layout>