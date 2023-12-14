<?php

namespace App\Http\Controllers;

use App\Models\Boekjaar;
use App\Models\Contributie;
use App\Models\soortLid;
use Illuminate\Http\Request;

class ContributieController extends Controller
{
    //Toon alle contributies + CRUD opties
    public function index(Request $request) {

        return view('contributie.index', [
        'contributies' => Contributie::all()//->paginate(6)
    ]);
    }

    //Toon contributie aanmaken formulier
    public function show(Contributie $contributie) {
        
        //ophalen data voor opties dropdowns
        $alleBoekjaren = Boekjaar::all();
        $alleSoortLeden = soortLid::all();
        
        return view('contributie.create', ['contributie' => $contributie, 'alleBoekjaren' => $alleBoekjaren, 'alleSoortLeden' => $alleSoortLeden]);
    }

    //Opslaan van aangemaakt contributie in database
    public function store(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'leeftijd' => 'required',
            'soort_lids_id' => 'required',
            'boekjaars_id' => 'required',
            'bedrag' => 'required'
        ]);

        // if($request->hasFile('logo')) {
        //     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        // }

        // $formFields['user_id'] = auth()->id();

        // // dd($formFields);

        Contributie::create($formFields);

        return redirect('/contributie')->with('message', 'Nieuwe contributie succesvol aangemaakt!');

    }

    //Toon bewerken contributie formulier
    public function edit(Contributie $contributie) {
        
        //ophalen data voor opties dropdowns
        $alleBoekjaren = Boekjaar::all();
        $alleSoortLeden = soortLid::all();

        return view('contributie.edit', ['contributie' => $contributie, 'alleBoekjaren' => $alleBoekjaren, 'alleSoortLeden' => $alleSoortLeden]);
    }

    // Opslaan geupdate contributie
    public function update(Request $request, Contributie $contributie) {
        // dd($request->file('logo'));

        // Make sure logged in user is owner
        // if($listing->user_id != auth()->id()) {
        //     abort('403', 'Unauthorized action');
        // }

        $formFields = $request->validate([
            'leeftijd' => 'required',
            'soort_lids_id' => 'required',
            'boekjaars_id' => 'required',
            'bedrag' => 'required'
        ]);

        // if($request->hasFile('logo')) {
        //     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        // }

        // dd($formFields);

        $contributie->update($formFields);

        return back()->with('message', 'Contributie succesvol bijgewerkt!');

    }

    //Toon contributie verwijderen formulier
    public function warning(Contributie $contributie) {
        return view('contributie.delete', ['contributie' => $contributie]);
    }

    // Verwijder familielid
    public function destroy(Contributie $contributie) {
    
        // // Make sure logged in user is owner
        // if($listing->user_id != auth()->id()) {
        //     abort('403', 'Unauthorized action');
        // }
        
        $contributie->delete();
        return redirect('/contributie')->with('message', 'Contributie succesvol verwijderd');
    }


}
