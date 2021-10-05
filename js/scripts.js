$(document).ready(function() {
    //Clic Administrador 
    $("#Administrador").click(function() {
        $(".contenido").hide();
        $("#divAdministrador").show();
    });



    //Clic Invenario
    //$("#invenario").click(function() {
    //    $(".contenido").hide();
    //    $("#divInventario").show();
    //});
    //Clic ingresarProducto
    $("#ingresarProducto").click(function() {
        $(".contenido").hide();
        $("#divIngresarProducto").show();
    });
    //Clic actualizarProducto
    $("#actualizarProducto").click(function() {
        $(".contenido").hide();
        $("#divActualizarProducto").show();
    });
    //Clic eliminarProducto
    $("#eliminarProducto").click(function() {
        $(".contenido").hide();
        $("#divEliminarProducto").show();
    });
    //Clic consultarProducto
    $("#consultarProducto").click(function() {
        $(".contenido").hide();
        $("#divConsultarProducto").show();
    });



    //Clic utilidades
    //$("#utilidades").click(function() {
    //    $(".contenido").hide();
    //    $("#divUtilidades").show();
    //});
    //Clic consultarUtilidad
    $("#consultarUtilidad").click(function() {
        $(".contenido").hide();
        $("#divConsultarUtilidad").show();
    });
    //Clic consultarConversión
    $("#consultarConversion").click(function() {
        $(".contenido").hide();
        $("#divConsultarConversion").show();
    });


    //Clic Calcular utilidades
    $("#consultarConversion").click(function() {
        $("#tablaUtilidad").show();
        $('#tdValor').html('changed value');
        $('#tdIVA').html('changed value');
        $('#tdGanancia').html('changed value');
    });

});