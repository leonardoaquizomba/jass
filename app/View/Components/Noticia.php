<?php

namespace App\View\Components;

use Illuminate\View\Component;
use TCG\Voyager\Models\Post;

class Noticia extends Component
{
    public $noticias;


    public function __construct()
    {
        $this->noticias = Post::get()->take(3);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.noticia');
    }
}
