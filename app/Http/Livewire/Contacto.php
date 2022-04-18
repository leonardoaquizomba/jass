<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Contacto extends Component
{
    public $nome;
    public $email;
    public $telefone;
    public $assunto;
    public $texto;

    public $mensagem;
    public $showMensagem;

    public function mount()
    {
        $this->showMensagem = false;
        $this->mensagem = "Mensagem enviada com sucesso !";
    }

    protected $rules = [
        'nome' => 'required|min:6',
        'email' => 'required',
        'telefone' => 'required',
        'assunto' => 'required',
        'texto' => 'required'
    ];

    public function render()
    {
        return view('livewire.contacto');
    }


    public function salvar()
    {
        $this->showMensagem = true;
        $this->validate();
    }
}
