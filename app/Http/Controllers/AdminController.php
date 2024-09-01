<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin');
    }
    public function operator()
    {
        echo 'Admin Operator';
        echo '<br>';
        echo Auth::user()->name;
        echo '<br>';
        echo "<a href='/logout'>Logout >></a>";
    }
    public function keuangan()
    {
        echo 'Admin Keuangan';
        echo '<br>';
        echo Auth::user()->name;
        echo '<br>';
        echo "<a href='/logout'>Logout >></a>";
    }
    public function marketing()
    {
        echo 'Admin Marketing';
        echo '<br>';
        echo Auth::user()->name;
        echo '<br>';
        echo "<a href='/logout'>Logout >></a>";
    }
}
