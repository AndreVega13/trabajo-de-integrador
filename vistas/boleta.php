<div class="container text-center">
    <img class="img" src="../asset/essalud.png" alt="">

</div>



<div>
    <h2>Buscar Medicamentos</h2>
    <form id="productForm">
        <label for="productName">Nombre del Medicamento:</label><br>
        <input class="btn btn-outline-secondary" type="text" id="productName" name="productName" required><br><br>
        <label for="quantity">Cantidad:</label><br>
        <input class="btn btn-outline-secondary" type="number" id="quantity" name="quantity" required><br><br>
        <button type="submit" class="btn btn-success">Agregar al carrito</button>
    </form>
</div>
<div class="container text-center">
<h2>lista de medicamentos</h2>
<table class="table table-hover" id="cartTable">
    <thead>
        <tr>
            <th>Nombre del Medicamento</th>
            <th>Cantidad</th>
        </tr>
    </thead>
    <tbody>
    </tbody>
</table>

 <button class="btn btn-warning" id="generatePDF">Generar Constancia PDF</button>

</div>
<script src="../asset/js/jspdf.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="../asset/js/table.js"></script>