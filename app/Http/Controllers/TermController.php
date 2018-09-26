<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
// use App\TermAndCondition;

class TermController extends Controller
{
    //
    protected $Result;

    public function __construct()
    {
        $this->Result = [
          'result'=>false,
          'term'=>null
        ];
    }

    public function index() {

      $sTerm = DB::table('terms')->latest()->value('term');
      if (! empty($sTerm)) {
        $this->Result = [
          'result'=>true,
          'term'=>$sTerm,
        ];
      }
      return view('term',$this->Result);

    }

    public function api() {
      $sTerm = DB::table('terms')->latest()->value('term');
      if (! empty($sTerm)) {
        $this->Result = [
          'result'=>true,
          'term'=>$sTerm,
        ];
      }
      return response()->json($this->Result,200);
    }
/*
    public function index() {
      $sTerm = TermAndCondition::getTerm();
      return view('terms',['terms'=>$sTerm]);
    }

    public function api() {
      $sTerm = TermAndCondition::getTerm();
      if (! empty($sTerm)) {
        $this->Result = [
          'result'=>true,
          'term'=>$sTerm,
        ];
      }
      return response()->json($this->Result,200);
    }
*/
}
