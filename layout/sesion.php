<?php
session_start();
if(isset($_SESSION['sesion_email'])){

    $email = $_SESSION['sesion_email'];
     //echo "Sesion de ".$_SESSION['sesion_email'];
    $sql = "SELECT * FROM t_usuarios WHERE email= '$email' ";

    //Preparar y ejecutar la consulta
    $query = $pdo->prepare($sql);
    $query->execute();
    $usuarios =  $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($usuarios as $usuario){
        $nombres = $usuario['nombres'];

    }
}else{
  header('Location: '. $URL. '/login');
}
?>