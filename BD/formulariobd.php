
<DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Formulario Editar Paciente </title>
</head>

<body>
<form id="form1" name="form1" method="post" action="ValidarInsertarPaciente.php">
  <table width="42%" border="0" align="center">
    <tr>
      <td colspan="2" align="center" bgcolor="#FA8072">INGRESAR USUARIO</td>
    </tr>
    <tr>
      <td width="37%" align="right" bgcolor="#FA8072">Identificacion</td>
      <td width="63%"><label for="identificacion"></label>
      <input name="identificacion" type="text" id="identificacion" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FA8072">Nombre</td>
      <td><label for="nombre"></label>
      <input name="nombre" type="text" id="nombre" id="nombre" size="40" /></td>
    </tr>
    <tr>
      <tr>
      <td align="right" bgcolor="#FA8072">Apellidos</td>
      <td><label for="apellidos"></label>
      <input name="apellidos" type="text" id="apellidos" id="apellidos" size="40" /></td>
    </tr>
    <tr>
      <td align="right" bgcolor="#FA8072">Fecha de Nacimiento </td>
      <td><label for="fechadenacimiento"></label>
      <input name="fechadenacimiento" type="date" id="fechadenacimiento" style="width:270px"  size="40" /></td>
    </tr>
   
    <tr>
      <td align="right" bgcolor="#FA8072">Sexo</td>
      <td><label for="genero"></label>
        <select name="sexo" id="sexo" style="width:270px">
          <option value="0">Seleccione</option>
          
          <?php 
			  
		  if ($pacientes->pacSexo=="Femenino")
		  {		  
		  ?>
              <option value="femenino" selected="selected">Femenino</option>
              <option value="Masculino">Masculino</option>
          <?php
          }
		  else
		  {
          ?>
          		<option value="femenino">Femenino</option>
                <option value="Masculino" selected="selected">Masculino</option>
           <?php
		  }
		  ?>          
      </select>
      
      </td>
    </tr>
    
    <tr>
      <td colspan="2" align="center" bgcolor="#5B2C6F"><input type="submit" name="button" id="button" value="Enviar" /></td>
    </tr>
  </table>
  
  <input name="IdPaciente" type="hidden" value="<?php echo $_REQUEST['IdPaciente'] ?>" />
  
  
  
</form>
</body>
</html>