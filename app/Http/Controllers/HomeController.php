<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function adminIndex(Request $req)
    {
      return view('home.admin_index');
    }
    function customerIndex(Request $req)
    {
      return view('home.customer_index');
    }
}
