<?php if(empty($d->items)) : ?>
                    <div class="text-center">
                        <h3>La cotizacion esta Vacia</h3>
                        <img src="<?php echo IMG.'vacio.png';?>" style="width:150px;" class="img-fluid">
                    </div>
<?php else: ?>
    
                    <div class="table-responsive">
                    <table class="table table-hover table-striped table-bordered table-sm">
                        <thead style="font-size:12px ;">
                            <tr style="background-color: #6e6e6e ; color:white">
                                <th style="background-color: black ;"><p class="text-right " style="width:max-content; text-align:center;padding:0;margin:0;"><?php echo sprintf('Cotizacion #%s',$d->number) ; ?></p></th>
                                <th style="width:40% ;">Concepto</th>
                                <th>Marca</th>
                                <th>Cantidad</th>
                                <th>Precio Venta</th>
                                <th>Subtotal Venta</th>
                                <th>Precio Compra </th>
                                <th>Subtotal Compra</th>
                            </tr>
                        </thead>
                        <tbody style="font-size:14px ;" >


                        <?php foreach ($d -> items as $item): ?>
                            <tr>
                                <td>
                                    <div class="btn-group">
                                        <button class="btn btn-sm btn-secondary edit_concept" data-id="<?php echo $item->id; ?>">Editar</button>
                                        <button class="btn btn-sm btn-danger delete_concept" data-id="<?php echo $item->id; ?>">Borrar</button>
                                    </div>
                                </td>
                                <td style="font-size:12px ;">
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
                        
                            <td class="text-right" colspan="6"> <b>TOTAL VENTA</b> <h3 class="text-success"> 
                                <b> <?php echo 'Bs '.number_format($d->subtotal,2); ?></b></h3>
                                
                            </td>
                            <td style="background-color: #edf5ff;" class="text-right" colspan="2"> <b>TOTAL COMPRA</b> <h3 class="text-success"> 
                                <b> <?php echo 'Bs '.number_format($d->total_c,2); ?></b></h3>
                                
                            </td>
                            
                            
                           
                        </tr>
                        <tr>
                            <td class="text-right" colspan="6"></td>
                            <td class="text-right" style="background-color: #edf5ff;">Impuestos</td>
                            <td class="text-right" style="background-color: #edf5ff;"><?php echo 'Bs '.number_format($d->taxes,2); ?></td>
                            
                            
                            
                            
                        </tr>
                        <tr>
                            <td class="text-right" colspan="6"></td>
                            <td class="text-right" style="background-color: #edf5ff;" >Envio</td>
                            <td class="text-right" style="background-color: #edf5ff;"><?php echo 'Bs '.number_format($item->shipping,2); ?></td>

                        </tr>
                        <tr >
                            <td class="text-right" colspan="5"></td>
                            <td class="text-right alert alert-danger" colspan="2" style="background-color: #fba1a9;font-weight: 600;">TOTAL GASTOS </td>
                            <td class="text-right alert alert-danger" ><?php echo 'Bs '.number_format($d->total_g,2); ?></td>

                        </tr>
                        <tr >
                            <td class="text-right" colspan="5"></td>
                            <td class="text-right alert alert-success" colspan="2" style="background-color: #c3d9c8; font-weight: 600;">TOTAL GANANCIA </td>
                            <td class="text-right alert alert-success" ><?php echo 'Bs '.number_format(($d->subtotal) - ($d->total_g),2); ?></td>
                        </tr>
                        <tr >
                            <td class="text-right" colspan="5"></td>
                            <td class="text-right alert alert-success" colspan="2" style="background-color: #c3d9c8; font-weight: 600;">% de GANANCIA </td>
                            <td class="text-right alert alert-success" >
                                <?php 

                                    $GANANCIA = 0;
                                    $GANANCIA = round(($d->subtotal) - ($d->total_g),2);
                                    echo number_format((($GANANCIA) * 100 ) / ($d->subtotal),2).' %'; ?>
                            </td>
                        </tr>
                    

                        
                        </tbody>

                        

                    </table>

                    </div>

                    

                <?php endif ; ?>
            
            
            