<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Digit;

class DigitsController extends Controller
{
    public function create() {
        return view('mod.digits.create');
    }

    public function store(Request $request) {
        Digit::create($request->all());

        return redirect(url(''));
    }
}
