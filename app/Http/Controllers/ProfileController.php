<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{
    public function view_contact_form() {
        return view('profile.contact');
    }

    public function update_contact(Request $request) {
        try {
            auth()->user()->update([
                'contact' => $request->input('contact'),
            ]);
            $message = "Successfully Modified";
        } catch (QueryException $e) {
            $message = "An error occurred trying to edit the data";
        }
        return redirect()->route('profile')->with('message', $message);
    }

    public function view_passport_form() {
        return view('profile.passport');
    }

    public function update_passport(Request $request) {
        $request->validate([
            'passport' => 'required|string|max:255',
        ]);

        try {
            auth()->user()->update([
                'passport' => $request->input('passport'),
            ]);
            $message = "Successfully Modified";
        } catch (QueryException $e) {
            $message = "An error occurred trying to edit the data";
        }
        return redirect()->route('profile')->with('message', $message);
    }

    public function destroy()
    {
        $user = Auth::user();
        Auth::logout();

        $user->delete();

        return redirect()->route('home');
    }
}
