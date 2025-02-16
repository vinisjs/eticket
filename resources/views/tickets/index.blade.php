@extends('layouts.app')

@section('content')
<h1 class="mb-4">Lista de Chamados</h1>
<a href="{{ route('tickets.create') }}" class="btn mb-3" style="background:#8EC5FF">Novo Chamado</a>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>Solicitante</th>
            <th>Criado em</th>
            <th>Status</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($tickets as $ticket)
        <tr>
            <td>{{ $ticket->id }}</td>
            <td>{{ $ticket->title }}</td>
            <td>{{ $ticket->requester }}</td>
            <td>{{ $ticket->created_at->format('Y-m-d') }}</td>
            <td>{{ ucfirst(str_replace('_', ' ', $ticket->status)) }}</td>
            <td>
                <a href="{{ route('tickets.show', $ticket) }}" class="btn btn-sm btn-outline-primary">Ver</a>
                <a href="{{ route('tickets.edit', $ticket) }}" class="btn btn-sm btn-outline-secondary">Editar</a>
                <form action="{{ route('tickets.destroy', $ticket) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Tem certeza que deseja excluir o chamado?')">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection