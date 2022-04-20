<div>
    @if ($showMensagem)
    <p class="text-center">{{ $mensagem }}</p>
    @else
    <form id="contact-us" class="form-message">
        @csrf
        <div class="form-results"></div>
        <div class="form-group row">
            <div class="form-field col-md-6 form-m-bttm">
                <input name="nome" wire:model.lazy='nome' type="text" placeholder="Nome *"
                    class="form-control required">
                @error('nome') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-field col-md-6">
                <input name="email" wire:model.lazy='email' type="email" placeholder="Email *"
                    class="form-control required email">
                @error('email') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="form-field col-md-6 form-m-bttm">
                <input name="telefone" wire:model.lazy='telefone' type="text" placeholder="Telefone"
                    class="form-control required">
                @error('telefone') <span class="error">{{ $message }}</span> @enderror
            </div>
            <div class="form-field col-md-6">
                <input name="assunto" wire:model.lazy='assunto' type="text" placeholder="Assunto"
                    class="form-control required">
                @error('assunto') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <div class="form-group row">
            <div class="form-field col-md-12">
                <textarea name="texto" wire:model.lazy='texto' placeholder="Mensagem *"
                    class="txtarea form-control required"></textarea>
                @error('texto') <span class="error">{{ $message }}</span> @enderror
            </div>
        </div>
        <input type="text" class="hidden" name="form-anti-honeypot" value="">
        <button type="submit" wire:click='submit' wire:loading.attr='disabled'
            class="btn solid-btn sb-h">Enviar</button>
    </form>
    @endif
</div>
