<div class="mt-5  ">

    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <div class="font-family-roboto col-md-5 card mx-auto  opacity-100 shadow-lg text-light"
        style="background-color: #004d80">
        <h3 class="card-title mt-5 text-center"><strong>Crie Sua Conta!</strong></h3>

        <div class="card-body mx-4">
            <form wire:submit.prevent="store">
                <div class="mt-1 mb-3 ">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome" wire:model.defer="nome">
                </div>
                <div class="mb-3 ml-2">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control" wire:model.defer="email">
                </div>

                <div class="mb-3">
                    <label for="senha" class="form-label">Senha</label>
                    <div class="input-group ">
                        <input type="password" name="password" id="senhaPassword" class="form-control" rows="5"
                            wire:model.defer="password"></input>
                        <button class="btn btn-light" type="button"><i class="bi bi-eye-fill"></i></button>
                    </div>
                </div>

                <div class="mb-3 text-center">
                    <button type="submit" class="btn text-light col-md-11" style="background-color: #D9931C"><strong>
                            <strong>Cadastre-se</strong></button>
            </form>
        </div>
    </div>

</div>
