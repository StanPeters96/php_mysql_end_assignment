<?php

namespace App\Http\Controllers;

use App\Models\Familie;
use App\Models\soortLid;
use App\Models\Familielid;
use Illuminate\Http\Request;

class FamilielidController extends Controller
{
    //Toon alle familieleden + CRUD opties
    public function index(Request $request) {

        return view('familielid.index', [
        'familieleden' => Familielid::all()//->paginate(6)
    ]);
    }

    //Toon familielid aanmaken formulier
    public function show() {

        //ophalen data voor opties dropdowns
        $alleSoortLeden = soortLid::all();
        $alleFamilies = Familie::all();

        return view('familielid.create', ['alleSoortLeden' => $alleSoortLeden, 'alleFamilies' => $alleFamilies]);
    }

    //Opslaan van aangemaakt familie lid in database
    public function store(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'name' => 'required',
            'dateOfBirth' => 'required',
            'soort_lids_id' => 'required',
            'families_id' => 'required'
        ]);

        // if($request->hasFile('logo')) {
        //     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        // }

        // $formFields['user_id'] = auth()->id();

        // // dd($formFields);

        Familielid::create($formFields);

        return redirect('/familielid')->with('message', 'Nieuw lid succesvol aangemaakt!');

    }

    //Toon bewerken familielid formulier
    public function edit(Familielid $familielid) {

        //ophalen data voor opties dropdowns
        $alleSoortLeden = soortLid::all();
        $alleFamilies = Familie::all();

        return view('familielid.edit', ['familielid' => $familielid, 'alleSoortLeden' => $alleSoortLeden, 'alleFamilies' => $alleFamilies]);
    }

    // Opslaan geupdate familielid
    public function update(Request $request, Familielid $familielid) {
        // dd($request->file('logo'));

        // Make sure logged in user is owner
        // if($listing->user_id != auth()->id()) {
        //     abort('403', 'Unauthorized action');
        // }

        $formFields = $request->validate([
            'name' => 'required',
            'dateOfBirth' => 'required',
            'soort_lids_id' => 'required',
            'families_id' => 'required'
        ]);

        // if($request->hasFile('logo')) {
        //     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        // }

        // dd($formFields);

        $familielid->update($formFields);

        return back()->with('message', 'Familielid succesvol bijgewerkt!');

    }

    //Toon familielid verwijderen formulier
    public function warning(Familielid $familielid) {
        return view('familielid.delete', ['familielid' => $familielid]);
    }

    // Verwijder familielid
    public function destroy(Familielid $familielid) {
    
        // // Make sure logged in user is owner
        // if($listing->user_id != auth()->id()) {
        //     abort('403', 'Unauthorized action');
        // }
        
        $familielid->delete();
        return redirect('/familielid')->with('message', 'Familielid succesvol verwijderd');
    }

}
