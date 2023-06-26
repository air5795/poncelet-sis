/*  $(document).ready(function(){
	$(document).on('click', '#checkAll', function() {          	
		$(".itemRow").prop("checked", this.checked);
	});	
	$(document).on('click', '.itemRow', function() {  	
		if ($('.itemRow:checked').length == $('.itemRow').length) {
			$('#checkAll').prop('checked', true);
		} else {
			$('#checkAll').prop('checked', false);
		}
	});  
	var count = $(".itemRow").length;
	$(document).on('click', '#addRows', function() { 
		count++;
		var htmlRows = '';
		htmlRows += '<tr>';
		htmlRows += '<td><input class="itemRow" type="checkbox"></td>';          
		htmlRows += '<td><input type="text" name="productCode[]" id="productCode_'+count+'" class="form-control" autocomplete="off"></td>';
		
		htmlRows += '<td><input type="text" name="productName[]" id="productName_'+count+'" class="form-control" autocomplete="off"></td>';	

		htmlRows += '<td><input type="number" name="quantity[]" id="quantity_'+count+'" class="form-control quantity" autocomplete="off"></td>';   		
		htmlRows += '<td><input type="number" name="price[]" id="price_'+count+'" class="form-control price" autocomplete="off"></td>';		 
		htmlRows += '<td><input type="number" name="total[]" id="total_'+count+'" class="form-control total" autocomplete="off"></td>';          
		htmlRows += '</tr>';
		$('#invoiceItem').append(htmlRows);
	}); 

	function loadItems(id) {	
		$.ajax({
			url:"invoice_action.php",
			method:"POST",
			data:{action:'loadItemsList'},
			success:function(data) {
				$('#items_'+id).html(data);
			}
		});
	}
	
	$(document).on('click', '#removeRows', function(){
		$(".itemRow:checked").each(function() {
			$(this).closest('tr').remove();
		});
		$('#checkAll').prop('checked', false);
		calculateTotal();
	});		
	$(document).on('blur', "[id^=quantity_]", function(){
		calculateTotal();
	});	
	$(document).on('blur', "[id^=price_]", function(){
		calculateTotal();
	});	
	$(document).on('blur', "#taxRate", function(){		
		calculateTotal();
	});	
	$(document).on('blur', "#amountPaid", function(){
		var amountPaid = $(this).val();
		var totalAftertax = $('#totalAftertax').val();	
		if(amountPaid && totalAftertax) {
			totalAftertax = totalAftertax-amountPaid;			
			$('#amountDue').val(totalAftertax);
		} else {
			$('#amountDue').val(totalAftertax);
		}	
	});	
	$(document).on('click', '.deleteInvoice', function(){
		var id = $(this).attr("id");
		if(confirm("¿Deseas eliminar este registro?")){
			$.ajax({
				url:"action.php",
				method:"POST",
				dataType: "json",
				data:{id:id, action:'delete_invoice'},				
				success:function(response) {
					if(response.status == 1) {
						$('#'+id).closest("tr").remove();
					}
				}
			});
		} else {
			return false;
		}
	});
});	
function calculateTotal(){
	var totalAmount = 0; 
	$("[id^='price_']").each(function() {
		var id = $(this).attr('id');
		id = id.replace("price_",'');
		var price = $('#price_'+id).val();
		var quantity  = $('#quantity_'+id).val();
		if(!quantity) {
			quantity = 1;
		}
		var total = price*quantity;
		$('#total_'+id).val(parseFloat(total));
		totalAmount += total;			
	});
	$('#subTotal').val(parseFloat(totalAmount));	
	var taxRate = $("#taxRate").val();
	var subTotal = $('#subTotal').val();	
	if(subTotal) {
		var taxAmount = subTotal*taxRate/100;
		$('#taxAmount').val(taxAmount);
		subTotal = parseFloat(subTotal)+parseFloat(taxAmount);
		$('#totalAftertax').val(subTotal);		
		var amountPaid = $('#amountPaid').val();
		var totalAftertax = $('#totalAftertax').val();	
		if(amountPaid && totalAftertax) {
			totalAftertax = totalAftertax-amountPaid;			
			$('#amountDue').val(totalAftertax);
		} else {		
			$('#amountDue').val(subTotal);
		}
	}
}

  */

