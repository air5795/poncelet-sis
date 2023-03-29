<!-- HTML markup for the button and table -->
<button id="add-row-btn">Add Row</button>
<table id="product-table">
  <thead>
    <tr>
      <th>p_descripcion</th>
      <th>p_pricec</th>
    </tr>
  </thead>
  <tbody>
    <!-- Table rows will be added dynamically -->
  </tbody>
</table>

<!-- JavaScript code to handle button click and AJAX request -->
<script>
  // Get the button and table elements
  const addRowBtn = document.getElementById('add-row-btn');
  const productTable = document.getElementById('product-table');

  // Define function to add a new row to the table
  function addTableRow() {
    // Create a new row
    const newRow = productTable.insertRow(-1);

    // Create new cells for the row
    const descripcionCell = newRow.insertCell(0);
    const priceCell = newRow.insertCell(1);

    // Create a new select element for the descripcion cell
    const descripcionSelect = document.createElement('select');

    // Send an AJAX request to get the product data and populate the select element
    const xhr = new XMLHttpRequest();
    xhr.open('GET', 'getProductos.php', true);
    xhr.onload = function() {
      if (this.status === 200) {
        const products = JSON.parse(this.responseText);
        for (let i = 0; i < products.length; i++) {
          const option = document.createElement('option');
          option.text = products[i].p_descripcion;
          option.value = products[i].p_pricec;
          descripcionSelect.add(option);
        }
      }
    }
    xhr.send();

    // Add the select element to the descripcion cell
    descripcionCell.appendChild(descripcionSelect);

    // Add empty cell to price cell
    priceCell.textContent = '';

    // Add class to row to allow for CSS styling
    newRow.classList.add('product-row');
  }

  // Add event listener to button for click events
  addRowBtn.addEventListener('click', addTableRow);
</script>

<!-- PHP code for getProductos.php file -->
<?php
  // Make database connection
  $conn = new mysqli('localhost', 'username', 'password', 'database');

  // Query product data from productos table
  $query = 'SELECT p_descripcion, p_pricec FROM productos';
  $result = $conn->query($query);

  // Convert results to array and output as JSON
  $products = [];
  while ($row = $result->fetch_assoc()) {
    $products[] = $row;
  }
  echo json_encode($products);
?>
```

Note: You will need to adjust the database connection details and file paths to match your own setup.