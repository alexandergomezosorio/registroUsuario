<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="public/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <header>
        <div class="container">
            <div class="row d-flex justify-content-center">
                <div class="menu col-10">
                    <nav class="navbar navbar-expand-lg navbar-ligth bg-ligth">
                        <div class="container-fluid">
                            <a class="navbar-brand" href="index.php">La tienda</a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link" href="views/registroUsuario.php">Registro usuarios</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="views/registroProductos.php">Registro productos</a>
                                    </li>
                                </ul>
                                <form class="d-flex">
                                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>
                        </div>
                    </nav>
                    <nav class="navbar navbar-expand-lg navbar-ligth bg-ligth">
                        <div class="container-fluid">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                    <li class="nav-item">
                                        <a class="nav-link active" aria-current="page" href="views/index.php">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Quienes somos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Ofertas del dia</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Servicio al cliente</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="">Contactanos</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <main>
        <div class="container ">
            <div class="row d-flex justify-content-center">
                <div class="targetas col-10">
                    <div class="card" style="width: 18rem;">
                        <img src="public/img/fotocelular.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Samsung A30</p>
                            <a href="#" class="btn btn-primary">Comprar ya</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="public/img/fotoplay5.webp" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Sony playstation 5</p>
                            <a href="#" class="btn btn-primary">Comprar ya</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="public/img/fotopatineta.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Patineta</p>
                            <a href="#" class="btn btn-primary">Comprar ya</a>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                        <img src="public/img/fotofreidora.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Freidora</p>
                            <a href="#" class="btn btn-primary">Comprar ya</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>