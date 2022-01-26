 
<?php require_once('includes/session.php');
      require_once('includes/conn.php');
      require_once('C:\xampp\htdocs\sys_employees\layouts\menu_lat.php');


?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Ver Objetivos</title>

             <!-- Bootstrap CSS CDN -->
             <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/awesome/font-awesome.css">
        <link rel="stylesheet" href="assets/css/animate.css">
         <link rel="stylesheet" href="vendors/datatables/datatables.min.css">
    </head>
    <body>
   
                <?php
                $sqlb = "SELECT * FROM employees ";
                $resultado = mysqli_query($mysqli, $sqlb);
                ?>
             

                <div class="panel panel-default sammacmedia">
                 <div class="panel-heading"> Todos los Empleados </div>
                 <div class="panel-body">
                 <table class="table table-striped thead-dark table-bordered table-hover" id="myTable">
                <thead>
                <tr>
                    <th>id</th>
                    <th> nombre</th>
                    <th> fecha de nacimiento </th>
                    <th> Telefono </th>                  
                    <th> fecha ingreso </th>
                    <th> empresa </th>
                    <th> departamento </th>
                    <th> Accion </th>
                    </tr>
                </thead>
                <?php $n=0; while($row = mysqli_fetch_array($resultado)){ $n++;?>
                          <tr>
                    
                            <td ><?php echo $n; ?></td>
                            <td ><?php echo $row["name"]; 
                            echo'<br>'; echo $row["surname"]; ?> 
                            <td ><?php echo $row["fecha_nacimiento"]; ?></td>
                            <td ><?php echo $row["phone"]; ?></td>
                            <td ><?php echo $row["fecha_ingreso"]; ?></td>
                            <td ><?php echo $row["empresa"]; ?></td>
                            <td ><?php echo $row["departamento"]; ?></td>
                            <td>
                     <a href="#samstrover<?php echo $row['employee_id']; ?>" data-toggle="modal" class="btn btn-warning"><span class="fa fa-pencil"></span> Editar</a><br>
                  <a href="objetivos.php?edited=1&idx=<?php echo $row['id']; ?>" data-toggle="modal" class="btn btn-danger"><span class="fa fa-times"></span> Eliminar</a>  
                              </td>
                          </tr>
                          <?php
                        //  require('userInfos.php');
                          }
                      if (isset($_GET['idx']) && is_numeric($_GET['idx']))
                      {
                          $id = $_GET['idx'];
                          if ($stmt = $mysqli->prepare("DELETE FROM employees 
                          WHERE id = '".$id."' "))
                          {
                              $stmt->bind_param("i",$id);
                              $stmt->execute();
                              $stmt->close();
                               ?>
                               <script type="text/javascript">
                                alert("Elemento eliminado correctamente");
                                window.location.href="v_users.php";
                                </script>'; 
                    <?php
                          }
                          else {
                    ?>
                    <div class="alert alert-danger samuel" id="sams1">
                    <a href="#" class="close" data-dismiss="alert">&times;</a>
                    <strong> Danger! </strong><?php echo'OOPS, inténtalo de nuevo, algo salió mal';?></div>
                    <?php
                          }
                          $mysqli->close();
                      }
                      ?>
                </table>
            </div>
            
            
                </div>
                <div class="line"></div>
                <footer>
            <p class="text-center">
            Hail Alejandro Gonzalez &copy;<?php echo date("Y ");?>Copyright. All Rights Reserved. 
            </p>
            </footer>
            </div>
            
        </div>

        <script src="assets/js/jquery-1.10.2.js"></script>
         <script src="assets/js/bootstrap.min.js"></script>
         <script src="vendors/datatables/datatables.min.js"></script>
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
         <script type="text/javascript">

        $(document).ready(function () {
 
            window.setTimeout(function() {
        $("#sams1").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove(); 
        });
            }, 5000);
 
        });
    </script>
         <script type="text/javascript">
             
             $(document).ready( function () {
                 $('#myTable').DataTable();
             } );
         </script>
    </body>
</html>
