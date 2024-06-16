<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hospital</title>
    <link rel="stylesheet" href="asset/css/estilo1.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>



<section class="position-absolute top-50 start-50 translate-middle">
  <div class="container py-5 h-100">
  <form action="controladores/login.php" method="post" >
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0"> 
            <div class="col-lg-6">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="asset/essalud.png"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">LOGIN</h4>
                </div>

                <form action="controlador/login.php" method="post">

                <div class="mb-3">
                    <label class="form-label" for="user">Usuario</label>
                    <input type="text" class="form-control" id="usuario" name="usuario"
                      placeholder="Ingresar usuario" />
                    
                  </div>

                  <div class="mb-3">
                    <label class="form-label" for="password">Contraseña</label>
                    <input type="password" class="form-control" id="password" name="password">
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <input type="submit" name="ingresar" value="Ingresar" class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3">
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
              <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                <h4 class="mb-4">Somos más que una simple empresa</h4>
                <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                  exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    
</body>
</html>