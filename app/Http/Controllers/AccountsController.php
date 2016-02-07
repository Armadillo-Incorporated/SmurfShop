<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AccountRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\SteamAccount;
use App\EmailAccount;
use App\Rank;
use App\Digit;

class AccountsController extends Controller
{
    /**
     * Show the Available Steam Accounts.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        return view('pages.home');
    }

    /**
     * Show the Account creation page.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $digits = Digit::select('digits')->get();
        $ranks = Rank::select('rank')->get();

        return view('mod.create', compact('digits', 'ranks'));
    }

    /**
     * Persist Account to database.
     *
     * @return 
     */
    public function store(AccountRequest $request) {
        
        $steam_account = new SteamAccount;
        $email_account = new EmailAccount;
        $digit = Digit::where('digits', $request->digits)->first();
        $rank = Rank::where('rank', $request->rank)->first();


        $email_account->email = $request->email;
        $email_account->password = bcrypt($request->email_password);

        $steam_account->create(['steam_id' => $request->steam_id, 'username' => $request->username, 'password' => bcrypt($request->steam_password)]);
        
        $steam_account = $steam_account->where('username', $request->username)->first();

        $steam_account->email_account()->save($email_account);

        $digit->steam_account()->save($steam_account);

        $rank->steam_account()->save($steam_account);
        
        return redirect(url('/'));
    }
}
