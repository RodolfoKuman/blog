$(document).on("ready",inicio);

function inicio(){
    $("span.help-block").hide();
    $("#enviar").click(function(){
        
        validaTexto("NombreAg");
        validaTexto("NombreCo");
        validaTexto("dir");
        validaTexto("puestoCo");
        validaNum("telCo");
        validaMail("mail");
        validaTexto("web");
        if(!validaTexto("NombreAg") || !validaTexto("NombreCo") || !validaTexto("dir") || !validaTexto("puestoCo") || !validaNum("telCo") || !validaMail("mail") || !validaTexto("web")){
            return false;
        }
    });
        $("#NombreAg").blur(function(){validaTexto("NombreAg")});
        $("#NombreCo").blur(function(){validaTexto("NombreCo")});
        $("#dir").blur(function(){validaTexto("dir")});
        $("#puestoCo").blur(function(){validaTexto("puestoCo")});
        $("#telCo").blur(function(){validaNum("telCo")});
        $("#mail").blur(function(){validaMail("mail")});
        $("#web").blur(function(){validaTexto("web")});
        $("#inputPass").keypress(function(){Mayusculas(event)});
}


function validaTexto(id){
    
    if( $("#"+id).val() == null || $("#"+id).val() == "" ){
        $("#icono"+id).remove();
        $("#"+id).parent().addClass("has-error has-feedback");
        $("#"+id).parent().children("span").text("Debe ingresar algun caracter").show();
        $("#"+id).parent().append("<span id='icono"+id+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
        return false;
        
    }
    else if($("#"+id).val().length < 6){
        $("#icono"+id).remove();
        $("#"+id).parent().addClass("has-error has-feedback");
        $("#"+id).parent().children("span").text("Este campo debe contener al menos 6 caracteres").show();
        $("#"+id).parent().append("<span id='icono"+id+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
        return false;
    }
    else{
        $("#icono"+id).remove();
        $("#"+id).parent().removeClass("has-error");
        $("#"+id).parent().addClass("has-success  has-feedback");
        $("#"+id).parent().children("span").text("").hide();
        $("#"+id).parent().append("<span id='icono"+id+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
        return true;
    }
}

function validaNum(id){
    
    if( $("#"+id).val() == null || $("#"+id).val() == "" ){
        $("#icono"+id).remove();
        $("#"+id).parent().addClass("has-error has-feedback");
        $("#"+id).parent().children("span").text("Debe ingresar algun caracter").show();
        $("#"+id).parent().append("<span id='icono"+id+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
        return false;
        
    }
    else if( !(/^\+\d{2,3}\s\d{9}$/.test($("#"+id).val()))){
        $("#icono"+id).remove();
        $("#"+id).parent().addClass("has-error has-feedback");
        $("#"+id).parent().children("span").text("Patron correcto del numero +34 900900900").show();
        $("#"+id).parent().append("<span id='icono"+id+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
        return false;
        
    }
   else{
        $("#icono"+id).remove();
        $("#"+id).parent().removeClass("has-error");
        $("#"+id).parent().addClass("has-success  has-feedback");
        $("#"+id).parent().children("span").text("").hide();
        $("#"+id).parent().append("<span id='icono"+id+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
        return true;
    }
}

function validaMail(id){
    var emailreg = /^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/;
    if( $("#"+id).val() == null || $("#"+id).val() == "" ){
        $("#icono"+id).remove();
        $("#"+id).parent().addClass("has-error has-feedback");
        $("#"+id).parent().children("span").text("Debe ingresar algun caracter").show();
        $("#"+id).parent().append("<span id='icono"+id+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
        return false;
        
    }
    else if( !emailreg.test($("#"+id).val()) ) {
        $("#icono"+id).remove();
        $("#"+id).parent().addClass("has-error has-feedback");
        $("#"+id).parent().children("span").text("ingresa un emai correcto como mail@ejemplo.com").show();
        $("#"+id).parent().append("<span id='icono"+id+"' class='glyphicon glyphicon-remove form-control-feedback'></span>");
        return false;
    }
    else{
        $("#icono"+id).remove();
        $("#"+id).parent().removeClass("has-error");
        $("#"+id).parent().addClass("has-success  has-feedback");
        $("#"+id).parent().children("span").text("").hide();
        $("#"+id).parent().append("<span id='icono"+id+"' class='glyphicon glyphicon-ok form-control-feedback'></span>");
        return true;
    }
}

function Mayusculas(e){
var elemento = event.srcElement ? event.srcElement : event.target;
    var oID= elemento.id;
kc=e.keyCode?e.keyCode:e.which;
sk=e.shiftKey?e.shiftKey:((kc==16)?true:false);
    if(((kc>=65&&kc<=90)&&!sk)||((kc>=97&&kc<=122)&&sk ))
    {
        $("#icono"+oID).remove();
        $("#"+oID).parent().addClass("has-warning  has-feedback");
        $("#"+oID).parent().children("span").text("Las mayusculas estan activadas").show();
        $("#"+oID).parent().append("<span id='icono"+oID+"' class='glyphicon glyphicon-exclamation-sign form-control-feedback'></span>");
    }
    else{
        $("#"+oID).parent().removeClass("has-warning  has-feedback");
        $("#"+oID).parent().children("span").text("").hide();
    }
}