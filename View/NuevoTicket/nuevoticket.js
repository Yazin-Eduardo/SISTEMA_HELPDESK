// propiedades del summernote para quitar la configuración flotante//
$(document).ready(function() {
    $('#tick_descrip').summernote({
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