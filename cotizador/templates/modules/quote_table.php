<?php if(empty($d->items)) : ?>
                    <div class="text-center">
                        <h3>La cotizacion esta Vacia</h3>
                        <img src="<?php echo IMG.'vacio.png';?>" style="width:150px;" class="img-fluid">
                    </div>
<?php else: ?>
    
                    <table class="table table-hover table-striped table-bordered table-sm">
                        <thead>
                            <tr>
                                <th><p class="alert alert-danger text-right " style="width:max-content; text-align:right;padding:0;"><?php echo sprintf('Cotizacion #%s',$d->number) ; ?></p></th>
                                <th>Concepto</th>
                                <th>Marca</th>
                                <th>Cantidad</th>
                                <th>Precio de venta</th>
                                <th class="text-right">Subtotal de venta</th>
                                <th>Precio de compra </th>
                                <th class="text-right">Subtotal de compra</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($d -> items as $item): ?>
                            <tr>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-warning edit_concept" data-id="<?php echo $item->id; ?>">Editar</button>
                                        <button class="btn btn-sm btn-danger delete_concept" data-id="<?php echo $item->id; ?>">Borrar</button>
                                    </div>
                                </td>
                                <td>
                                    <?php echo $item->concept; ?>
                                    <small class="text-muted d-block">
                                        <?php echo $item->type ?>
                                    </small>
                                </td>
                                <td><?php echo $item->marca; ?></td>
                                <td class="text-center"><?php echo $item->quantity; ?></td>
                                <td class="text-right"><?php echo 'Bs '.number_format($item->price); ?></td>
                                <td class="text-right"><?php echo 'Bs '.number_format($item->total,2); ?></td>
                                <td style="background-color: #edf5ff;" class="text-right"><?php echo 'Bs '.number_format($item->price_c); ?></td>
                                <td style="background-color: #edf5ff;" class="text-right"><?php echo 'Bs '.number_format($item->total_c,2); ?></td>
                            </tr>
                        <?php endforeach; ?>  
                        

                        <tr>
                            <td class="text-right" colspan="5">Sub Total</td>
                            <td class="text-right"><?php echo 'Bs '.number_format($d->subtotal,2); ?></td>
                            <td style="background-color: #edf5ff;" class="text-right" >Sub Total Compra</td>
                            <td style="background-color: #edf5ff;" class="text-right"><?php echo 'Bs '.number_format($d->subtotal_c,2); ?></td>
                            
                        </tr>
                       

                        <tr>
                            <td class="text-right" colspan="6"></td>
                            <td class="text-right" style="background-color: #edf5ff;">Impuestos</td>
                            <td class="text-right" style="background-color: #edf5ff;"><?php echo 'Bs '.number_format($d->taxes,2); ?></td>
                            
                            
                            
                            
                        </tr>
                        <tr>
                            <td class="text-right" colspan="6"></td>
                            <td class="text-right" style="background-color: #edf5ff;" >Envio</td>
                            <td class="text-right" style="background-color: #edf5ff;"><?php echo 'Bs '.number_format($item->envio,2); ?></td>
                            
                            
                            
                        </tr>

                        <tr>
                        
                            <td class="text-right" colspan="6"> <b>TOTAL VENTA</b> <h3 class="text-success"> 
                                <b> <?php echo 'Bs '.number_format($d->subtotal,2); ?></b></h3>
                                
                            </td>
                            <td style="background-color: #edf5ff;" class="text-right" colspan="2"> <b>TOTAL COMPRA</b> <h3 class="text-success"> 
                                <b> <?php echo 'Bs '.number_format($d->total_c,2); ?></b></h3>
                                
                            </td>
                            
                            
                           
                        </tr>
                        <tr>

                        
                            <td class="text-right alert alert-danger" colspan="8"> <b>TOTAL GASTOS</b> <h3 class="text-danger"> 
                                <b> <?php echo 'Bs '.number_format($d->total_g,2); ?></b></h3>
                            

                            
                        </tr>

                        
                        </tbody>

                        

                    </table>

                    

                    

                <?php endif ; ?>
            
            
            