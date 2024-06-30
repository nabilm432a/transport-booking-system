<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileUpdateRequest;
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

    public function update_contact() {
        //
    }

    public function view_passport_form() {
        return view('profile.passport');
    }

    public function update_passport() {
        //
    }
}
