<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeviceController extends Controller
{
     public function index(){
        $device = Auth::user()->all();
        return view('pages.device', compact('device'));
    }
}