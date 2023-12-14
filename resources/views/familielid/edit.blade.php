<x-layout>
    <button class="terug"><a href="/familielid">Terug</a></button><br>
    <p>Bewerk familielid:</p>
    <div>
        <form action="/familielid/{{$familielid->id}}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Naam lid:</label>
            <input type="text" name="name" id="name" value="{{$familielid->name}}"><br>
            <label for="dateOfBirth">Geboortedatum lid:</label>
            <input type="text" name="dateOfBirth" id="dateOfBirth" value="{{$familielid->dateOfBirth}}">
            <br>
            <label for="soort_lids_id">Soort lid:</label>
            <select name="soort_lids_id" id="soort_lids_id" required>
                <option value="" disabled selected>Maak een keuze</option>
                @foreach($alleSoortLeden as $soortLid)
                    <option value="{{ $soortLid->id }}" @if($soortLid->id == $familielid->soort_lids_id) selected @endif>{{ $soortLid->omschrijving }}</option>
                @endforeach
            </select><br>
            {{-- <select name="soortlid_id" id="soortlid_id" required>
                <option value="" disabled selected>Maak een keuze</option>
                <option value="1" @if($familielid->soortlid_id == 1) selected @endif>Jeugd: jonger dan 9 jaar 50% korting</option>
                <option value="2" @if($familielid->soortlid_id == 2) selected @endif>Aspirant: van 8 tot 12 jaar 40% korting</option>
                <option value="3" @if($familielid->soortlid_id == 3) selected @endif>Junior: van 13 tot 17 jaar 25% korting</option>
                <option value="4" @if($familielid->soortlid_id == 4) selected @endif>Senior: van 18 tot 50 jaar 0% korting</option>
                <option value="5" @if($familielid->soortlid_id == 5) selected @endif>Veteraan: Vanaf 51 jaar 45% korting</option>
            </select><br><br> --}}
            <label for="families_id">Familie:</label>
            <select name="families_id" id="families_id" required>
                <option value="" disabled selected>Maak een keuze</option>
                @foreach($alleFamilies as $familie)
                    <option value="{{ $familie->id }}" @if($familie->id == $familielid->families_id) selected @endif>{{ $familie->name_family }}</option>
                @endforeach
            </select><br><br>
                        {{-- <option value="" disabled selected>Maak een keuze</option>
                        <option value="1">Jeugd: jonger dan 9 jaar 50% korting</option>
                        <option value="2">Aspirant: van 8 tot 12 jaar 40% korting</option>
                        <option value="3">Junior: van 13 tot 17 jaar 25% korting</option>
                        <option value="4">Senior: van 18 tot 50 jaar 0% korting</option>
                        <option value="5">Veteraan: Vanaf 51 jaar 45% korting</option> --}}
            <input type="submit" value="Sla bewerkingen op" name="submit">
        </form>
    </div>
</x-layout>