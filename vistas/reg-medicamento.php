<div class="proyecto">
<div class="container text-center">
  <img class="img" src="../asset/essalud.png" alt="">
<h1> REGISTRO DE MEDICAMENTO</h1>
<div>
<div class="container">
    
  <div class="row">
        <div class="col-sm-5 col-md-6">
            <img src="../asset/medicina.png" class="img-thumbnail" alt="...">

        </div>

        <div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">
            <div>
  <form action="../controladores/Create.php" method="post" >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">sku</label>
    <input type="text" class="form-control" id="sku" name="sku" placeholder="Codigo del medicamento">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre del medicamento">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Componente</label>
    <input type="text" class="form-control" id="componente" name="componente" placeholder="Componente del medicamento">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Cantidad</label>
    <input type="text" class="form-control" id="cantidad" name="cantidad">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Laboratorio</label>
    <input type="text" class="form-control" id="laboratorio" name="laboratorio" placeholder="Laboratorio del medicamento">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Tipo</label>
    <input type="text" class="form-control" id="tipo" name="tipo" placeholder="tipo de medicamento">
  </div>
  <input btn btn-outline-success type="submit" name="registrarMedicamento" value="Registrar Medicamento" class="btn btn-success">
  
  
</form>
</div>
            
</div>
</div>
</div>
    
  