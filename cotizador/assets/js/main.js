$('document').ready(() =>{

    // cargar contenido de la cotizaicon
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
});