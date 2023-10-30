// INICIALIZANDO LA VARIABLE tabla //
var tabla;
// FINALIZANDO LA VARIABLE tabla //

function init(){

}

// INICIO DE LA DECLARACIÓN DEL DATATABLE //
$(document).ready(function(){
    tabla=$('#ticket_data').dataTable({
        "aProcessing": true,
        "aServerSide": true,
        // BOTONES //
        dom: 'Bfrtip',
        // BOTONES //
        // BUSCAR //
        "searching": true,
        // BUSCAR //
        lengthChange: false,
        //ORDEN DE LAS COLUMNAS //
        colReorder: true,
        //ORDEN DE LAS COLUMNAS //
        //BOTONES QUE SE VISUALIZAN EN LA PARTE SUPERIOR DE LA TABLA //
        buttons: [
            'copyHtml5',
            'excelHtml5',
            'csvHtml5',
            'pdfHtml5'
                ],
        //BOTONES QUE SE VISUALIZAN EN LA PARTE SUPERIOR DE LA TABLA //
        // FUNCIÓN DEL AJAX //
        "ajax": {
            url: '../../controller/ticket.php?op=listar_x_usu',
            type: "post",
            dataType: "json",
            // PARAMETROS DEL CONTROLADOR //
            data:{ usu_id : 1},
            // PARAMETROS DEL CONTROLADOR //
            error: function(e){ 
                console.log(e.responseText);
            }
        },
        // FUNCIÓN DEL AJAX //
        "bDestroy": true,
        // RESPONSIVO //
        "responsive": true,
        // RESPONSIVO //
        "bInfo": true,
        // MOSTADO DE FILAS EN EL DATATABLE //
        "iDisplayLenght": 10,
        // MOSTADO DE FILAS EN EL DATATABLE //
        // AUTO AJUSTADO //
        "autowidth": false,
        // AUTO AJUSTADO //
        // TRADUCCIÓN //
        "language": {
            "sProcessing":      "Procesando....",
            "sLengthMenu":      "Mostrar _Menu_ registro",
            "sZeroRecords":     "No se encontraron resultados",
            "sEmptyTable":      "Ningún dato disponible en esta tabla",
            "sInfo":            "Mostrando un total de _TOTAL_ registros",
            "sInfoEmpty":       "Mostrando un total de 0 registros",
            "sInfoFiltered":    "(filtrado de un total de _MAX_ registros)",
            "sInfoPostFix":     "",
            "sSearch":          "Buscar:",
            "sUrl":             "",
            "sInfoThousands":   ",",
            "sLoadingRecords":  "Cargando....",
            "oPaginate": {
                "sFirst":       "Primero",
                "sLast":        "Último",
                "sNext":        "Siguiente",
                "sPrevious":    "Anterior"
            },
            "oAria": {
                "sSortAcending":    ": Activar para ordenar la columna de manera ascendete",
                "sSortDescending":  ": Activar para ordenar la columna de manera descendente"
            }
        }
        // TRADUCCIÓN //
    }).dataTable();
});
// FIN DE LA DECLARACIÓN DEL DATATABLE //

function ver(tick_id){
    console.log(tick_id);
}

init();