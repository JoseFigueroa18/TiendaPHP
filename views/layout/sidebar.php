
        <!-- BARRA LATERAL -->
        <aside id="lateral">
            <div id="login" class ="block_aside">
                <h3>Entrar a la web</h3>
                <form action="<?=base_url?>usuario/login" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Ingrese su email">

                    <label for="password">Contraseña</label>
                    <input type="password" name="password" placeholder="Ingrese su contraseña">

                    <input type="submit" value="Enviar">
                </form>
                
                <ul class="lista">
                    <li><a href="index.html">Mis pedidos</a></li>
                    <li><a href="index.html">Gestionar pedidos</a></li>
                    <li><a href="index.html">Gestionar categorias</a></li>
                </ul>
                
            </div>
        </aside>

        <!-- CONTENIDO CENTRAL -->
        <div id= "central">