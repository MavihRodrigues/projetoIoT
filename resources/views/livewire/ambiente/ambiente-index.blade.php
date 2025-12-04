<div class="min-vh-100 d-flex flex-column justify-content-start align-items-center"
    style="background-color: #e6e6e6; padding-top: 60px; padding-bottom: 40px;">

    <h2 class="text-white fw-bold mb-4" style="text-transform: uppercase;">
        Lista de Ambientes
    </h2>

    <div class="d-flex justify-content-between flex-wrap gap-3 mb-3" style="max-width: 900px; width: 100%;">
        <input type="text" wire:model.debounce.300ms="search" class="form-control" placeholder="Buscar ambientes...">

        <select wire:model="perPage" class="form-select" style="max-width: 200px;">
            <option value="10">10 por página</option>
            <option value="25">25 por página</option>
        </select>

        <a href="{{ route('ambientes.create') }}" class="btn btn-outline-light fw-bold">
            <i class="bi bi-plus-circle me-2"></i>Novo Ambiente
        </a>
    </div>

    @if (session()->has('message'))
        <div class="alert alert-success text-center fw-semibold w-100" style="max-width: 900px;">
            {{ session('message') }}
        </div>
    @endif

    <div class="table-responsive" style="max-width: 900px; width: 100%;">
        <table class="table table-striped table-bordered align-middle text-center bg-white rounded-3 overflow-hidden">
            <thead class="table-dark">
                <tr>
                    <th class="text-white">ID</th>
                    <th class="text-white">Nome</th>
                    <th class="text-white">Descrição</th>
                    <th class="text-white">Status</th>
                    <th class="text-white">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse($ambientes as $a)
                    <tr>
                        <td>{{ $a->id }}</td>
                        <td>{{ $a->nome }}</td>
                        <td>{{ $a->descricao }}</td>
                        <td>{{ $a->status == 1 ? 'Ativo' : 'Inativo' }}</td>
                        <td>{{ $a->ações }}

                            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal"
                                wire:click="abrirModalVisualizar({{ $a->id }})"><strong>Visualizar</strong></button>

                            <button class="btn btn-warning btn-sm" data-bs-toggle="modal" data-bs-target="#editModal"
                                wire:click="abrirModalEdicao({{ $a->id }})"><strong>Editar</strong></button>

                            <button class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal"
                                wire:click="abrirModalExclusao({{ $a->id }})"><strong>Deletar</strong></button>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
</div>
