@extends('layouts.app')

@section('content')
<h1 class="mb-4">Editar Chamado</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tickets.update', $ticket) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $ticket->title }}" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrição</label>
        <textarea class="form-control" id="description" name="description" rows="3" required>{{ $ticket->description }}</textarea>
    </div>
    <div class="mb-3">
        <label for="requester" class="form-label">Solicitante</label>
        <input type="text" class="form-control" id="requester" name="requester" value="{{ $ticket->requester }}" required>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status" required>
            <option value="open" {{ $ticket->status == 'open' ? 'selected' : '' }}>Aberto</option>
            <option value="in_progress" {{ $ticket->status == 'in_progress' ? 'selected' : '' }}>Em Progresso</option>
            <option value="resolved" {{ $ticket->status == 'resolved' ? 'selected' : '' }}>Resolvido</option>
        </select>
    </div>
    <button type="submit" class="btn btn-outline-secondary" style="background:#8EC5FF">Atualizar Chamado</button>
</form>
@endsection

