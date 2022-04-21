<div>
    @if (!is_null($mensagem))
    <p class="text-center">{{ $mensagem }}</p>
    @else
    <form id="quote-request" class="form-quote">
        <div class="form-group row">
            <div class="form-field col-md-6 form-m-bttm">
                <input name="nome" wire:model.lazy='nome' type="text" placeholder="Nome *"
                    class="form-control required">
                @error('nome') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-field col-md-6">
                <input name="empresa" wire:model.lazy='empresa' type="text" placeholder="Empresa" class="form-control">
                @error('empresa') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="form-field col-md-6 form-m-bttm">
                <input name="email" type="email" wire:model.lazy='email' placeholder="E-mail *"
                    class="form-control required email">
                @error('email') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-field col-md-6">
                <input name="telefone" wire:model.lazy='telefone' type="text" placeholder="Telefone *"
                    class="form-control required">
                @error('telefone') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <h4>Serviços de seu interesse</h4>
        <div class="form-group row">
            <ul class="clearfix form-field">
                @forelse ($servicos as $servico)
                <li class="col-sm-6">
                    <input type="checkbox" wire:model.lazy='servico' name="servico[]" value="{{ $servico->nome }}">
                    <span>{{ $servico->nome }}</span>
                </li>
                @empty

                @endforelse
                @error('servico') <span class="error text-danger">{{ $message }}</span> @enderror
            </ul>
        </div>
        <div class="form-group row">
            <div class="form-field col-md-6">
                <p>Melhor hora para o contactar</p>
                <select name="hora" class="required" wire:model.lazy='hora'>
                    <option value="">Selecione uma opcção</option>
                    <option value="09:00 - 12:00">09:00 - 12:00</option>
                    <option value="12:00 - 15:00">12:00 - 15:00</option>
                    <option value="15:00 - 18:00">15:00 - 18:00</option>
                </select>
                @error('hora') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-field col-md-6">
                <p>Como ouviu falar de nos</p>
                <select name="by" wire:model.lazy='by'>
                    <option value="">Selecione uma opcção</option>
                    <option value="Amigos">Amigos</option>
                    <option value="Facebook">Facebook</option>
                    <option value="Google">Google</option>
                    <option value="Colegas">Colegas</option>
                    <option value="Outro">Outro</option>
                </select>
                @error('by') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="form-field col-md-12">
                <textarea name="texto" wire:model.lazy='texto' placeholder="Mensagem *"
                    class="txtarea form-control required"></textarea>
                @error('texto') <span class="error text-danger">{{ $message }}</span> @enderror
            </div>
        </div>
        <input type="text" class="hidden" name="form-anti-honeypot" value="">
        <button type="button" wire:click='submit' wire:loading.attr='disabled' class="btn">Enviar</button>
        <div class="form-results"></div>
    </form>
    @endif
</div>
