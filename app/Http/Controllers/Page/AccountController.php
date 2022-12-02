<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AccountController extends Controller
{
    public function index(){
        $account = Auth::user()->all();
        return view('pages.account', compact('account'));
        // return view('pages.account');
    }
}