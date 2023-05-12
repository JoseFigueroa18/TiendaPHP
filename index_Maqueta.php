<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tienda</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>
    <!-- CABECERA -->
    <header id="header">
        <div id="logo">
            <img src="assets/img/camiseta.png" alt="Camiseta Logo">
            <a href="index.html"> 
                Tienda de camisetas
            </a>
        </div>
    </header>

    <!-- MENU -->
    <nav id="menu">
        <ul>
            <li>
                <a href="index.html">Inicio</a>
            </li>
            <li>
                <a href="index.html">Categoria 1</a>
            </li>
            <li>
                <a href="index.html">Categoria 2</a>
            </li>
            <li>
                <a href="index.html">Categoria 3</a>
            </li>
            <li>
                <a href="index.html">Categoria 4</a>
            </li>
            <li>
                <a href="index.html">Categoria 5</a>
            </li>
        </ul>
    </nav>


    <div id="content">
        <!-- BARRA LATERAL -->
        <aside id="lateral">
            <div id="login" class ="block_aside">
                <form action="" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Ingrese su email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password" placeholder="Ingrese su contraseña>

                    <input type="submit" value="Enviar">
                </form>
                
                <a href="index.html">Mis pedidos</a>
                <a href="index.html">Gestionar pedidos</a>
                <a href="index.html">Gestionar categorias</a>
            </div>
        </aside>

        <!-- CONTENIDO CENTRAL -->
        <div id= "central">
        <h1>Productos destacados</h1>

            <div class= "product">
                <img src="assets/img/camiseta.png" alt="">
                <h2>Camiseta Azul Ancha</h2>
                <p>250 Lempiras</p>
                <a href="" class ="button">Comprar</a>
            </div>

            <div class= "product">
                <img src="assets/img/camiseta.png" alt="">
                <h2>Camiseta Azul Ancha</h2>
                <p>250 Lempiras</p>
                <a href="" class ="button">Comprar</a>
            </div>

            <div class= "product">
                <img src="assets/img/camiseta.png" alt="">
                <h2>Camiseta Azul Ancha</h2>
                <p>250 Lempiras</p>
                <a href="" class ="button">Comprar</a>
            </div>

            <div class= "product">
                <img src="assets/img/camiseta.png" alt="">
                <h2>Camiseta Azul Ancha</h2>
                <p>250 Lempiras</p>
                <a href="" class ="button">Comprar</a>
            </div>

            <div class= "product">
                <img src="assets/img/camiseta.png" alt="">
                <h2>Camiseta Azul Ancha</h2>
                <p>250 Lempiras</p>
                <a href="" class ="button">Comprar</a>
            </div>

            <div class= "product">
                <img src="assets/img/camiseta.png" alt="">
                <h2>Camiseta Azul Ancha</h2>
                <p>250 Lempiras</p>
                <a href="" class ="button">Comprar</a>
            </div>

            <div class= "product">
                <img src="assets/img/camiseta.png" alt="">
                <h2>Camiseta Azul Ancha</h2>
                <p>250 Lempiras</p>
                <a href="" class ="button">Comprar</a>
            </div>

            <div class= "product">
                <img src="assets/img/camiseta.png" alt="">
                <h2>Camiseta Azul Ancha</h2>
                <p>250 Lempiras</p>
                <a href="" class ="button">Comprar</a>
            </div>

        </div>
    </div>

    <!-- PIE DE PÁGINA -->
    <footer id="footer">
        <p>Todos los derechos reservados a José Figueroa <?=date('Y')?></p>
    </footer>



    
</body>
</html>