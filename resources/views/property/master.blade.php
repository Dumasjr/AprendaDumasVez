<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Imoveis - CRUD</title>
    <link rel="stylesheet" href="<?=asset('css/app.css');?>">

</head>
<body>
    <nav class="navbR navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand ml-auto">Aprenda<b>Dumas</b>vez</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="<?=url('/imoveis');?>" class="nav-link"> HOME</a></li>
                <li class="nav-item"><a href="<?=url('/imoveis/cad');?>" class="nav-link" > Cadastrar Novo Imovel</a></li>

            </ul>
        </div>

    </nav>
    @yield('content')
<script src="<?=asset('js/app.js');?>"></script>
</body>
</html>
