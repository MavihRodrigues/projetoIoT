<div class="mt-0" style="background-color: #ffffff">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="font-family-roboto col-md-5 card mx-auto  opacity-100 shadow-lg text-light"
        style="background-color: rgb(13, 86, 142)">
        <h3 class="card-title mt-5 text-center text-white"><strong>Editar</strong></h3>

        <div class="card-body mx-5">
            <form wire:submit.prevent="salvar">
                <div class="mt-1 mb-3 ">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" wire:model.defer="nome">
                </div>

                <div class="mb-3">
                    <label for="descricao" class="form-label">Descrição</label>
                    <div class="input-group ">
                        <input type="descricao" name="descricao" id="descricao" class="form-control" rows="5"
                            wire:model.defer="descricao"></input>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Selecione</option>
                            <option value="1">Ativo</option>
                            <option value="2">Inativo</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn text-light col-md-9" style="background-color: rgb(0, 156, 57)">
                        <strong>Salvar</strong></button>
            </form>
        </div>

    </div>
