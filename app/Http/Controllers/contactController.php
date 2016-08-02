<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class contactController extends Controller
{
    public function index()
    {
        $name = 'richard';

        $persons = [
            'richard',
            'felipe',
            'nilda',
            'delton'
        ];

        return view('contact.contact', compact('name', 'persons'));
    }
}
