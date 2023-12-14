<?php

namespace App\Http\Controllers;

use App\Models\Contributie;
use App\Models\soortLid;
use Illuminate\Http\Request;

class SoortLidController extends Controller
{
        //Toon alle soorten leden + CRUD opties
        public function index(Request $request) {

            return view('soort-lid.index', [
            'soorten_leden' => soortLid::all()//->paginate(6)
        ]);
        }

        //Toon soort lid aanmaken formulier
        public function show() {

            //ophalen data voor opties dropdowns
            $alleContributies = Contributie::all();

            return view('soort-lid.create', ['alleContributies' => $alleContributies]);
        }

        //Opslaan van aangemaakt soort lid in database
        public function store(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'omschrijving' => 'required',
            'contributies_id' => 'required'
        ]);

        // if($request->hasFile('logo')) {
        //     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        // }

        // $formFields['user_id'] = auth()->id();

        // // dd($formFields);

        soortLid::create($formFields);

        return redirect('/soort-lid')->with('message', 'Nieuw soort lid succesvol aangemaakt!');

    }

    //Toon bewerken soort lid formulier
    public function edit(soortLid $soort_lid) {

        return view('soort-lid.edit', ['soort_lid' => $soort_lid]);
    }

    // Opslaan geupdate soort lid
    public function update(Request $request, soortLid $soort_lid) {
        // dd($request->file('logo'));

        // Make sure logged in user is owner
        // if($listing->user_id != auth()->id()) {
        //     abort('403', 'Unauthorized action');
        // }

        $formFields = $request->validate([
            'omschrijving' => 'required'
        ]);

        // if($request->hasFile('logo')) {
        //     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        // }

        // dd($formFields);

        $soort_lid->update($formFields);

        return back()->with('message', 'Soort lid succesvol bijgewerkt!');

    }

    //Toon soort lid verwijderen formulier
    public function warning(soortLid $soort_lid) {
        return view('soort-lid.delete', ['soort_lid' => $soort_lid]);;
    }

    // Verwijder soort lid
    public function destroy(soortLid $soort_lid) {

        // // Make sure logged in user is owner
        // if($listing->user_id != auth()->id()) {
        //     abort('403', 'Unauthorized action');
        // }
        
        $soort_lid->delete();
        return redirect('/soort-lid')->with('message', 'Soort lid succesvol verwijderd');
    }

}
