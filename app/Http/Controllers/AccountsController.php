<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AccountRequest;

use Crypt;
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
        $ranks = Rank::has('digits')->with('digits')->orderBy('rank')->get();
         
        return view('pages.home', compact('ranks'));
    }

    /**
     * Show the Account creation page.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $digits = Digit::select('digits')->orderBy('digits')->get();
        $ranks = Rank::select('rank')->orderBy('rank')->get();

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

        $email_account->email = $request->email;
        $email_account->password = $request->email_password;

        $steam_account->create(['steam_id' => $request->steam_id, 'username' => $request->username, 'password' => $request->email_password]);
        
        $steam_account = $steam_account->where('username', $request->username)->first();

        $steam_account->email_account()->save($email_account);

        $rank = Rank::where('rank', $request->rank)->first();
        $digits = Digit::where('digits', $request->digits)->first();

        if ($rank->digits()->where('digits', $request->digits) !== $request->digits) {
            $rank->digits()->save($digits);
        }

        $digits->steam_account()->save($steam_account);
        $rank->steam_account()->save($steam_account);

        return redirect(url('/dashboard'));
    }

    public function dashboard() {
        $steam_accounts = SteamAccount::with('rank')->get();
        $digits = Digit::get();
        $ranks = Rank::get();

        return view('mod.index', compact('steam_accounts', 'digits', 'ranks'));
    }
}
