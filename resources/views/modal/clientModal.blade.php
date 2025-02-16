<div class="modal fade" id="clienteModal" tabindex="-1" aria-labelledby="clienteModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 900px;">
        <div class="modal-content border-0">
            <div class="modal-header">
                <h5 class="modal-title" id="clienteModalLabel">Clientes</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <form class="d-flex justify-content-center align-items-center mt-5">
                    <div class="card p-4 shadow-lg" style="max-width: 100%; width: 100%; height: 100%;">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="cliente_id" class="form-label">ID</label>
                                <input type="text" class="form-control" id="cliente_id" placeholder="ID do Cliente" style="background-color: #F4F4F5;" disabled>
                            </div>
                            <div class="mb-3">
                                <label for="nome" class="form-label">Nome</label>
                                <input type="text" class="form-control" id="nome" placeholder="Nome do Cliente" style="background-color: #F4F4F5;">
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" class="form-control" id="email" placeholder="E-mail do Cliente" style="background-color: #F4F4F5;">
                            </div>
                            <div class="mb-3">
                                <label for="senha" class="form-label">Senha</label>
                                <input type="password" class="form-control" id="senha" placeholder="Senha do Cliente" style="background-color: #F4F4F5;">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" style="background-color: #FF6467" class="btn" data-bs-dismiss="modal">Fechar</button>
                <button type="button" style="background-color: #8EC5FF" class="btn" data-bs-dismiss="modal">Salvar</button>
            </div>
        </div>
    </div>
</div>