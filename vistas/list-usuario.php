<div class="proyecto">

<div class="container text-center">
<img class="img" src="../asset/essalud.png" alt="">
<h1> LISTA DE USUARIOS</h1>
  <div class="row">
    <div class="">
<table class="table table-dark table-striped">
  <thead>
    <tr>
    
      <th scope="col">NOMBRE</th>
      <th scope="col">APELLIDOS</th>
      <th scope="col">DNI</th>
      <th scope="col">ROL</th>
    </tr>
  </thead>
 
  <tbody>
  
  <?php foreach ($usuario as $usuario):    
  ?>
  <form action="../controladores/Delete.php" method="post">
    <tr>

      <td name="nombre"><?php echo $usuario['nombre']; ?></td>
      <td name="apellido"><?php echo $usuario['apellidos']; ?></td>
      <td name="dni"><?php echo $usuario['dni']; ?></td>
      <td name="rop"><?php echo $usuario['rop']; ?></td>
      <td><button name="elimarusuario" value="<?php echo $usuario['id']; ?>"type="submit" class="btn btn-danger">Eliminar Usuario</button></td>
      
 
    </tr>
  </form>
    <?php endforeach; ?>
   
  </tbody>
  
 

</table>

   

    
  </div>
</div>
</div>












