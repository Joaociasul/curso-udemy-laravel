<?php

namespace App\Http\Controllers;

use Facade\FlareClient\View;
use Illuminate\Http\Request;

class FornecedoresController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                "nome"=>"João",
                "cnpj" => "21.201.545/0001-71"
            ],
            1 =>  [
                "nome"=>"Pedro",
                "cnpj" => "22.202.455/0001-72"
            ],
            2 =>  [
                "nome"=>"Juca",
                "cnpj" => "23.203.556/0001-73"
            ],
            3 => [
                "nome"=>"João",
                "cnpj" => "21.201.545/0001-71"
            ],
            4 =>  [
                "nome"=>"Pedro",
                "cnpj" => "22.202.455/0001-72"
            ],
            5 =>  [
                "nome"=>"Juca",
                "cnpj" => "23.203.556/0001-73"
            ],
            6 => [
                "nome"=>"João",
                "cnpj" => "21.201.545/0001-71"
            ],
            7 =>  [
                "nome"=>"Pedro",
                "cnpj" => "22.202.455/0001-72"
            ],
            8 =>  [
                "nome"=>"Juca",
                "cnpj" => "23.203.556/0001-73"
            ],
            9 => [
                "nome"=>"João",
                "cnpj" => "21.201.545/0001-71"
            ],
            10 =>  [
                "nome"=>"Pedro",
                "cnpj" => "22.202.455/0001-72"
            ],
            11 =>  [
                "nome"=>"Juca",
                "cnpj" => "23.203.556/0001-73"
            ],
            12 => [
                "nome"=>"João",
                "cnpj" => "21.201.545/0001-71"
            ],
            13 =>  [
                "nome"=>"Pedro",
                "cnpj" => "22.202.455/0001-72"
            ],
            14 =>  [
                "nome"=>"Juca",
                "cnpj" => "23.203.556/0001-73"
            ],
            15 => [
                "nome"=>"João",
                "cnpj" => "21.201.545/0001-71"
            ],
            16 =>  [
                "nome"=>"Pedro",
                "cnpj" => "22.202.455/0001-72"
            ],
            17 =>  [
                "nome"=>"Juca",
                "cnpj" => "23.203.556/0001-73"
            ],
           

        ];
        // $fornecedores = [];
        return view('app.fornecedores.index',compact('fornecedores'));
    }
}
