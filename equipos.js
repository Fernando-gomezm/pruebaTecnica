/*$(document).ready(function(){
    $.ajax({
        url: 'phps/equipos.js',
        type: 'GET',
        dataType: 'json'
    }).done(function(data){
        var $select = $('#equipos').$selectpicker();
        $.each(data, function(i, item){
            $select.append($("<option></oiption")
                .attr('value', item.id_equipo)
                .text(item.curso))
        });
    });

});*/