$(document).ready(function() {
	$(document).on('click', '#checkAll', function() {
	  $(".itemRow").prop("checked", this.checked);
	});
  
	$(document).on('click', '.itemRow', function() {
	  if ($('.itemRow:checked').length == $('.itemRow').length) {
		$('#checkAll').prop('checked', true);
	  } else {
		$('#checkAll').prop('checked', false);
	  }
	});
  
	var count = $(".itemRow").length;
  
	$(document).on('click', '#addRows', function() {
		count++;
		var htmlRows = '';
		htmlRows += '<tr>';
		htmlRows += '<td><input class="itemRow" type="checkbox"></td>';
		htmlRows += '<td><input type="text" name="productCode[]" id="productCode_' + count + '" class="form-control" autocomplete="off"></td>';
		
		htmlRows += '<td><select name="productName[]" id="productName_' + count + '" class="form-control productSelect" onchange="getProductPrice(' + count + ')"><option value="">Seleccione un producto</option></select></td>';
		
		htmlRows += '<td><input type="number" name="quantity[]" id="quantity_' + count + '" class="form-control quantity" autocomplete="off"></td>';
		htmlRows += '<td><input type="number" name="price[]" id="price_' + count + '" class="form-control price" autocomplete="off"></td>';
		htmlRows += '<td><input type="number" name="total[]" id="total_' + count + '" class="form-control total" autocomplete="off"></td>';
		htmlRows += '</tr>';
		$('#invoiceItem').append(htmlRows);
		
		// Cargar la lista de productos en el select recién creado
		loadItems(count);
	  });


	  
	  function loadItems(id) {
		$.ajax({
			url: "invoice_action.php",
			method: "POST",
			data: { action: 'loadItemsList' },
			success: function(data) {
				$('#productName_' + id).html(data);
	
				// Aplicar Select2 al select de productos
				$('#productName_' + id).select2({
					placeholder: "Seleccione un producto",
					allowClear: true
				});
	
				// Obtener el precio del producto seleccionado
				var selectedOption = $('#productName_' + id + ' option:selected');
				var priceInput = $('#price_' + id);
				if (selectedOption.val() !== "") {
					var productDescription = selectedOption.val(); // Obtener la descripción del producto
					$.ajax({
						url: "invoice_action.php",
						method: "POST",
						data: { action: 'loadItems', p_descripcion: productDescription }, // Enviar la descripción del producto
						dataType: 'json',
						success: function(response) {
							if (response.p_precioc) {
								priceInput.val(response.p_precioc);
							} else {
								priceInput.val("");
							}
						}
					});
				} else {
					priceInput.val("");
				}
			}
		});
	
	  
// Actualizar el precio cuando se seleccione otro producto
$(document).on('change', '#productName_' + id, function() {
	var selectedOption = $(this).find('option:selected');
	var priceInput = $('#price_' + id);
	if (selectedOption.val() !== "") {
	  var productDescription = selectedOption.val();
	  $.ajax({
		url: "invoice_action.php",
		method: "POST",
		data: { action: 'loadItems', p_descripcion: productDescription }, // Cambio aquí: enviar p_descripcion en lugar de id_producto
		dataType: 'json',
		success: function(response) {
		  if (response.p_precioc) {
			priceInput.val(response.p_precioc);
		  } else {
			priceInput.val("");
		  }
		}
	  });
	} else {
	  priceInput.val("");
	}
  });
  
	  }
	  
	  
	  
  
	$(document).on('click', '#removeRows', function() {
	  $(".itemRow:checked").each(function() {
		$(this).closest('tr').remove();
	  });
	  $('#checkAll').prop('checked', false);
	  calculateTotal();
	});
  
	$(document).on('blur', "[id^=quantity_]", function() {
	  calculateTotal();
	});
  
	$(document).on('blur', "[id^=price_]", function() {
	  calculateTotal();
	});
  
	$(document).on('blur', "#taxRate", function() {
	  calculateTotal();
	});
  
	$(document).on('blur', "#amountPaid", function() {
	  var amountPaid = $(this).val();
	  var totalAftertax = $('#totalAftertax').val();
	  if (amountPaid && totalAftertax) {
		totalAftertax = totalAftertax - amountPaid;
		$('#amountDue').val(totalAftertax);
	  } else {
		$('#amountDue').val(totalAftertax);
	  }
	});
  
	$(document).on('click', '.deleteInvoice', function() {
	  var id = $(this).attr("id");
	  if (confirm("¿Deseas eliminar este registro?")) {
		$.ajax({
		  url: "action.php",
		  method: "POST",
		  dataType: "json",
		  data: { id: id, action: 'delete_invoice' },
		  success: function(response) {
			if (response.status == 1) {
			  $('#' + id).closest("tr").remove();
			}
		  }
		});
	  } else {
		return false;
	  }
	});
  });
  
  function calculateTotal() {
	var totalAmount = 0;
	$("[id^='price_']").each(function() {
	  var id = $(this).attr('id');
	  id = id.replace("price_", '');
	  var price = $('#price_' + id).val();
	  var quantity = $('#quantity_' + id).val();
	  if (!quantity) {
		quantity = 1;
	  }
	  var total = price * quantity;
	  $('#total_' + id).val(parseFloat(total));
	  totalAmount += total;
	});
	$('#subTotal').val(parseFloat(totalAmount));
	var taxRate = $("#taxRate").val();
	var subTotal = $('#subTotal').val();
	if (subTotal) {
	  var taxAmount = subTotal * taxRate / 100;
	  $('#taxAmount').val(taxAmount);
	  subTotal = parseFloat(subTotal) + parseFloat(taxAmount);
	  $('#totalAftertax').val(subTotal);
	  var amountPaid = $('#amountPaid').val();
	  var totalAftertax = $('#totalAftertax').val();
	  if (amountPaid && totalAftertax) {
		totalAftertax = totalAftertax - amountPaid;
		$('#amountDue').val(totalAftertax);
	  } else {
		$('#amountDue').val(subTotal);
	  }
	}
  }
  
  function getProductPrice(rowId) {
	var select = $('#productName_' + rowId);
	var selectedOption = select.find('option:selected');
	var priceInput = $('#price_' + rowId);
  
	if (selectedOption.val() !== "") {
	  var price = selectedOption.attr("data-price");
	  priceInput.val(price);
	} else {
	  priceInput.val("");
	}
  }
  