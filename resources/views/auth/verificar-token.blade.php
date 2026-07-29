<x-guest-layout>
            <!-- LOGIN -->
            <div class="container d-flex justify-content-center align-items-center min-vh-100">
                
                <div class="card shadow-sm w-100" style="max-width: 400px;">
                    <div class="card-header bg-primary text-white text-center py-3">
                        <h5 class="mb-0 text-uppercase tracking-wide">coloque o código</h5>
                    </div>
                    <div class="card-body p-4">
                            <!-- E-MAIL -->
                            <div class="mb-3">
                                <label for="email" class="form-label">E-mail</label>
                                <input type="email" 
                                    name="email" 
                                    id="email" 
                                    class="form-control @error('email') is-invalid @enderror" 
                                    value="{{ old('email') }}" 
                                    placeholder="seu@email.com"
                                    required 
                                    autofocus>

                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <!-- NAVEGAÇÃO DE VIEW -->
                            <div class="d-grid gap-2"> 
                                <a href={{route('Home')}} class='btn btn-primary'>Verificar</a>
                                <a href={{ route('logar') }}>Fazer login</a>

                                <a href={{ route('criarconta') }}>Criar Conta</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
</x-guest-layout>