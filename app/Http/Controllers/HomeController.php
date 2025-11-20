<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\LaporanExport;
use Maatwebsite\Excel\Facades\Excel;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        return view('home');
    }

}



