<div class="mt-5  ">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h3 class="title text-success mt-5 text-center"><strong>Editar</strong></h3>

    <div class="font-family-roboto title text-black col-md-5 card mx-auto border p-3 opacity-100 shadow-lg text-light">
        <form wire:submit.prevent="salvar">
            <div class="mt-1 mb-3 ">
                <label for="nome" class="form-label">Nome</label> {{-- placeholder: colocar um texto de exemplo
                dentro de uma caixa de texto --}}
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Ex.: Maria"
                    wire:model.defer="nome">
            </div>
            <div class="mb-3 ml-2">
                <label for="tipo">Tipo</label>
                <input type="tipo" name="tipo" id="tipo" class="form-control" wire:model.defer="tipo">
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Selecione</option>
                    <option value="1">Ativo</option>
                    <option value="0">Inativo</option>
                </select>
            </div>

            <div class="mb-3 text-center">
                <button type="submit" class="btn text-light col-md-11" style="background-color: #D9931C">
                    <strong>Salvar</strong></button>
        </form>
    </div>

</div>
