<div class="mt-5">
    <div class="card">
        <div class="card-body">
            <table class="table table-hover table-success">
                <thead >
                    <tr >
                        <th class="text-success">ID</th>
                        <th class="text-success">Sensor</th>
                        <th class="text-success">Valor</th>
                        <th class="text-success">Umidade</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($registro as $r)
                        <tr>
                            <td>{{ $r->id }}</td>
                            <td>{{ $r->sensor }}</td>
                            <td>{{ $r->valor }}</td>
                            <td>{{ $r->umidade }}</td>
                            
                                <button class="btn btn-success btn-sm" data-bs-toggle="modal" 
                                    data-bs-target="#viewModal"
                                    wire:click="abrirModalVisualizar({{ $t->id }})"><strong>Vizualizar</strong></button>

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
                            <h5 class="modal-title">Excluir Registro</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <p>Tem certeza que deseja excluir??</p>
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
                    <h5 class="modal-title">Detalhes</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <p><strong>Sensor:</strong>{{ $sensor }}</p>
                    <p><strong>Valor:</strong>{{ $valor }}</p>
                    <p><strong>Umidade:</strong> {{ $umidade }}</p>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>
