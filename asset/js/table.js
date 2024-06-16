const productForm = document.getElementById('productForm');
const cartTable = document.getElementById('cartTable').getElementsByTagName('tbody')[0];

productForm.addEventListener('submit', function(event) {
    event.preventDefault();
    const productName = document.getElementById('productName').value;
    const quantity = parseInt(document.getElementById('quantity').value);

    fetch('agregar_producto.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ productName: productName, quantity: quantity })
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            addToCart(productName, quantity);
            alert(`Producto ${productName} agregado al carrito.`);
        } else {
            alert(data.message);
        }
    })
    .catch(error => console.error('Error:', error));

    productForm.reset();
});

function addToCart(productName, quantity) {
    const row = cartTable.insertRow();
    const cell1 = row.insertCell(0);
    const cell2 = row.insertCell(1);
    cell1.textContent = productName;
    cell2.textContent = quantity;
}

document.getElementById('generatePDF').addEventListener('click', function() {
    const { jsPDF } = window.jspdf;
    const doc = new jsPDF();

    doc.text("Boleta de Compras", 20, 20);

    let y = 30;
    doc.text("Producto", 20, y);
    doc.text("Cantidad", 100, y);

    const rows = cartTable.getElementsByTagName('tr');
    for (let i = 0; i < rows.length; i++) {
        const cells = rows[i].getElementsByTagName('td');
        if (cells.length > 0) {
            y += 10;
            doc.text(cells[0].textContent, 20, y);
            doc.text(cells[1].textContent, 100, y);
        }
    }

    doc.save('Constancia de entrega.pdf');
});