<?php

namespace App\Http\Controllers;

use App\Models\Domain;
use App\Models\Owner;


use Illuminate\Http\Request;

class DashboardController extends Controller
{
    
    public function index()
    {
        $domain = Domain::with('owner')->get();
        
        return view('dashboard', ['domain'=> $domain]);
    }
}
