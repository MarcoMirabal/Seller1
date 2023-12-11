<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="../css/categorias.css">
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
                    <li><a href="file:///C:/xampp/htdocs/Seller1/paginapincipal/html/paginaprincial.html">inicio</a></li>
                    <li><a href="file:///C:/xampp/htdocs/Seller1/categorias/html/categorias.html">Categorías</a></li>
                    <li><a href="file:///C:/xampp/htdocs/Seller1/Sistema%20de%20Nosotros/HTML/index.html">Nosotros</a></li>
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


   <?php

$base = "bd seller";
$Conexion = mysqli_connect("localhost", "root", "", $base);

$cadena = "SELECT * FROM producto WHERE categorias = 'Ropa'" ;

$consulta = mysqli_query($Conexion, $cadena);
while ($registro = mysqli_fetch_row($consulta)) {
echo '<form class = "item" action="../../TL/html/seleccion3.php?id='.$registro[8].'" method="post">
<figure>
    <img src="data:image/jpeg;base64,' . base64_encode( $registro[0]) .'" alt="">
</figure>
<div class="info-product">
    <button>comprar</button>
</div>
</form>';
}
?>
    

    </div>


</body>
</html>
