@extends('layouts.app')

@section('content')
<h1 class="mb-4">Detalhes do Chamado</h1>

<div class="card">
    <div class="card-header">
        <h5 class="card-title">{{ $ticket->title }}</h5>
    </div>
    <div class="card-body">
        <p><strong>Description:</strong> {{ $ticket->description }}</p>
        <p><strong>Requester:</strong> {{ $ticket->requester }}</p>
        <p><strong>Created At:</strong> {{ $ticket->created_at->format('Y-m-d H:i:s') }}</p>
        <p><strong>Status:</strong> {{ ucfirst(str_replace('_', ' ', $ticket->status)) }}</p>
    </div>
</div>

<div class="mt-3">
    <a href="{{ route('tickets.index') }}" class="btn btn-secondary">Voltar para a lista</a>
    <a href="{{ route('tickets.edit', $ticket) }}" class="btn btn-primary">Editar Chamado</a>
    <form action="{{ route('tickets.destroy', $ticket) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir o chamado?')">Deletar Chamado</button>
    </form>
</div>
@endsection

