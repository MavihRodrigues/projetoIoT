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
                    <label for="codigo" class="form-label">Código</label>
                    <input type="text" class="form-control" id="codigo" name="codigo" wire:model.defer="codigo">
                </div>
                @error('codigo')
                    <span class="text-warning small">{{ $message }}</span>
                @enderror

                <div class="mt-1 mb-3 text text-success">
                    <label for="nome" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="tipo" name="tipo" wire:model.defer="tipo">
                </div>

                <div class="mt-1 mb-3 text text-success">
                    <label for="descricao" class="form-label">Descrição</label>
                    <input type="text" class="form-control" id="descricao" name="descricao"
                        wire:model.defer="descricao">
                </div>

                <div class="mt-1 mb-3 text text-success">
                    <label for="status" class="form-label">Status</label>
                    <div class="input-group">
                        <select class="form-select" aria-label="Default select example" wire:model.defer="status">
                            <option selected>Selecione o status</option>
                            <option value="nativo">Nativo</option>
                            <option value="inativo">Inativo</option>
                        </select>
                    </div>
                </div>

                <div class="mt-1 mb-3 text text-success">
                    <label for="nome" class="form-label" text text-success>Ambiente</label>
                    <div class="input-group">
                        <select class="form-select" aria-label="Default select example" wire:model.defer="ambiente_id">
                            @foreach ($ambientes as $a)
                                <option value="{{ $a->id }}">{{ $a->nome }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-3 text-center">
                    <input class="btn btn-info mt-2" type="submit" value="Cadastrar">
                </div>
            </form>
        </div>
    </div>
</div>
