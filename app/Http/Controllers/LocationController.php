<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LocationController extends Controller
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

    public function province($lang) {
      $sField='PROVINCE_NAME';
      $aProvince=array();
      if ($lang != 'th') $sField='PROVINCE_NAME_ENG';
      $aDatas = DB::table('province')
        ->select($sField)
        ->orderby('PROVINCE_CODE')
        ->get();
      if (count($aDatas)>0) {
        foreach ($aDatas as $aData) {
          $aProvince[]=trim($aData->$sField);
        }
        $this->Result = [
          'result'=>true,
          'data'=>$aProvince,
        ];
      }
      return response()->json($this->Result,200);
    }
}
