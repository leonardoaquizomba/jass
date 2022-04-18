<?php

namespace App\View\Components;

use App\Models\Servico as ModelsServico;
use Illuminate\View\Component;

class Servico extends Component
{
    public $servicos;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->servicos = ModelsServico::get()->take(6);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.servico');
    }
}
