<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('editProfile');
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'fname' => 'required|alpha',
            'email' => ['required', 'email:rfc,dns', 'unique:users', 'email'],
            'NIK'=>'required|min:8|max:8'
        ]);

        auth()->user()->update($validatedData);

        return redirect('profile')->with('message', 'Profile has been updated');
    }
}
