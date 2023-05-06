<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TopController extends Controller {
  public function index( Request $request ) {
    $sampleValue = "sample テキストです";

    $records = DB::connection("mysql") -> select("SELECT * From items");
    // dd( $records );
    // dd( $records[0] -> name );
    $name = $records[0] -> name;

    // $insertResult = DB::connection("mysql") -> insert("INSERT INTO items (name, price) VALUES ('メロン', 2000)");
    // dd( $insertResult );

    // $updateResult = DB::connection("mysql") -> update("UPDATE items SET price = 600 WHERE name = 'りんご'");
    // dd( $updateResult );

    // $deleteResult = DB::connection("mysql") -> delete("DELETE FROM items WHERE name = 'りんご'");
    // dd( $deleteResult );

    return view( "top/index", [ "sampleValue" => $sampleValue ] );
  }
}