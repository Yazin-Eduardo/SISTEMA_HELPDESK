function init(){
    $("#ticket_form").on("submit", function(e){
        guardaryeditar(e);
    });
}

// propiedades del summernote para quitar la configuración flotante//
$(document).ready(function() {
    $('#tick_descripcion').summernote({
        height: 150,
        lang: "es_ES",
        popover: {
            image: [],
            link: [],
            air: [],
        },
        callbacks:{
            onImageUpload: function(image){
                console.log("Image detect...");
                myimagetreat(image[0]);
            },
            onpaste: function(e){
                console.log("Text detect...");
            }
        }
    });
    $.post("../../controller/categoria.php?op=combo",function(data, status){
        $('#cat_id').html(data);
    });

});

function guardaryeditar(e){
    e.preventDefault();
    var formData = new FormData($("#ticket_form")[0]);
    $.ajax({
        url: "../../controller/ticket.php?op=insert",
        type: "POST",
        data: formData,
        contentType: false,
        processData: false,
        success: function(datos){
            console.log(datos);
        }
    });
}

init();