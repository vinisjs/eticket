@extends('layouts.main')

@section('title', 'Index')

@section('content')
<form class="d-flex justify-content-center align-items-center">
    <div class="card p-4 shadow-lg" style="max-width: 826px; width: 100%; max-height: 500px; height: 100%;">
        <div class="card-body mx-auto" style="max-width: 400px; width: 100%;">
            <h5 class="card-title text-center mb-4">Admin</h5>
            <div class="mb-1">
                <label for="email" class="form-label">E-mail</label>
                <div class="input-group">
                    <span class="input-group-text bg-light"><img src="images/at-sign.svg" alt="email"></span>
                    <input type="email" class="form-control bg-light" id="email" placeholder="E-mail:" style="background-color: #E4E4E7">
                </div>
            </div>
            <div class="mb-5">
                <label for="password" class="form-label">Senha</label>
                <div class="input-group">
                    <span class="input-group-text bg-light"><img src="images/lock.svg" alt="password"></span>
                    <input type="password" class="form-control bg-light" id="password" placeholder="Senha:" style="background-color: #E4E4E7">
                </div>
            </div>
            <button class="btn w-100 mb-2" style="background-color: #8EC5FF">Entrar</button>
            <button class="btn w-100" style="background-color: #8EC5FF">Sou usuário de Laravel</button>
        </div>
    </div>
</form>
@endsection