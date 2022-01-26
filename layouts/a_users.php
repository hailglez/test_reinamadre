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

        <title> Añadir Usuarios</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="assets/awesome/font-awesome.css">
        <link rel="stylesheet" href="assets/css/animate.css">
    </head>
    <body>
                            <?php
                            if(isset($mysqli,$_POST['submit'])){
                            $name = mysqli_real_escape_string($mysqli,$_POST['name']);
                            $surname = mysqli_real_escape_string($mysqli,$_POST['surname']);
                            $fechna = mysqli_real_escape_string($mysqli,$_POST['fecha_nacimiento']);
                            $phone = mysqli_real_escape_string($mysqli,$_POST['phone']); 
                            $cellphone = mysqli_real_escape_string($mysqli,$_POST['cellphone']); 
                            $email = mysqli_real_escape_string($mysqli,$_POST['email']);
                            $fechain = mysqli_real_escape_string($mysqli,$_POST['fecha_ingreso']);          
                            $genero = mysqli_real_escape_string($mysqli,$_POST['genero']);          
                            $empresa_id = mysqli_real_escape_string($mysqli,$_POST['empresa_id']);          
                            $departamento_id = mysqli_real_escape_string($mysqli,$_POST['departamento_id']);          
                            $employee_id = 'hailglez' . rand();
                            $joinedsys = date('Y m d');
                            $sql_n = "SELECT * FROM employees WHERE email ='$email'";
                            $res_n = mysqli_query($mysqli, $sql_n);    
                            if(mysqli_num_rows($res_n) > 0){
                            ?>
                             <div class="alert alert-danger samuel animated shake" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> Danger! </strong><?php echo'lo siento, el email ya está asignado a alguien';?></div>
                        <?php    
                       }else{      
                  
                        $sqlselect1 = mysqli_query($mysqli, "SELECT * FROM empresas WHERE empresa_id = '{$_POST['empresa_id']}'");
                        $sqlslc1 = mysqli_fetch_array($sqlselect1);
                        $empresa_id1 = $sqlslc1['nombre'];

                $sql = "INSERT INTO employees(name,surname,fecha_nacimiento,phone,cellphone,email,fecha_ingreso,genero,joinedsys,empresa,employee_id)
                VALUES('$name','$surname','$fechna','$phone','$cellphone','$email','$fechain','$genero','$joinedsys','$empresa_id1','$employee_id')";
                $results = mysqli_query($mysqli,$sql);
                 
                $sqlselect =  "SELECT * FROM departametos WHERE departamento_id = '{$_POST['departamento_id']}' ORDER BY id ASC";
                $sqlslc = mysqli_query($mysqli,$sqlselect);
                $departamento1 = $sqlslc['departamento'];

                $sql2 = "INSERT INTO departamentos(empresa_id,departamento,departamento_id,employee_id)
                VALUES('$empresa_id','$departamento1','$departamento_id','$employee_id')";
                $results = mysqli_query($mysqli,$sql2);

                        
                        if($results==1){
                              ?>
                        <div class="alert alert-success strover animated bounce" id="sams1">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong> ¡Cuenta creada exitosamente! </strong><?php echo'Gracias por crear una cuenta';?></div>
                        <?php

                          }else{
                                ?>
                         <div id="sams1" class="sufee-alert alert with-close alert-danger alert-dismissible fade show col-lg-12">
											<span class="badge badge-pill badge-danger">Error</span>
											Huy! Algo salió mal
											<button type="button" class="close" data-dismiss="alert" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
                        <?php    
                          }      
                      }
                 }
            
                
                ?>
		<div class="panel panel-default sammacmedia">
            <div class="panel-heading"> Añadir Usuarios<br>Los campos Marcados con * son obligatorios</div>
        <div class="panel-body">
            <form method="post" action="a_users.php">
        <div class="row form-group">
          <div class="col-lg-6">
            <label>Nombre(s)*</label>
              <input type="text" class="form-control" name="name" placeholder="Ingresa el nombre(s)" required>
            </div>  
             <div class="col-lg-6">
            <label>Apellido(s)*</label>
              <input type="text" class="form-control" name="surname" placeholder="Ingresa un apellido(s)" required>
            </div>  
        </div>
            <div class="row form-group">
          <div class="col-lg-6">
            <label>Fecha de nacimiento*</label>
              <input type="date" class="form-control" name="fecha_nacimiento"placeholder="Ingresa tu fecha de nacimiento" required>
            </div>  
             <div class="col-lg-6">
            <label>Correo*</label>
              <input type="text" class="form-control" name="email"  placeholder="ingresa tu correo lectronico" required>
            </div>
             <div class="col-lg-6">
            <label>Teléfono</label>
              <input type="text" class="form-control" name="phone" pattern="[0-9][ -]*){13}" placeholder="7227843512">
            </div>  
             <div class="col-lg-6">
            <label>Celular</label>
              <input type="text" class="form-control" name="cellphone" pattern="[0-9][ -]*){13}" placeholder="7227843512">
            </div>  
        </div>   
         <div class="row form-group">
          <div class="col-lg-6">
          <label>Fecha de ingreso*</label>
              <input type="date" class="form-control" name="fecha_ingreso" pattern="[0-9][ -]*){13}" placeholder="ingresa fecha de ingreso" required>
            </div>  
             <div class="col-lg-6">
            <label>Género</label>
             <select class="form-control" name="genero">
              <option>F</option>
              <option>M</option>      
              </select>
                <br></div>  
                <div class="col-lg-6">
            <label>Selecciona Empresa</label><br>
			<select  class="form-control"  name="empresa_id">
             <option value="0">Seleccione:</option>
            <?php
             $query = $mysqli -> query ("SELECT * FROM empresas");
                 while ($valores = mysqli_fetch_array($query)) {
                 echo '<option value="'.$valores['empresa_id'].'">'.$valores['nombre'];'</option>';
             }
             ?>
            </select>
            </div> 
            <div class="col-lg-6">
            <label>Selecciona Departamento</label><br>
			<select  class="form-control"  name="departamento_id">
             <option value="0">Seleccione:</option>
            <?php
             $query1 = $mysqli -> query ("SELECT * FROM departamentos");
                 while ($valores1 = mysqli_fetch_array($query1)) {
                 echo '<option value="'.$valores1['departamento_id'].'">'.$valores1['departamento'];'</option>';
             }
            
             ?>
            </select>
            </div> 
                <div class="col-md-3">
                    <br>
                  <button type="submit" name="submit" class="btn btn-warning btn-block"><span class="fa fa-plus"></span> Añadir</button>  
                </div>
                     <div class="col-md-3">
                         <br>
                  <button type="reset" class="btn btn-danger btn-block"><span class="fa fa-times"></span> Cancelar</button>  
                </div>
                </div>
               
            </form>

            </div>
                </div>
                <div class="line"></div>
                <footer>
            <p class="text-center">
           Hail Alejandro &copy;<?php echo date("Y ");?>Copyright. All Rights Reserved.
            </p>
            </footer>
            </div>
            
        </div>





        <!-- jQuery CDN -->
         <script src="assets/js/jquery-1.10.2.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="assets/js/bootstrap.min.js"></script>
         <script type="text/javascript">
            if (window.history.replaceState) { // verificamos disponibilidad
            window.history.replaceState(null, null, window.location.href);
            }
        </script>

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
    </body>
</html>
