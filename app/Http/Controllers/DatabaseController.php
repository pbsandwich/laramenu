<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DatabaseController extends Controller
{
    function home () {
        $contents=DB::table('menu')->get();
        return view('welcome', compact('contents'));
    }

    function subcat () {
        $contents=DB::table('menu')->get();
        return view('subcat', compact('contents'));
    }

    function item () {
        $contents=DB::table('menu')->get();
        return view('item', compact('contents'));
    }
}
