<html>
<div class="mt-5">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="font-family-roboto col-md-5 card mx-auto  opacity-100 shadow-lg text-light"
        style="background-color: #f5f5f5">
        <h3 class="card-title mt-5 text-center text text-success"><strong>Cadastrar Sensor</strong></h3>

        <div class="card-body mx-4">
            <form wire:submit.prevent="store">
                <div class="mt-1 mb-3 text text-success">
                    <label for="nome" class="form-label">Tipo</label> {{-- placeholder: colocar um texto de exemplo
                    dentro de uma caixa de texto --}}
                    <input type="text" class="form-control" id="tipo" name="tipo" wire:model.defer="tipo">
                </div>

                <div class="mt-1 mb-3 text text-success">
                    <label for="descricao" class="form-label">Descrição</label> {{-- placeholder: colocar um texto de exemplo
                    dentro de uma caixa de texto --}}
                    <input type="text" class="form-control" id="descricao" name="descricao"
                        wire:model.defer="descricao">
                </div>

                <div class="mt-1 mb-3 text text-success">
                    <label for="status" class="form-label">Status</label> {{-- placeholder: colocar um texto de exemplo
                    dentro de uma caixa de texto --}}
                    <input type="text" class="form-control" id="status" name="status" wire:model.defer="status">
                </div>

                <div class="mt-1 mb-3 text text-success">
                    <label for="nome" class="form-label" text text-success>Ambiente</label>
                    <div class="input-group">
                        <select class="form-select" aria-label="Default select example" wire:model.defer="ambiente">
                            <option selected>Selecione o ambiente</option>
                            <option value="professor">Nativo</option>
                            <option value="secretaria">Inativo</option>
                        </select>
                    </div>
                </div>
                <div class="mb-3 text-center">
                    <button type="submit" class="btn text-light col-md-11" style="background-color: #D9931C">
                        <strong>Cadastre-se</strong></button>
                </div>
            </form>
        </div>
    </div>

</div>

</html>
