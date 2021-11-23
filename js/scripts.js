$(document).ready(function() {
    //Clic Administrador 
    //$("#Administrador").click(function() {
    //    $(".contenido").hide();
    //    $("#divAdministrador").show();
    //});
    //Clic crear Base de datos
    $("#crearBD").click(function() {
        $(".contenido").hide();
        $("#divCrearBD").show();
    });
    //Clic crear Tabla
    $("#crearTabla").click(function() {
        $(".contenido").hide();
        $("#divCrearTabla").show();
    });
    //Clic Generar PDF
    $("#generarPDF").click(function() {
        $(".contenido").hide();
        $("#divGenerarPDF").show();
    });
    //Clic generarBackup
    $("#generarBackup").click(function() {
        $(".contenido").hide();
        $("#divGenerarBackup").show();
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
    $("#btnCalcularUtilidades").click(function() {
        var valor = parseFloat($("#valor").val() || 0);
        var utilidad = parseFloat($("#utilidad").val() || 0);
        var iva = parseFloat($("#iva").val() || 0);

        var valorIva = valor * (iva / 100);
        var valorUtilidad = valor * (utilidad / 100)
        var valorTotal = valor + valorIva + valorUtilidad

        $("#tablaUtilidad").show();
        $('#tdValor').html('$ ' + valorTotal.toFixed(2));
        $('#tdIVA').html('$ ' + valorIva.toFixed(2));
        $('#tdGanancia').html('$ ' + valorUtilidad.toFixed(2));
    });

    //Clic Calcular Equivalencias
    $("#btnEquivalencia").click(function() {
        var cantidad = parseFloat($("#cantidad").val() || 0);
        var seleccionT = document.formConvertir.inlineRadioOptions.value;
        var tipoT = document.formConversion.inlineRadioOptions.value;
        var valorI = 1;
        switch (tipoT) {
            case "Byte":
                valorI = 1;
                break;
            case "Kilobyte":
                valorI = 1000;
                break;
            case "Megabyte":
                valorI = 1000000;
                break;
            case "Gigabyte":
                valorI = 1000000000;
                break;
            case "Terabyte":
                valorI = 1000000000000;
                break;
        }

        var valorC = 1;
        switch (seleccionT) {
            case "Byte":
                valorC = 1;
                break;
            case "Kilobyte":
                valorC = 1000;
                break;
            case "Megabyte":
                valorC = 1000000;
                break;
            case "Gigabyte":
                valorC = 1000000000;
                break;
            case "Terabyte":
                valorC = 1000000000000;
                break;
        }

        var valor = cantidad * valorI / valorC;

        $("#tablaEquivalencias").show();
        $('#tdTexto').html(seleccionT);
        $('#tdValorE').html(valor.toLocaleString());
    });

    $("#formConsulta").submit(function(event) {
        /* stop form from submitting normally */
        event.preventDefault();

        /* get some values from elements on the page: */
        var $form = $(this),
            $submit = $form.find('button[type="submit"]'),
            codProducto = $form.find('input[name="codProducto"]').val(),
            url = $form.attr('action');

        /* Send the data using post */
        var posting = $.post(url, {
            codProducto: codProducto,
        });

        posting.done(function(data) {
            /* Put the results in a div */
            $("#consultaResult").html(data);

            /* Change the button text. */
            //$submit.text('Sent, Thank you');

            /* Disable the button. */
            //$submit.attr("disabled", true);
        });
    });
});