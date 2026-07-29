<x-guest-layout>

    <!-- LOGIN -->
    <div class="container d-flex justify-content-center align-items-center min-vh-100">
                
                <div class="card shadow-sm w-100" style="max-width: 400px;">
                    <div class="card-header bg-primary text-white text-center py-3">
                        <h5 class="mb-0 text-uppercase tracking-wide">Logar</h5>
                    </div>
                    <div class="card-body p-4">
                        <p class="text-muted text-center small mb-4">Insira suas credenciais para acessar a conta.</p>

                        <!-- E-MAIL -->
                        <form action="{{ route('login') }}" method="POST">
                            @csrf <div class="mb-3">
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
                            <div class="mb-4">
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

                            <!-- FAZER LOGIN -->
                            <div class="d-grid gap-2">
                                <form action="{{ route('login.post') }}" method="POST">
                                    @csrf
                                <button type="submit" class="btn btn-primary">Fazer Login</button>
                                <a href={{ route('criarconta') }} class="btn btn-outline-secondary">Criar Conta</a>

                                <a href='{{ route('esq-senha') }}'>Esqueci minha senha</a>
                            </div>
                        </form>

                    </div>
                </div>
         </div>
</x-guest-layout>