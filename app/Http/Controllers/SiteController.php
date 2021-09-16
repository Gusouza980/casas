<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imovel;
use App\Models\Configuracao;

class SiteController extends Controller
{
    //
    public function index(){
        $configuracao = Configuracao::first();
        $imoveis = Imovel::where("ativo", true)->get();
        return view("site.index", ["imoveis" => $imoveis, "configuracao" => $configuracao]);
    }

    public function detalhe($slug){
        $imovel = Imovel::where("slug", $slug)->first();
        return view("site.detalhe", ["imovel" => $imovel]);
    }
}
