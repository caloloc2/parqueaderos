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
            $("#parqueos li figure").css("display", "none");
            var libres = 5;
            var ocupados = 0;

            if (datos['estado']){
                if (datos['consulta']['puesto1']=="1"){
                    $('#puesto1').addClass('ocupado');
                    $("#puesto1 figure").css("display", "inherit");
                    ocupados+=1;
                }
                if (datos['consulta']['puesto2']=="1"){
                    $('#puesto2').addClass('ocupado');
                    $("#puesto2 figure").css("display", "inherit");
                    ocupados+=1;
                }
                if (datos['consulta']['puesto3']=="1"){
                    $('#puesto3').addClass('ocupado');
                    $("#puesto3 figure").css("display", "inherit");
                    ocupados+=1;
                }
                if (datos['consulta']['puesto4']=="1"){
                    $('#puesto4').addClass('ocupado');
                    $("#puesto4 figure").css("display", "inherit");
                    ocupados+=1;
                }
                if (datos['consulta']['puesto5']=="1"){
                    $('#puesto5').addClass('ocupado');
                    $("#puesto5 figure").css("display", "inherit");
                    ocupados+=1;
                }

                libres -= ocupados;
            }

            $('#libres').html(libres);
            $('#ocupados').html(ocupados);
        },
        error:function(e){
            console.log(e.responseText);
        }
    });
}