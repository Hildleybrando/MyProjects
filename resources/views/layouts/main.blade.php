<!DOCTYPE html>
<html>
    <head>

        <meta charset="utf-8">
        <meta name="home" content="width=device-width, initial-scale=1">
        
        <title>@yield('title')</title>
        <!-- fontes do google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

        <!-- css -->
        <link rel="stylesheet" href="/css/styles.css">
        
        <!-- css bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        
        <!-- javascript -->
        <script src="/js/scripts.js"></script>
        
        <!-- icones -->
        <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
        
    </head>
    <body>
        <header>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid" id="navbar">
                    <a href="/" class="navbar-brand">
                        <img src="/img/logoMP.png" alt="logo"><b>MyProjects</b>
                    </a>
                    <ul class="navbar-nav mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/"><b>Projetos</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/"><b>Entrar</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/"><b>Cadastrar</b></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/"><b>Sair</b></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        @yield('content')
        <footer class="bd-footer py-4 py-md-5 mt-5" id="marca"><b>MyProjects&copy; 2023</b>
        </footer>
    </body>

</html>