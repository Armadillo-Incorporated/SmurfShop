<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Rank;

class RanksController extends Controller
{
    public function create() {
        return view('mod.ranks.create');
    }

    public function store(Request $request) {
        $this->validate($request, [
            'rank' => 'required|unique:ranks',
        ]);
        
        Rank::create($request->all());

        return redirect(url('/dashboard'));
    }
}
