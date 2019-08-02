$(document).ready(function(){
    Verifique();
    setInterval(function(){
        Verifique();
    }, 1500)
})

function Verifique(){
    $.ajax({
        url: "php/verifica.php",		
        dataType: 'json',
        type: 'POST',                                
        success: function(datos) {
            console.log(datos);
            $("#parqueos li").removeClass("ocupado");
            if (datos['estado']){
                if (datos['consulta']['puesto1']=="1"){
                    $('#puesto1').addClass('ocupado');
                }
                if (datos['consulta']['puesto2']=="1"){
                    $('#puesto2').addClass('ocupado');
                }
                if (datos['consulta']['puesto3']=="1"){
                    $('#puesto3').addClass('ocupado');
                }
                if (datos['consulta']['puesto4']=="1"){
                    $('#puesto4').addClass('ocupado');
                }
                if (datos['consulta']['puesto5']=="1"){
                    $('#puesto5').addClass('ocupado');
                }
            }
        },
        error:function(e){
            console.log(e.responseText);
        }
    });
}