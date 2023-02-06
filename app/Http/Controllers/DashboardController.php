<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;

class DashboardController extends Controller
{
    public function index()
    {
        $employes = Employe::orderBy('id', 'desc')->get();
        $count = $employes->count();

        return view ('dashboard.index')->with(compact('employes', 'count'));
    }
}
