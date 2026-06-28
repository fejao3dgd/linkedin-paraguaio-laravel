<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Laravel') }}</title>

     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    </head>

    <body>
            <!-- CRIAR CONTA -->
            <div class="container d-flex justify-content-center align-items-center min-vh-100">
                
                <div class="card shadow-sm w-100" style="max-width: 400px;">
                    <div class="card-header bg-primary text-white text-center py-3">
                        <h5 class="mb-0 text-uppercase tracking-wide">Criar Conta</h5>
                    </div>
                    <div class="card-body p-4">
                        <p class="text-muted text-center small mb-4">Preencha os campos abaixo para criar a sua conta.</p>

                        <form action="{{ route('register') }}" method="POST">
                            @csrf 

                            <!-- E-MAIL -->
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" 
                                    name="email" 
                                    id="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    value="{{ old('email') }}" 
                                    required 
                                    autofocus 
                                    placeholder="seu@email.com">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- SENHA -->
                            <div class="mb-3">
                                <label for="password" class="form-label">Senha</label>
                                <input type="password" 
                                    name="password" 
                                    id="password" 
                                    class="form-control @error('password') is-invalid @enderror" 
                                    required 
                                    placeholder="••••••••">
                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- REPETIR SENHA -->
                            <div class="mb-4">
                                <label for="password_confirmation" class="form-label">Repetir Senha</label>
                                <input type="password" 
                                    name="password_confirmation" 
                                    id="password_confirmation" 
                                    class="form-control" 
                                    required 
                                    placeholder="••••••••">
                            </div>
                            
                            <!-- NÚMERO DE TELEFONE -->
                            <div class="mb-3">
                                <label for="phone" class="form-label">Número (Telefone)</label>
                                <input type="tel" 
                                    name="phone" 
                                    id="phone" 
                                    class="form-control @error('phone') is-invalid @enderror" 
                                    value="{{ old('phone') }}" 
                                    required 
                                    placeholder="(00) 99999-9999">
                                @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">Cadastrar</button>
                                <a href="{{ 'logar' }}" class="btn btn-outline-secondary">Já tenho conta (Login)</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
    </body>
</html>