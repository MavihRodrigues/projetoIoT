<div class="mt-5">
    <div class="card">
        <div class="card-body">
            <table class="table table-hover table-info">
                <thead>
                    <tr>
                        <th class="text-success">ID</th>
                        <th class="text-success">Valor</th>
                        <th class="text-success">Unidade</th>
                        <th class="text-success">Status</th>
                    </tr>
                </thead>
                <tbody>

                </tbody>
            </table>

            <!-- Modal de Exclusão -->
            <div wire:ignore.self class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Excluir</h5>
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
                    <p><strong>ID</strong>{{ $sensorId }}</p>
                    <p><strong>Valor</strong>{{ $valor }}</p>
                    <p><strong>Unidade</strong> {{ $unidade }}</p>
                    <p><strong>Status</strong> {{ $status }}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>
</div>
