<div class="mt-5">
    <div class="card">
        <div class="card-body">
            <table class="table table-hover table-success">
                <thead >
                    <tr >
                        <th class="text-success">Código</th>
                        <th class="text-success">Tipo</th>
                        <th class="text-success">Descrição</th>
                        <th class="text-success">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aluno as $t)
                        <tr>
                            <td>{{ $t->id }}</td>
                            <td>{{ $t->codigo }}</td>
                            <td>{{ $t->tipo }}</td>
                            <td>{{ $t->descricao }}</td>
                            <td>{{$t->status }}
                            
                                <button class="btn btn-success btn-sm" data-bs-toggle="modal" 
                                    data-bs-target="#viewModal"
                                    wire:click="abrirModalVisualizar({{ $t->id }})"><strong>Visualizar</strong></button>

                                    <button class="btn btn-warning btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#editModal"
                                    wire:click="abrirModalEdicao({{ $t->id }})"><strong>Editar</strong></button>

                                <button class="btn btn-danger btn-sm" data-bs-toggle="modal"
                                    data-bs-target="#deleteModal"
                                    wire:click="abrirModalExclusao({{ $t->id }})"><strong>Deletar</strong></button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>

            <!-- Modal de Exclusão -->
            <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Excluir Sensor</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <p>Tem certeza que deseja excluir o Sensor??</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-danger" wire:click="excluir">Excluir</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>



    <!-- Modal de Visualização -->
    <div wire:ignore.self class="modal fade" id="viewModal" tabindex="-1" aria-labelledby="viewModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Detalhes do Sensor</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <p><strong>Nome:</strong>{{ $nome }}</p>
                    <p><strong>Email:</strong>{{ $email }}</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>