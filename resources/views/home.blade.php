@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-center align-items-center" ">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Ações Rápidas</h5>
            </div>
            <div class="card-body d-grid gap-2">
                <a href="{{ route('tickets.create') }}" class="btn btn-outline-secondary w-100" style="background:#8EC5FF">Criar Novo Chamado</a>
                <a href="{{ route('tickets.index') }}" class="btn btn-outline-secondary w-100">Ver todos os Chamados</a>
                <a href="{{ route('reports') }}" class="btn btn-outline-secondary w-100">Ver Relatórios</a>
            </div>
        </div>
    </div>
</div>
@endsection
