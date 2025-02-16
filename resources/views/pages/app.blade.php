@extends('layouts.app')
@section('title', 'App')
@section('content')

<main class="container mt-5">
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
