$(document).ready(function() {
    //Clic Administrador 
    $("#Administrador").click(function() {
        $(".contenido").hide();
        $("#divAdministrador").show();
    });



    //Clic Invenario
    $("#invenario").click(function() {
        $(".contenido").hide();
        $("#divInventario").show();
    });
    //Clic multimediaIngresar
    $("#multimediaIngresar").click(function() {
        $(".contenido").hide();
        $("#divMultimediaIngresar").show();
    });
    //Clic multimediaActualizar
    $("#multimediaActualizar").click(function() {
        $(".contenido").hide();
        $("#divMultimediaActualizar").show();
    });
    //Clic multimediaEliminar
    $("#multimediaEliminar").click(function() {
        $(".contenido").hide();
        $("#divMultimediaEliminar").show();
    });
    //Clic multimediaConsultar
    $("#multimediaConsultar").click(function() {
        $(".contenido").hide();
        $("#divMultimediaConsultar").show();
    });



    //Clic actividades
    $("#utilidades").click(function() {
        $(".contenido").hide();
        $("#divUtilidades").show();
    });
    //Clic multimediaUtilidad
    $("#multimediaUtilidad").click(function() {
        $(".contenido").hide();
        $("#divmultimediaUtilidad").show();
    });
    //Clic multimediaConversión
    $("#multimediaConversión").click(function() {
        $(".contenido").hide();
        $("#divmultimediaConversión").show();
    });

});