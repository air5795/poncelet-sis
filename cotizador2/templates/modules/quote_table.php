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
                                <th>Cantidad</th>
                                <th>Precio</th>
                                <th class="text-right">Subtotal</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($d -> items as $item): ?>
                            <tr>
                                <td><?php echo $item->concept; ?></td>
                                <td><?php echo $item->quantity; ?></td>
                                <td><?php echo '$'.number_format($item->price); ?></td>
                                <td class="text-right"><?php echo '$'.number_format($item->total,2); ?></td>
                            </tr>
                        <?php endforeach; ?>  
                        

                        <tr>
                            <td class="text-right" colspan="3">Sub Total</td>
                            <td class="text-right"><?php echo '$ '.number_format($d->subtotal,2); ?></td>
                            
                        </tr>
                       

                        <tr>
                            <td class="text-right" colspan="3">Impuestos</td>
                            <td class="text-right"><?php echo '$ '.number_format($d->taxes,2); ?></td>
                            
                            
                        </tr>
                        <tr>
                            <td class="text-right" colspan="3">Envio</td>
                            <td class="text-right"><?php echo '$ '.number_format($d->shipping,2); ?></td>
                            
                            
                        </tr>

                        <tr>
                            <td class="text-right" colspan="6"> <b>TOTAL</b> <h3 class="text-success"> 
                                <b> <?php echo '$ '.number_format($d->total,2); ?></b></h3></td>
                            
                            <small class="text-muted"><?php echo sprintf('Impuestos incluidos %s%% IVA',TAXES_RATE)?></small>
                           
                        </tr>

                        
                        </tbody>

                        

                    </table>

                    </div>

                    
                    </div>

                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit" >Descargar PDF</button>
                        <button class="btn btn-success" type="reset" >Enviar por CORREO</button>
                    </div>

                <?php endif ; ?>
            
            
            