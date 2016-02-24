<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class DatabaseController extends Controller

// I used four methods to display the data: home, subcat, item, and subitem.
// The home method displays the main categories (links) on the welcome blade view.
// The subcat method displays the subcategories (links) on the subcat blade view.
// The item method displays the items from the item blade view.
// The subitem method displays the items from the item blade view (using the subcat id).
// 02/23/16. Changed the table structure from one table called menu to two tables
//           called items and catsubcat.
{
    function home () {
        $contents=DB::table('catsubcat')->where('type', 'cat')->get();
        return view('welcome', compact('contents'));
    }

    function subcat ($id) {
        $contents=DB::table('catsubcat')->where([ ['cat_id', $id], ['type', 'subcat'] ])->get();
        return view('subcat', compact('contents'));
    }

    function item ($id) {

        $contents=DB::table('items')->where('cat_id', $id)->get();
        return view('item', compact('contents'));
    }

    function subitem ($id) {
        $contents=DB::table('items')->where('cat_id', $id)->get();
        return view('item', compact('contents'));
    }

    /*
     * 2/22/16. Added this new Delete function (thanks to Coby and Jordan).
     * To cascade delete from the welcome blade view, all three lines will delete records.
     * To cascade delete from the subcat blade view, only the last two lines will delete records.
     * To delete items from the item blade view, only the last line will delete records.
     * 2/23/16. Changed delete to work with the two-table structure: items and catsubcat.
     */

    public function delete($id){
        DB::table('items')->where('id', $id)->delete();
        return back();
    }

    public function destroy($id){

    DB::table('catsubcat')->where('id', $id)->delete();
    DB::table('catsubcat')->where('cat_id', $id)->delete();
    DB::table('items')->where('cat_id', $id)->delete();

    if ($id = 1)
    {
        DB::table('items')->where('cat_id', 13)->delete();
        DB::table('items')->where('cat_id', 14)->delete();
    }

    if ($id = 3)
    {
        DB::table('items')->where('cat_id', 15)->delete();
        DB::table('items')->where('cat_id', 16)->delete();
    }

    if ($id = 6) {
        DB::table('items')->where('cat_id', 17)->delete();
        DB::table('items')->where('cat_id', 18)->delete();
        DB::table('items')->where('cat_id', 19)->delete();
    }

        return back();
    }
}

// Other thoughts and code I didn't get working...

//if ($id = 1)
//{
//    DB::table('items')->where('cat_id', 13)->delete();
//    DB::table('items')->where('cat_id', 14)->delete();
//    DB::table('catsubcat')->where('id', $id)->delete();
//    DB::table('catsubcat')->where('cat_id', $id)->delete();
//}
//
//if ($id = 3)
//{
//    DB::table('items')->where('cat_id', 15)->delete();
//    DB::table('items')->where('cat_id', 16)->delete();
//    DB::table('catsubcat')->where('id', $id)->delete();
//    DB::table('catsubcat')->where('cat_id', $id)->delete();
//}
//
//elseif ($id = 6)
//{
//    DB::table('items')->where('cat_id', 17)->delete();
//    DB::table('items')->where('cat_id', 18)->delete();
//    DB::table('items')->where('cat_id', 19)->delete();
//    DB::table('catsubcat')->where('id', $id)->delete();
//    DB::table('catsubcat')->where('cat_id', $id)->delete();
//}
//else
//        $cat_id = DB::table('catsubcat')->where('cat_id', $id)->pluck('id');
//        DB::table('items')->where('cat_id', 13)->delete();
//        DB::table('catsubcat')->where('id', $id)->delete();
//        DB::table('menu')->where('id', $id)->delete();
//        DB::table('menu')->where('cat_id', $id)->delete();
//        DB::table('menu')->where('subcat_id', $id)->delete();
//$contents=DB::table('items')->where([ ['cat_id', $id], ['type', 'item'] ])->get();
//        if ($id == 1 or $id == 3 or $id == 6)
//        {
//
//        }
//
//        if($id>=13){
//            DB::table('menu')->where('id', $id)->delete();
//        }
//        elseif($id > 18){
//            DB::table('menu')->where('id', $id)->delete();
//        }
//public function delete($id)
//{
//    DB::table('menu')-where([ ['cat_id', $id], ['type', 'item'] ])->delete();
//    return back();
//}
//$contents=DB::table('menu')->where([ ['cat_id', $id], ['type', 'item'] ])->get();
//$contents=DB::table('menu')->get();
//$contents=DB::table('menu')->where('subcat_id', $id)->get();
//$contents=DB::table('menu')->get();
//$contents=DB::table('menu')->where([ ['cat_id', $id], ['type', 'item'] ])->get();
//$contents=DB::table('menu')->get();