<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Dev4Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $data)
    {

        if(!$data->filled('numbers5')){
           return view('dev.dev4' );
        }

        $numeros6 = explode(',',$data->numbers5);

        $desarrollo3 = $this->comparationOrg ($numeros6);
        return view('dev.dev4')->with(['desa'=>$desarrollo3]);
    }

    function comparationOrg ($numeros6)
    {
        $total_sum = 0;
        for($x=0;$x< count($numeros6) ;$x++){
            $a = $numeros6[$x];
            $b = isset($numeros6[$x+1])? $numeros6[$x+1]:null ;
            $m = 0;
            if($b != null){
                if($a > $b){
                    $m = $a - $b;
                }
                elseif( $a < $b){
                    $m = $b - $a;
                }
                $total_sum += $m;
            }
        }
        return $total_sum;
    }

}
