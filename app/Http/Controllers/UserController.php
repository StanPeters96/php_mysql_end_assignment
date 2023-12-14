<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Faker\Provider\UserAgent;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //Toon alle users + CRUD opties
    public function index(Request $request) {
        return view('users.index', [
        'users' => User::all()//->paginate(6)
    ]);
    }

    // toon gebruiker aanmaken formulier
    public function show() {
        return view('users.create');
    }

    //Opslaan van aangemaakt gebruiker in database
    public function store(Request $request) {
        $formFields = $request->validate([
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed'
        ]);

        //hashing password
        $formFields['password'] = bcrypt($formFields['password']);

        //gebruiker in database aanmaken
        $user = User::create($formFields);

        return redirect('/users')->with('message', 'Nieuwe user succesvol aangemaakt');
    }

    //Toon bewerken user formulier
    public function edit(User $user) {

        return view('users.edit', ['user' => $user]);
    }

    // Opslaan geupdate user
    public function update(Request $request, User $user) {
        // dd($request->file('logo'));

        // Make sure logged in user is owner
        // if($listing->user_id != auth()->id()) {
        //     abort('403', 'Unauthorized action');
        // }

        $formFields = $request->validate([
            'name' => 'required',
            'email' => 'required'
        ]);

        // if($request->hasFile('logo')) {
        //     $formFields['logo'] = $request->file('logo')->store('logos', 'public');
        // }

        // dd($formFields);

        $user->update($formFields);

        return back()->with('message', 'User succesvol bijgewerkt!');

    }

    //Toon user verwijderen formulier
    public function warning(User $user) {
        return view('users.delete', ['user' => $user]);
    }

    // Verwijder user
    public function destroy(User $user) {
    
        // // Make sure logged in user is owner
        // if($listing->user_id != auth()->id()) {
        //     abort('403', 'Unauthorized action');
        // }
        
        $user->delete();
        return redirect('/users')->with('message', 'User succesvol verwijderd');
    }

    //logout user
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('message', 'Uw bent uitgelogd!');
    }

    //Toon login formulier
    public function login() {
        return view('users.login');
    }

    //Login user
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);

        if(auth()->attempt($formFields)) {
            $request->session()->regenerate();

            return redirect('/')->with('message', 'Login succesvol!');
        }

        return back()->withErrors(['email' => 'Onjuiste gegevens'])->onlyInput('email');
    }
}
