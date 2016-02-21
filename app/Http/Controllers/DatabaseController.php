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
        $contents=DB::table('menu')->where('type', 'cat')->get();
        return view('welcome', compact('contents'));
    }

    function subcat ($id) {
        $contents=DB::table('menu')->where([ ['cat_id', $id], ['type', 'subcat'] ])->get();
        return view('subcat', compact('contents'));
    }

    function item ($id) {
        $contents=DB::table('menu')->where([ ['cat_id', $id], ['type', 'item'] ])->get();
        return view('item', compact('contents'));
    }

    function subitem ($id) {
        $contents=DB::table('menu')->where('subcat_id', $id)->get();
        return view('item', compact('contents'));
    }
}

//$contents=DB::table('menu')->where([ ['cat_id', $id], ['type', 'item'] ])->get();
//$contents=DB::table('menu')->get();
//$contents=DB::table('menu')->where('subcat_id', $id)->get();
//$contents=DB::table('menu')->get();
//$contents=DB::table('menu')->where([ ['cat_id', $id], ['type', 'item'] ])->get();
//$contents=DB::table('menu')->get();