            <?php if(empty($d->items)) : ?>
                    <div class="text-center">
                        <h3>La cotizacion esta Vacia</h3>
                        <img src="<?php echo IMG.'vacio.png';?>" style="width:150px;" class="img-fluid">
                    </div>
                <?php else: ?>

                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                            <th>Concepto</th>
                            <th>Marca</th>
                            <th>U/M</th>
                            <th>Cantidad</th>
                            <th>Precio Compra</th>
                            <th>Precio Venta</th>
                            <th>Sub-total Compra</th>
                            <th>Sub-total Venta</th>

                            </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($d -> items as $item): ?>
                            <tr>
                            <td><?php echo $item->concept; ?></td>
                            <td><?php echo $item->marc; ?></td>
                            <td><?php echo $item->unidad; ?></td>
                            <td><?php echo $item->quantity; ?></td>
                            <td><?php echo 'Bs '.number_format($item->price_c); ?></td>
                            <td><?php echo 'Bs '.number_format($item->price_v); ?></td>
                            <td><?php echo 'Bs '.number_format($item->subtotal_c); ?></td>
                            <td><?php echo 'Bs '.number_format($item->subtotal_v); ?></td>
                            
                        <?php endforeach; ?>  
                        
                        <tr>
                            <td class="text-right" colspan="3">SubTotal</td>
                            <td class="text-right"><?php echo 'Bs '.number_format($d->subtotal); ?></td>
                        </tr>

                        <tr>
                            <td class="text-right" colspan="3">Impuestos</td>
                            <td class="text-right"><?php echo 'Bs '.number_format($d->taxes); ?></td>
                        </tr>
                        <tr>
                            <td class="text-right" colspan="3">Envio</td>
                            <td class="text-right"><?php echo 'Bs '.number_format($d->shipping); ?></td>
                        </tr>

                        <tr>
                            <td class="text-right" colspan="4"> <b>TOTAL</b> <h3 class="text-success"> <b> <?php echo '$'.number_format($d->total); ?></b></h3></td>
                        </tr>

                        
                        </tbody>

                        

                    </table>

                    <div class="card-footer">
                  <button class="btn btn-primary" type="submit" >Descargar PDF</button>
                  <button class="btn btn-success" type="reset" >Enviar por CORREO</button>
              </div>

                <?php endif ; ?>
            
            
            