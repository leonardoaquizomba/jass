<div class="wgs-box wgs-quoteform">

    <h3 class="text-center wgs-heading">Contato rápido</h3>
    <div class="wgs-content">
        @if ($showMensagem)
        <p class="text-center">{{ $mensagem }}</p>
        @else
        <p class="text-center">Caso tenha alguma dúvida ou queira agendar uma sessão entre em contato conosco.</p>
        <form id="contact-us" class="form-quote">
            @csrf
            <div class="form-results"></div>
            <div class="form-group">
                <div class="form-field">
                    <input name="nome" wire:model.lazy='nome' type="text" placeholder="Nome *"
                        class="form-control required">
                    @error('nome') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="form-field">
                    <input name="email" wire:model.lazy='email' type="email" placeholder="Email *"
                        class="form-control required email">
                    @error('email') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="form-field form-m-bttm">
                    <input name="telefone" wire:model.lazy='telefone' type="text" placeholder="Telefone"
                        class="form-control required">
                    @error('telefone') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="form-field">
                    <input name="contact-service" wire:model.lazy='assunto' type="text"
                        placeholder="Serviço Interessado" class="form-control required">
                    @error('assunto') <span class="error">{{ $message }}</span> @enderror

                </div>
            </div>
            <div class="form-group">
                <div class="form-field">
                    <textarea name="texto" wire:model.lazy='texto' placeholder="Mensagem *"
                        class="txtarea form-control required"></textarea>
                    @error('texto') <span class="error">{{ $message }}</span> @enderror
                </div>
            </div>
            <input type="text" class="hidden" name="form-anti-honeypot" value="">
            <button type="submit" wire:click='submit' wire:loading.attr='disabled'
                class="btn btn-alt sb-h">Enviar</button>
        </form>
        @endif
    </div>
</div>
