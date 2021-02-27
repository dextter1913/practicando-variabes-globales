<?php 
    include("./fragmentos/header.php");
?>

    <h1><center>Practicando variabes globales</center></h1><br><br>

    <div class="container">
        <div class="row row-cols-3">
            <div class="col"></div>
            <div class="col">
                <center><h2>Inicar Sesion</h2></center><br><br>
                <form action="./registro.php" method="post">
                    <div class="form-floating mb-3">
                        <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
                        <label for="usuario">Usuario</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Contraseña">
                        <label for="contraseña">Contraseña</label><br><br>
                    </div>
                    <input type="submit" value="Ingresar" name="btniniciar" class="btn btn-light">
                </form>
                    <?php 
                        session_start();
                        ob_start();
                        if ($_SESSION['sesion_exito']==0) {
                            echo "Inicie Sesion por favor";
                        }
                        if ($_SESSION['sesion_exito']==2) {
                            echo "los campos son OBLIGATORIOS";
                        }
                        if ($_SESSION['sesion_exito']==3) {
                            echo "Datos incorrectos";
                        }
                    ?>
            </div>
            <div class="col"></div>
        </div>
    </div>


<?php
    include("./fragmentos/footer.php");
?>