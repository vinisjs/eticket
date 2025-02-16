@extends('layouts.app')

@section('content')
<h1 class="mb-4">Chamados Dashboard</h1>
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Ações Rápidas</h5>
            </div>
            <div class="card-body">
                <a href="{{ route('tickets.create') }}" class="btn btn-block" style="background:#8EC5FF">Criar Novo Chamado</a>
                <a href="{{ route('tickets.index') }}" class="btn btn-outline-secondary btn-block">Ver todos os Chamados</a>
                <a href="{{ route('reports') }}" class="btn btn-outline-secondary btn-block">Ver Relatórios</a>
            </div>
        </div>
    </div>
</div>
@endsection