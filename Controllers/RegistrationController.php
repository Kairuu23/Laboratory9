<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    // Show the registration form
    public function showForm()
    {
        return view('register');
    }

    // Handle form submission
    public function handleForm(Request $request)
    {
        // Validate form input
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
        ]);

        // Pass submitted data to the success page
        return view('success', [
            'name' => $validatedData['name'],
            'email' => $validatedData['email']
        ]);
    }
}
