<html>
    <head>
        <title>Empresa Waosiana</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>        
    </head>
    <body>
        <!--Navbar -->
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <div class="container-fluid">
                    <img src="1783733094100.jpg" alt="Logo de la empresa" width="50" height="50" class="d-inline-block align-text-top">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button> 
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Empresa</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="empresa.php">Quienes Somos</a></li>
                                <li><a class="dropdown-item" href="#">Nuestro Equipo</a></li>
                                <li><a class="dropdown-item" href="#">Mision</a></li>
                            </ul>
                        </li>                        
                        <li class="nav-item">
                            <a class="nav-link" href="servicios.php">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="productos.php">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Contacto</a>
                        </li>                     
                    </ul>
                </div>  
                <button type="button" class="btn btn-outline-primary">Acceder</button>                             
            </div>
        </nav>
        <!--Container-->
        <div class="container-fluid bg-secondary">
            <form action="empresa.php">
                <div class="mb-2 mt-2">
                    <label for="email" class="form-label">Email:</label>
                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                </div>                
                <label for="comment">Comentarios</label>
                <textarea class="form-control" rows="5" id="comment" name="text"></textarea>
                <button type="button" id="btnEnviar" class="btn btn-outline-primary mt-1">Enviar</button>
                <a href="index.php">Volver</a>
            </form>
        </div>
        <!--Footer-->
        <div class="container-fluid bg-dark">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4" style="color:white"><strong>waosiano@mipagina.cl</strong></div>
                <div class="col-4" style="color:white"><strong>Terminos y Condiciones</strong></div>
                <div class="col-4"></div>
            </div>
        </div>
        <!--Modal-->
        <!--Integracion script-->
        <script src="app.js"></script>
    </body>
</html>
