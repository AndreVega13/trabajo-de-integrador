<div class="proyecto">
<div class="container text-center">
<img class="img" src="../asset/essalud.png" alt="">
<h1> REGISTRO DE USUARIO</h1>
<div>
<div class="container">
    
  <div class="row">
        <div class="col-sm-5 col-md-6">
            <img src="../asset/registro.jpg" class="img-thumbnail" alt="...">

        </div>

        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
            <div>
            <form action="../controladores/Create.php" method="post">

    
            <label for="formGroupExampleInput" class="form-label" >Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre">
            </div>
            <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label" >Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Apellidos">
            </div>
            <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">DNI</label>
            <input type="text" class="form-control" id="dni" name="dni" placeholder="ingresar DNI">
            </div>
            <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Rol</label>
            <select class="form-select" aria-label="Default select example" name="rol" >
            <option selected>selecciona el rol</option>
            <option value="1">Operador</option>
            <option value="2">Admin</option>
            </select>
            </div>
            <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Usuario</label>
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuario">
            </div>
            <div class="mb-3">
            <label for="formGroupExampleInput" class="form-label">Contraseña</label>
            <input type="text" class="form-control" id="password" name="password" placeholder="Contraseña">
            </div>
            <input btn btn-outline-success type="submit" name="registrarUsuario" value="Registrar Usuario" class="btn btn-success">
            </form>

            
            </div>
            
        </div>
  </div>


    
    
    


  </div>
</div>