<?php

namespace App\Http\Controllers;

use App\Models\Pesquisa;
use App\Models\Projecto;
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
        $servico = Servico::where("id", $id)->first();

        if ($servico != null) {
            return view("site.servico_info", compact("servico"));
        }

        return redirect()->back();
    }

    public function sobre()
    {
        return view("site.sobre");
    }

    public function projectos()
    {
        return view("site.projecto");
    }

    public function projecto_info($id)
    {
        $projecto = Projecto::where('id', $id)->first();

        if (is_null($projecto)) {
            return redirect()->back();
        }

        return view("site.projecto_info", compact("projecto"));
    }

    public function contacto()
    {
        return view("site.contacto");
    }

    public function inquerito()
    {
        return view("site.inquerito");
    }

    public function conhecimento()
    {
        return view("site.centro_conhecimento");
    }

    public function conhecimento_info($id)
    {

        $pesquisa = Pesquisa::where('id', $id)->first();
        if (is_null($pesquisa)) {
            return redirect()->back();
        }

        return view("site.centro_conhecimento_info", compact('pesquisa'));
    }

    public function opurtinidade()
    {
        return view("site.opurtinidade");
    }
}