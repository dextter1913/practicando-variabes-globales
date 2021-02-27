<?php 
    include("./fragmentos/header.php");
?>

<?php 
    session_start();
    ob_start();
    $_SESSION['sesion_exito']=0;
    $_user = $_POST['usuario'];
    $_pass =  $_POST['contraseña'];

    if ($_user=="" || $_pass == "") {
        $_SESSION['sesion_exito']=2;//error de campos vacios
    }
    else {
        include("./conexiones/abrir.php");
        $_SESSION['sesion_exito']=3;// datos incorrectos
        $registros = mysqli_query($conexion, ("SELECT * FROM $tb1 WHERE user = '$_user' AND pass = '$_pass'"));        
        while ($consulta = mysqli_fetch_array($registros)) {
            $_SESSION['sesion_exito']=1;// inicio session :D
        }
        include("./conexiones/cerrar.php");
    }
    if ($_SESSION['sesion_exito']<>1) {
        header('location:index.php');
    }

    ?>


<center><h1><b>BIENVENIDO</b></h1></center>

<?php 
    include("./fragmentos/footer.php");
?>