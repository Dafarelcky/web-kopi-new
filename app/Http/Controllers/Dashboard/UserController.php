<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function editUser(string $id)
    {
        return view('dashboard.section.admin.edit', [
            'user' => User::find($id)
        ]);
    }

    public function updateUser(Request $request, string $id)
    {
        $rules = [
            'username' => 'required',
            'password' => 'required|min:8',
        ];

       

        $validatedData = $request->validate($rules);

        $contact = User::findOrFail($id);

        $contact->update($validatedData);

        return redirect('/dashboard');

    }
}
