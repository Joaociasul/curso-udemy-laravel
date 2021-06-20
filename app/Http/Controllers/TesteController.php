<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function index($p1,$p2)
    {
        // echo "A soma de $p1 + $p2 é ". ($p1+$p2);
        // $arr = [
        //     "x"=>$p1,
        //     "y" => $p2,
        //     "z" => ($p1 + $p2)
        // ];
        $soma = $p1 + $p2;
        // return view('site.teste',$arr);
        // return view('site.teste' , compact('p1','p2','soma')); // compact
        return view('site.teste')->with('p1',$p1)->with('p2',$p2)->with('soma',$soma);
        // with('nomeVarLadoView', 'nomeVar')
    }
}
