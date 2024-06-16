
<div class="proyecto">



  <div class="container text-center">
    <img class="img" src="../asset/essalud.png" alt="">
    <h1> LISTA DE MEDICAMENTOS</h1>


    <nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    
  <input  class="form-control me-2" class="form-control" type="text" id="searchInput" onkeyup="searchTable()" placeholder="Buscar por nombres..">
      
    </form>
  </div>
</nav>

    

  </div>

<div class="row">
  <div class="">
    <table class="table table-dark table-striped" id="myTable">
    
      <thead>
        <tr>
      
          <th scope="col">SKU</th>
          <th scope="col">NOMBRE</th>
          <th scope="col">COMPONENTES</th>
          <th scope="col">CANTIDAD</th>
          <th scope="col">LABORATORIO</th>
          <th scope="col">tipo</th>
        </tr>
      </thead>
    
      <tbody>
      <?php foreach ($medicamentos as $medicamentos):    
      ?>
      <form action="../controladores/Delete.php" method="post">
        <tr>
          
          
          <td><?php echo $medicamentos['sku']; ?></td>
          <td><?php echo $medicamentos['nombre']; ?></td>
          <td><?php echo $medicamentos['componente']; ?></td>
          <td><?php echo $medicamentos['cantidad']; ?></td>
          <td><?php echo $medicamentos['laboratorio']; ?></td>
          <td><?php echo $medicamentos['tipo']; ?></td>
          <td><button name="elimarMedicamento" value="<?php echo $medicamentos['id']; ?>" class="btn btn-danger" type="submit" >Eliminar Medicamento</button></td>
      
        </tr>
      </form>
        
        <?php endforeach; ?>
        
      </tbody>
    </table>
  </div>

</div>
<script>
function searchTable() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("searchInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");

    for (i = 1; i < tr.length; i++) {
        tr[i].style.display = "none";
        td = tr[i].getElementsByTagName("td");
        for (var j = 0; j < td.length; j++) {
            if (td[j]) {
                txtValue = td[j].textContent || td[j].innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                    break;
                }
            }
        }
    }
}
</script>

