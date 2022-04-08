<?php

namespace App\Http\Controllers;

use App\Models\Servico;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index()
    {
        return view("site.index");
    }

    public function servicos()
    {
        return view("site.servico");
    }

    public function servico_info($id)
    {
        $servico = Servico::where("id",$id)->first();

        if ($servico != null) {
            return view("site.servico_info",compact("servico"));
        }
    }

    public function sobre()
    {
        return view("site.sobre");
    }

    public function projectos()
    {
        return view("site.projecto");
    }

    public function contacto()
    {
        return view("site.contacto");
    }

    public function inquerito(){
        return view("site.inquerito");
    }
}
