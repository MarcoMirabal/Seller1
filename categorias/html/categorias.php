<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="../css/categorias.css"
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lexend:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>


<body>
  <header>
    <div class="back">
        <div class="menu container">
            <a href="#" ><img src="../../sistema de busqueda/Imagenes/logo.png" class="logo"></a>
            <input type="checkbox" id="menu"/>
            <label for="menu">
                <img src="../../sistema de busqueda/Imagenes/menu.png" class="menu-icono" alt="">
               
            </label>
            <section>
                <form autocomplete="off">
                    <div class="buscador">
                        <input type="text" name="q" placeholder="Buscar...">
                    </div>
                </form>
            </section>
            <nav class="navbar">
                <ul>
                <li><a href="../../paginapincipal/html/paginaprincial.php">inicio</a></li>
                <li><a href="../../categorias/html/categorias.php">Categorías</a></li>
                <li><a href="../../Sistema de Nosotros/HTML/index.html">Nosotros</a></li>
                </ul>
            </nav>
        </div>
    </div>

</header>

<div class="titulo25">
    <center>
    <div><h1>Productos Destacados</h1></div>
    </center>
</div>

   <div class="container-items">
    <div class = "item">
        <figure>
            <img src="../img/57a0b0cd3e5acab2b0ebb5b5e19f6a8b.jpg" alt="">
        </figure>
        <div class="info-product">
            <button><a href="file:///C:/xampp/htdocs/Seller1/categorias/html/componentes.html">Componentes</a></button>
        </div>
    </div>


    <div class = "item">
        <figure>
            <img src="../img/6a8832d29a911b320f9c68af86f8e134.jpg" alt="">
        </figure>
        <div class="info-product">
            <button><a href="comida.php">Comida</a></button>
        </div>
    </div>


    <div class = "item">
        <figure>
            <img src="../img/buso (1).jpg" alt="">
        </figure>
        <div class="info-product">
            <button><a href="file:///C:/xampp/htdocs/Seller1/categorias/html/ropa.html">Ropa</a></button>
        </div>
    </div>  
    </div>


</body>
</html>
