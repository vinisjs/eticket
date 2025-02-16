<div class="modal fade" id="callModal" tabindex="-1" aria-labelledby="callModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="max-width: 900px;">
        <div class="modal-content border-0">
            <div class="modal-header">
                <h5 class="modal-title" id="callModalLabel" >Novo Chamado</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fechar"></button>
            </div>
            <div class="modal-body">
                <form class="d-flex justify-content-center align-items-center mt-5">
                    <div class="card p-4 shadow-lg" style="max-width: 100%; width: 100%; height: 100%;">
                        <div class="card-body">
                            <div class="mb-3">
                                <label for="titulo" class="form-label">Título</label>
                                <div class="d-flex">
                                    <input type="text" class="form-control" id="titulo" placeholder="Título do Chamado" style="background-color: #F4F4F5; margin-right: 10px;">
                                    <button class="btn btn-sm" style="background-color: #8EC5FF;">
                                        <img src="images/edit.svg" alt="Editar" width="20" height="20">
                                    </button>
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="descricao" class="form-label">Descrição</label>
                                <div class="d-flex w-100">
                                    <textarea class="form-control" id="descricao" placeholder="Descrição do Chamado" style="background-color: #F4F4F5; margin-right: 10px; flex-grow: 1;"></textarea>
                                    <button class="btn btn-sm" style="background-color: #8EC5FF; height: calc(2.25rem + 2px);">
                                        <img src="images/edit.svg" alt="Editar" width="20" height="20">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" style="background-color: #FF6467" class="btn" data-bs-dismiss="modal">Fechar</button>
                <button type="button" style="background-color: #8EC5FF" class="btn" data-bs-dismiss="modal">Enviar</button>
            </div>
        </div>
    </div>
</div>