<?php

namespace App\Http\Livewire;

use App\Models\Inquerito as ModelsInquerito;
use App\Models\Servico;
use Livewire\Component;

class Inquerito extends Component
{
    public $servicos;

    public $nome;
    public $empresa;
    public $email;
    public $telefone;
    public $servico = [];
    public $hora;
    public $by;
    public $texto;

    public $showMensagem;
    public $mensagem;

    protected $rules = [
        'nome' => 'required|min:8',
        'empresa' => 'nullable|min:8',
        'email' => 'required|email:rfc,dns,filter',
        'telefone' => 'required|digits:9',
        'servico' => 'required',
        'hora' => 'required',
        'by' => '',
        'texto' => 'required|min:15|max:5000'
    ];


    public function mount(Servico $servico)
    {
        $this->mensagem = null;
        $this->servicos = $servico::get();
    }

    public function render()
    {
        return view('livewire.inquerito');
    }

    public function submit()
    {
        $this->validate();

        $inquerito = new ModelsInquerito();
        $inquerito->nome = $this->nome;
        $inquerito->empresa = $this->empresa;
        $inquerito->email = $this->email;
        $inquerito->telefone = $this->telefone;
        $inquerito->servicos = implode(", ",$this->servico);
        $inquerito->hora = $this->hora;
        $inquerito->by = $this->by;
        $inquerito->texto = $this->texto;

        if ($inquerito->save()) {
            $this->mensagem = 'Mensagem enviada com sucesso !';
        }else{
            $this->mensagem = 'Não foi possivel enviar a mensagem. Por favor tente novamente mais tarde.';
        }
    }
}
