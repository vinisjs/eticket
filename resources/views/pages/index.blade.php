@extends('layouts.main')
@section('title', 'Index')
@section('content')

<main>
    <div class="container d-flex justify-content-center align-items-center mt-5">
        <div class="row w-100">
            <div class="col-12 d-flex justify-content-center">
                <div class="card p-4 shadow-lg" style="max-width: 826px; width: 100%; max-height: 500px; height: 100%;">
                    <div class="card-body mx-auto" style="max-width: 400px; width: 100%;">
                        <h5 class="card-title text-center mb-4">Admin</h5>
                        <div class="mb-3">
                            <label for="email" class="form-label">E-mail</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <img src="images/at-sign.svg" alt="email">
                                </span>
                                <input type="email" class="form-control" id="email" placeholder="E-mail:" style="background-color: #E4E4E7">
                            </div>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Senha</label>
                            <div class="input-group">
                                <span class="input-group-text bg-light">
                                    <img src="images/lock.svg" alt="password">
                                </span>
                                <input type="password" class="form-control" id="password" placeholder="Senha:" style="background-color: #E4E4E7">
                            </div>
                        </div>
                        <div class="d-grid gap-2">
                            <button class="btn text-white" style="background-color: #8EC5FF">Entrar</button>
                            <button class="btn text-white" style="background-color: #8EC5FF">Sou usuário de Laravel</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

@endsection
