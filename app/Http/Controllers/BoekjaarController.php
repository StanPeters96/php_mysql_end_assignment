<?php

namespace App\Http\Controllers;

use App\Models\Boekjaar;
use Illuminate\Http\Request;

class BoekjaarController extends Controller
{
    //Toon alle boekjaren + CRUD opties
    public function index(Request $request) {

        return view('boekjaar.index', [
        'boekjaren' => Boekjaar::all()//->paginate(6)
    ]);
    }

    //Toon boekjaar aanmaken formulier
    public function show() {
        return view('boekjaar.create');
    }

    //Opslaan van aangemaakt boekjaar in database
    public function store(Request $request) {
        // dd($request);
        $formFields = $request->validate([
            'jaar' => 'required'
        ]);

        // if($request->hasFile('logo')) {
        //     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        // }

        // $formFields['user_id'] = auth()->id();

        // // dd($formFields);

        Boekjaar::create($formFields);

        return redirect('/boekjaar')->with('message', 'Nieuw boekjaar succesvol aangemaakt!');

    }

    //Toon bewerken boekjaar formulier
    public function edit(Boekjaar $boekjaar) {

        return view('boekjaar.edit', ['boekjaar' => $boekjaar]);
    }

    // Opslaan geupdate boekjaar
    public function update(Request $request, Boekjaar $boekjaar) {
        // dd($request->file('logo'));

        // Make sure logged in user is owner
        // if($listing->user_id != auth()->id()) {
        //     abort('403', 'Unauthorized action');
        // }

        $formFields = $request->validate([
            'jaar' => 'required'
        ]);

        // if($request->hasFile('logo')) {
        //     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        // }

        // dd($formFields);

        $boekjaar->update($formFields);

        return back()->with('message', 'Boekjaar succesvol bijgewerkt!');

    }

    //Toon boekjaar verwijderen formulier
    public function warning(Boekjaar $boekjaar) {
        return view('boekjaar.delete', ['boekjaar' => $boekjaar]);
    }

    // Verwijder boekjaar
    public function destroy(Boekjaar $boekjaar) {
    
        // // Make sure logged in user is owner
        // if($listing->user_id != auth()->id()) {
        //     abort('403', 'Unauthorized action');
        // }
        
        $boekjaar->delete();
        return redirect('/boekjaar')->with('message', 'Boekjaar succesvol verwijderd');
    }

}
