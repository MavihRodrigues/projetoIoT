<div class="mt-5  ">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="font-family-roboto col-md-5 card mx-auto  opacity-100 shadow-lg text-light"
        style="background-color: #004d80">
        <h3 class="card-title mt-5 text-center"><strong>Cadastre o Sensor!</strong></h3>

        <div class="card-body mx-4">
            <form wire:submit.prevent="store">
                <div class="mt-1 mb-3 ">
                    <label for="tipo" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="tipo" name="tipo" wire:model.defer="tipo">
                    @error('tipo')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="mb-3 ml-2">
                    <label for="descricao">Descrição</label>
                    <input type="descricao" name="descricao" id="descricao" class="form-control"
                        wire:model.defer="descricao">
                    @error('descricao')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <div class="input-group">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Selecione</option>
                            <option value="1">Ativo</option>
                            <option value="2">Inativo</option>
                        </select>
                        @error('status')
                            <small class="text-danger">{{ $message }}</small>
                        @enderror
                    </div>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn text-light col-md-11" style="background-color: #D9931C"><strong>
                            <strong>Cadastre</strong></button>
            </form>
        </div>
    </div>

</div>
