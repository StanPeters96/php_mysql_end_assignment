<?php

namespace App\Http\Controllers;

use App\Models\Familie;
use Illuminate\Http\Request;

class FamilieController extends Controller
{
    //Toon alle families + CRUD opties
    public function index(Request $request) {

        return view('familie.index', [
        'families' => Familie::all()//->paginate(6)
    ]);
    }

    //Toon familielid aanmaken formulier
    public function show() {
        return view('familie.create');
    }

    //Opslaan van aangemaakte familie in database
    public function store(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'name_family' => 'required',
            'adress' => 'required'
        ]);

        // if($request->hasFile('logo')) {
        //     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        // }

        // $formFields['user_id'] = auth()->id();

        // // dd($formFields);

        Familie::create($formFields);

        return redirect('/familie')->with('message', 'Nieuwe familie succesvol aangemaakt!');

    }

    //Toon bewerken familielid formulier
    public function edit(Familie $familie) {

        return view('familie.edit', ['familie' => $familie]);
    }

    // Opslaan geupdate familie
    public function update(Request $request, Familie $familie) {
        // dd($request->file('logo'));

        // Make sure logged in user is owner
        // if($listing->user_id != auth()->id()) {
        //     abort('403', 'Unauthorized action');
        // }

        $formFields = $request->validate([
            'name_family' => 'required',
            'adress' => 'required'
        ]);

        // if($request->hasFile('logo')) {
        //     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        // }

        // dd($formFields);

        $familie->update($formFields);

        return back()->with('message', 'Familie succesvol bijgewerkt!');

    }

    //Toon familielid verwijderen formulier
    public function warning(Familie $familie) {
        return view('familie.delete', ['familie' => $familie]);;
    }

    // Verwijder familielid
    public function destroy(Familie $familie) {
    
        // // Make sure logged in user is owner
        // if($listing->user_id != auth()->id()) {
        //     abort('403', 'Unauthorized action');
        // }
        
        $familie->delete();
        return redirect('/familie')->with('message', 'Familie succesvol verwijderd');
    }

}
