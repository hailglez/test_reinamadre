<?php require_once('includes/session.php');
      require_once('includes/conn.php');
      require_once('C:\xampp\htdocs\sys_employees\layouts\menu_lat.php');

?>

<script src="assets/js/jquery-1.10.2.js"></script>
<script type="text/javascript">
function mostrar(id) {
    if (id == "empresa") {
        $("#empresa").show();
        $("#departamento").hide();
    }

    if (id == "departamento") {
        $("#empresa").hide();
        $("#departamento").show();
        $("#autonomo").hide();
        $("#paro").hide();
    }

}

</script>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Generar Objetivos</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/awesome/font-awesome.css">
        <link rel="stylesheet" href="assets/css/animate.css">
    </head>

<body>

<form class="form-control" action="index.php" method="post">
    Seleciona la opcion que deseas. 
    <select id="status" name="status" onChange="mostrar(this.value);">
        <option value="empresa">Empresa</option>
        <option value="departamento">Departamento</option>
     </select>
</form>

<div id="empresa" style="display: none;">
    <h2>Selecciona las opciones correctamente...</h2>
    <form action="index.php" method="post">
        <p>Nombre:<br/>
        <input type="text" name="nombre" /></p>
        <p>Centro:<br/>
        <input type="text" name="centro" /></p>
        <input type="submit" name="send" value="Enviar" />
    </form>
</div>
<div id="departamento" style="display: none;">
    <h2>Selecciona las opciones correctamente</h2>
    <form action="index.php" method="post">
        <p>empresa:<br/>
        <input type="text" name="nombre" /></p>
        <p>Departamento:<br/>
        <input type="text" name="centro" /></p>
        <input type="submit" name="send" value="Enviar" />
    </form>
</div>
</body>

<script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
             $('sams').on('click', function(){
                 $('makota').addClass('animated tada');
             });
         </script>

