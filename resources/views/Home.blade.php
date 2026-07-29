<x-guest-layout>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <!-- NAVBAR -->
    <nav class="navbar bg-primary navbar-black" data-bs-theme="black">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Início</a>
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Início</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logar') }}">Login</a>
                    </li>
                   </ul>
            </div>
        </div>
    </nav>
        
    <h1>Hello, world!</h1>

</x-guest-layout>