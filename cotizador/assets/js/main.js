$('document').ready(() =>{
    // notificaciones 
function notify(content,type = 'success') {
        let wrapper = $('.wrapper_notifications'),
        id          = Math.floor((Math.random()*500)+1),
        notification    = '<div class="alert alert-'+type+'" id="noty_'+id+'">'+content+'</div>',
        time        = 5000;

        // Insertar en el contenedor la notificacion 
        wrapper.append(notification);

        // Timer para ocultar las notificaciones
        setTimeout(function(){
            $('#noty_'+id).remove();
        },time);

        return true;
    }


    // cargar contenido de la cotizacion
function get_quote(){
        let wrapper = $('.wrapper_quote'),
        action      = 'get_quote_res';
        

        $.ajax({
            url:'ajax.php',
            type: 'get',
            cache: false,
            dataType:'json',
            data:{action},
            beforeSend: function(){
                wrapper.waitMe();
            }
        }).done(res =>{
            if (res.status === 200) {
                
                wrapper.html(res.data.html);
            }else{
                
                wrapper.html(res.msg);
            }

        }).fail(err =>{
            wrapper.html('Ocurrio un Error, recarga la pagina ....');
        }).always(() =>{
            wrapper.waitMe('hide');
        });
    }
    get_quote();

    

    // funcion para agregar un concepto a la cotizacion 
    $('#add_to_quote').on('submit',add_to_quote);
function add_to_quote(e){
        e.preventDefault();
        
        let form    = $('#add_to_quote'),
            action  = 'add_to_quote',
            data    = new FormData(form.get(0)),
            errors  = 0;


        // agregar la accion al objeto data
        data.append('action',action);

        // validar el concepto

        let concepto = $('#concepto').val(),
        precio      = parseFloat($('#precio_unitario').val());

        if (concepto.length < 5) {
            notify('Ingresa un concepto valido porfavor.','danger');
            errors++;
        }

        // validar el precio 

        if (precio < 10 ) {
            notify('Porfavor ingresa un precio mayor a 10.','danger');
            errors++;
        }


        if (errors > 0) {
            notify('Complete el formulario.','danger');
            return false;
        }

        $.ajax({
            url         :'ajax.php',
            type        :'POST',
            dataType    :'json',
            cache       : false,
            processData : false,
            contentType : false,
            data        : data,
            beforeSend: () => {
                form.waitMe();
            }
        }).done(res =>{
            if (res.status === 201) {
                notify(res.msg);
                form.trigger('reset');
                get_quote();
            } else{
                notify (res.msg,'danger');
            }
        }).fail(err =>{
            notify('Hubo un problema con la peticion, intenta de nuevo.','danger');
            form.trigger('reset');
        }).always(() =>{
            form.waitMe('hide');
        })




    }


  // Funcion para reiniciar la cotizacin
  $('.restart_quote').on('click', restart_quote);
  function restart_quote(e) {
    e.preventDefault();

    let button = $(this),
    action     = 'restart_quote';

    if(!confirm('¿Estas seguro?')) return false;

    // Petición
    $.ajax({
      url     : 'ajax.php',
      type    : 'post',
      dataType: 'json',
      data    : {action}
    }).done(res => {
      if(res.status === 200) {
        notify(res.msg);
        get_quote();
      } else {
        notify(res.msg, 'danger');
      }
    }).fail(err => {
      notify('Hubo un problema con la peticion.', 'danger');
    }).always(() => {

    });
  }

  // Función para borrar un concepto
  $('body').on('click', '.delete_concept', delete_concept);
  function delete_concept(e) {
    e.preventDefault();

    let button = $(this),
    id         = button.data('id'),
    action     = 'delete_concept';

    if(!confirm('¿Estás seguro?')) return false;

    // Petición
    $.ajax({
      url     : 'ajax.php',
      type    : 'post',
      dataType: 'json',
      data    : {action, id},
      beforeSend: () => {
        $('body').waitMe();
      }
    }).done(res => {
      if(res.status === 200) {
        notify(res.msg);
        get_quote();
      } else {
        notify(res.msg, 'danger');
      }
    }).fail(err => {
      notify('Hubo un problema con la petición.', 'danger');
    }).always(() => {
      $('body').waitMe('hide');
    });
  }

    // Función cargar un sólo concepto
    $('body').on('click', '.edit_concept', edit_concept);
    function edit_concept(e) {
      e.preventDefault();
  
      let button             = $(this),
      id                     = button.data('id'),
      action                 = 'edit_concept',
      wrapper_update_concept = $('.wrapper_update_concept'),
      form_update_concept    = $('#save_concept');
  
      // Petición
      $.ajax({
        url     : 'ajax.php',
        type    : 'post',
        dataType: 'json',
        data    : {action, id},
        beforeSend: () => {
          $('body').waitMe();
        }
      }).done(res => {
        if(res.status === 200) {
          $('#id_concepto', form_update_concept).val(res.data.id);
          $('#concepto', form_update_concept).val(res.data.concept);
          $('#tipo option[value="'+res.data.type+'"]', form_update_concept).attr('selected', true);
          $('#cantidad', form_update_concept).val(res.data.quantity);
          $('#precio_unitario', form_update_concept).val(res.data.price);
          wrapper_update_concept.fadeIn();
          notify(res.msg);
        } else {
          notify(res.msg, 'danger');
        }
      }).fail(err => {
        notify('Hubo un problema con la petición.', 'danger');
      }).always(() => {
        $('body').waitMe('hide');
      });
    }



    // Función guardar cambios de concepto editado
  $('#save_concept').on('submit', save_concept);
  function save_concept(e) {
    e.preventDefault();

    let form               = $('#save_concept'),
    action                 = 'save_concept',
    data                   = new FormData(form.get(0)),
    wrapper_update_concept = $('.wrapper_update_concept'),
    errors                 = 0;
    
    // Agregar la acción al objeto data
    data.append('action', action);

    // Validar el concepto
    let concepto = $('#concepto', form).val(),
    precio       = parseFloat($('#precio_unitario', form).val());

    if(concepto.length < 5) {
      notify('Ingresa un concepto válido por favor.', 'danger');
      errors++;
    }

    // Validar el precio
    if(precio < 10) {
      notify('Por favor ingresa un precio mayor a $10.00', 'danger');
      errors++;
    }

    if(errors > 0) {
      notify('Completa el formulario.', 'danger');
      return false;
    }

    $.ajax({
      url        : 'ajax.php',
      type       : 'POST',
      dataType   : 'json',
      cache      : false,
      processData: false,
      contentType: false,
      data       : data,
      beforeSend: () => {
        form.waitMe();
      }
    }).done(res => {
      if(res.status === 200) {
        wrapper_update_concept.fadeOut();
        form.trigger('reset');
        notify(res.msg);
        get_quote();
      } else {
        notify(res.msg, 'danger');
      }
    }).fail(err => {
      notify('Hubo un problema con la petición, intenta de nuevo.', 'danger');
      wrapper_update_concept.fadeOut();
      form.trigger('reset');
    }).always(() => {
      form.waitMe('hide');
    })
  }

 // Hide edit box ocultar despues de cancelar la edicion
 $('#cancel_edit').on('click', (e) => {
    e.preventDefault();

    let button = $(this),
    wrapper    = $('.wrapper_update_concept'),
    form       = $('#save_concept');

    wrapper.fadeOut();
    form.trigger('reset');
  });

});