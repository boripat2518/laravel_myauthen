<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    //
    protected $Result;

    public function __construct()
    {
        $this->Result = [
          'result'=>false,
          'data'=>null
        ];
    }

    public function category() {
      $aCategorys = DB::table('category')
        ->select('name','detail','image')
        ->get();
      if (count($aCategorys)>0) {
        $this->Result = [
          'result'=>true,
          'data'=>$aCategorys,
        ];
      }
      return response()->json($this->Result,200);
    }
}
