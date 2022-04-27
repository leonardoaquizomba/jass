<?php

namespace App\View\Components;

use App\Models\Parceiro as ModelsParceiro;
use Illuminate\View\Component;

class Parceiro extends Component
{
    public $parceiros;

    public function __construct()
    {
        $this->parceiros = ModelsParceiro::get();
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.parceiro');
    }
}
