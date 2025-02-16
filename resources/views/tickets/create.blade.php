@extends('layouts.app')

@section('content')
<h1 class="mb-4">Criar Novo Chamado</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tickets.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Título</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrição</label>
        <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
    </div>
    <div class="mb-3">
        <label for="requester" class="form-label">Solicitante</label>
        <input type="text" class="form-control" id="requester" name="requester" required>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <select class="form-select" id="status" name="status" required>
            <option value="open">Aberto</option>
            <option value="in_progress">Em progresso</option>
            <option value="resolved">Resolvido</option>
        </select>
    </div>
    <button type="submit" class="btn " style="background:#8EC5FF">Criar Chamado</button>
</form>
@endsection

