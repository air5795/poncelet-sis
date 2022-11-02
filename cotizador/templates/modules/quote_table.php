<?php if(empty($d->items)) : ?>
                    <div class="text-center">
                        <h3>La cotizacion esta Vacia</h3>
                        <img src="<?php echo IMG.'vacio.png';?>" style="width:150px;" class="img-fluid">
                    </div>
<?php else: ?>
    
                    <table class="table table-hover table-striped table-bordered">
                        <thead>
                            <tr>
                                <th><p class="alert alert-danger text-right " style="width:max-content; text-align:right;padding:0;"><?php echo sprintf('Cotizacion #%s',$d->number) ; ?></p></th>
                                <th>Concepto</th>
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th class="text-right">Subtotal</th>
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
                                        <?php echo $item->type === 'producto' ? 'Producto' : 'Servicio'; ?>
                                    </small>
                                </td>
                                <td class="text-center"><?php echo $item->quantity; ?></td>
                                <td><?php echo '$'.number_format($item->price); ?></td>
                                <td class="text-right"><?php echo '$'.number_format($item->total,2); ?></td>
                            </tr>
                        <?php endforeach; ?>  
                        

                        <tr>
                            <td class="text-right" colspan="4">Sub Total</td>
                            <td class="text-right"><?php echo '$'.number_format($d->subtotal,2); ?></td>
                            
                        </tr>
                       

                        <tr>
                            <td class="text-right" colspan="4">Impuestos</td>
                            <td class="text-right"><?php echo '$ '.number_format($d->taxes,2); ?></td>
                            
                            
                        </tr>
                        <tr>
                            <td class="text-right" colspan="4">Envio</td>
                            <td class="text-right"><?php echo '$ '.number_format($d->shipping,2); ?></td>
                            
                            
                        </tr>

                        <tr>
                        
                            <td class="text-right" colspan="5"> <b>TOTAL</b> <h3 class="text-success"> 
                                <b> <?php echo '$ '.number_format($d->total,2); ?></b></h3>
                                <small class="text-muted"><?php echo sprintf('Impuestos Incluidos %s%% IVA + %s%% IT',TAXES_RATE,TAXES_RATE)?></small>
                            </td>
                            
                            
                           
                        </tr>

                        
                        </tbody>

                        

                    </table>

                    </div>

                    
                    </div>

                    

                <?php endif ; ?>
            
            
            