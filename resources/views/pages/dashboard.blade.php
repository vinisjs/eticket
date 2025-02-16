@extends('layouts.dashboard')
@section('title', 'Dashboard')
@section('content')

<main class="container-fluid mt-5">
    <h2 class="text-left mb-3">Dashboard</h2>
    <div class="card p-4 mb-4 shadow-sm">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card border-primary">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Abertos</h5>
                        <p class="display-6 fw-bold">0</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-warning">
                    <div class="card-body">
                        <h5 class="card-title text-warning">Em andamento</h5>
                        <p class="display-6 fw-bold">2</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card border-success">
                    <div class="card-body">
                        <h5 class="card-title text-success">Resolvidos</h5>
                        <p class="display-6 fw-bold">1</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h2 class="text-left mb-4">Chamados</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Solicitante</th>
                <th scope="col">Título</th>
                <th scope="col">Status</th>
                <th scope="col">Ações</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>João Silva</td>
                <td>Erro no Sistema</td>
                <td><span class="badge bg-warning">Em andamento</span></td>
                <td>
                    <button class="btn btn-sm" style="background-color: #8EC5FF;">
                        <img src="images/eye.svg" alt="Visualizar" width="20" height="20">
                    </button>
                    <button class="btn btn-sm ms-2" style="background-color: #8EC5FF;">
                        <img src="images/alert-triangle.svg" alt="Alerta" width="20" height="20">
                    </button>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Ana Souza</td>
                <td>Problema de login</td>
                <td><span class="badge bg-success">Concluído</span></td>
                <td>
                    <button class="btn btn-sm" style="background-color: #8EC5FF;">
                        <img src="images/eye.svg" alt="Visualizar" width="20" height="20">
                    </button>
                    <button class="btn btn-sm ms-2" style="background-color: #8EC5FF;">
                        <img src="images/alert-triangle.svg" alt="Alerta" width="20" height="20">
                    </button>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Carlos Oliveira</td>
                <td>Falha na impressão</td>
                <td><span class="badge bg-danger">Pendência</span></td>
                <td>
                    <button class="btn btn-sm" style="background-color: #8EC5FF;">
                        <img src="images/eye.svg" alt="Visualizar" width="20" height="20">
                    </button>
                    <button class="btn btn-sm ms-2" style="background-color: #8EC5FF;">
                        <img src="images/alert-triangle.svg" alt="Alerta" width="20" height="20">
                    </button>
                </td>
            </tr>
        </tbody>
    </table>
</main>

@endsection
