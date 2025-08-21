<div class="mt-5">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="font-family-roboto col-md-5 card mx-auto  opacity-100 shadow-lg text-light"
        style="background-color: rgb(99, 112, 175)">
        <h3 class="card-title mt-5 text-center"><strong>Cadastro de Ambiente</strong></h3>

        <div class="card-body mx-4">
            <form wire:submit.prevent="store">
                <div class="mt-1 mb-3 ">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" wire:model.defer="nome">
                </div>
                <div class="mb-3 ml-2">
                    <label for="text">Descrição</label>
                    <input type="text" name="text" id="text" class="form-control" wire:model.defer="text">
                </div>

                <div class="mb-3">
                    <label for="status">Status</label>
                    <select class="form-select" aria-label="Default select example">
                        <option selected>Selecione</option>
                        <option value="1">Ativo</option>
                        <option value="2">Inativo</option>
                    </select>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn text-light col-md-11" style="background-color: #D9931C">
                        <strong>Cadastre-se</strong></button>

                    <div class="text-center mb-2 mt-2">
                        <p><strong>Já possui uma conta? <a class="text-light">Login</a><strong> </br>
                                    <a href="#" class="text-light "><strong>Esqueci minha senha<strong></a></p>

                    </div>
            </form>
        </div>
    </div>

</div>
