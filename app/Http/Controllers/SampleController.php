<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SampleController extends Controller {
  public function index( Request $request ) {
    $sampleValue = "sample2 テキストです";

    // $records = DB::connection("mysql") -> insert("INSERT INTO users (email, name, password) VALUES ('1@example.com', '1人目', 'a'), ('2@example.com', '2人目', 'b'), ('3@example.com', '3人目', 'c')");
    // dd( $records );

    $deleteResult = DB::connection("mysql") -> delete("DELETE FROM users WHERE name = '1人目'");
    dd( $deleteResult );

    return view( "/sample/index", [ "sampleValue" => $sampleValue ] );
  }
}