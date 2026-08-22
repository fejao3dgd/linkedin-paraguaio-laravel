<x-app-layout>

    <!-- NAVBAR -->
    <nav class="navbar bg-primary navbar-black" data-bs-theme="black">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sobre nós</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

        <!-- NAVEGAÇÃO PARA PÁGINAS -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">

                        <a class="nav-link active" aria-current="page" href="#">Sobre nós</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logar') }}">Login</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('apresentacoes') }}">Conecte-se com Profissionais</a>
                    </li>

                   </ul>
            </div>
        </div>
    </nav>

    {{-- IMAGEM --}}
    <div class="banner-container">
        <img src="imagens/img-escrit.png" alt="Imagem de escritório" class="banner-img">
        
        <div class="banner-overlay"></div>

        <div class="banner-content text-center text-white">
            <h1 class="fw-bold display-4">Conecte-se com os Melhores Talentos</h1>
            <p class="lead">A plataforma ideal para encontrar profissionais e oportunidades.</p>
        </div>
    </div>
    <section class="row text-center py-4">

            <div class="col-md-4 mb-3">
                <h3 class="display-6 fw-bold" style='color: #0040ff'>Mais de 1000</h3>
                <p class="text-secondary">Contratações</p>
            </div>

            <div class="col-md-4 mb-3">
                <h3 class="display-6 fw-bold" style='color: #0040ff'>100%</h3>
                <p class="text-secondary">Gratuito para empresas</p>
            </div>

            <div class="col-md-4 mb-3">
                <h3 class="display-6 fw-bold" style='color: #0040ff'>100%</h3>
                <p class="text-secondary">Gratuito para Candidatos</p>
            </div>
    </section>

    <!-- TEXTO DE APRESENTAÇÃO -->
    <section class="main-content-section py-5">
            <div class="container container-content">

                <!-- TITULO -->
                <h2 class="text-accent fw-bold mb-3" style='color: #0040ff'>Sobre nós</h2>
                
                <p class="text-secondary mb-4" style='color: #0040ff'>
                Linkedin Paraguaio</p>
                <hr class="border-secondary opacity-25 mb-4">

                <!-- Corpo do Texto Principal -->
                <div class="content-body text-light">

                    <p class="lead">nós somos uma empresa que busca conectar empresas a profissionais em um curto tempo e com extrema qualidade</p>

                    <p>Estamos </p>

                    <blockquote class="blockquote-accent p-3 my-4 rounded">
                        <p class="mb-0 fs-5 text-light fw-semibold">"Uma citação ou destaque visual em tom azul para quebrar o bloco de texto."</p>
                    </blockquote>

                    <p>Continuando com o conteúdo detalhado, links internos ou chamadas para ação utilizando os acentos em azul do projeto.</p>
                </div>
            </div>
    </section>
</x-app-layout>