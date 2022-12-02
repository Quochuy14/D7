<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ReportController extends Controller
{
    public function index(){
        $report = Auth::user()->all();
        return view('pages.report', compact('report'));
    }

    public function desReport(){
        return view('pages.descripsion.desReport');
    }
}