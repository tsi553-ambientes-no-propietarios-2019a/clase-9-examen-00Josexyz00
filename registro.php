<!DOCTYPE html>
<html>
<head>
	<title>
		Ficha de registro
	</title>
</head>
<body>

<form action="proceso_registro.php" method="POST">

	<center><h1>REGISTRO DE USUARIOS</h1></center>

    <center>    
      <div>
       
      Ingrese Nombre : <input type="text" name="nombre" required="required"><br><br><br>
      Ingrese Usuario: <input type="text" name="user" required="required"><br><br><br>
      Ingrese contraseña: <input type="password" name="clave" required="required"><br><br><br>
      Repita la contraseña: <input type="password" name="repetirclave" required="required"><br><br><br>
      Seleccione un ROL de usuario:
      <select name="tipo" required="required">
        <option value=""> </option>
        <option value="admit">Administrador</option>
        <option value="user">Cliente</option>
      </select><br><br><br>
      <input type="submit" name="REGISTRAME"><br><br><br>
 
      
    </div>
  </center>
    
  </form>

</body>
</html>