<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Contacto as ContactForm;

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
        $this->mensagem = "";
    }

    protected $rules = [
        'nome' => 'required|min:8',
        'email' => 'required|email:rfc,dns,filter',
        'telefone' => 'required|digits:9',
        'assunto' => 'required|min:10',
        'texto' => 'required|min:15|max:5000'
    ];

    public function render()
    {
        return view('livewire.contacto');
    }


    public function submit()
    {
        $this->validate();

        $this->showMensagem = true;

        $contacto = new ContactForm();
        $contacto->nome = $this->nome;
        $contacto->email = $this->email;
        $contacto->telefone = $this->telefone;
        $contacto->assunto = $this->assunto;
        $contacto->texto = $this->texto;
        if($contacto->save()){
            $this->mensagem = "Mensagem enviada com sucesso !";
        }else{
            $this->mensagem = "Não foi possivel enviar a sua mensagem. Por favor tente novamente mais tarde!";
        }
    }
}
