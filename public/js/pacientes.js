var filas=1;
$(document).ready(function(){
  $("input").on("change",function(){
    var num = $(this).val();
    var celda = $(this).closest("tr").find("td").first().next();
    $.ajax({
        url: "damepaciente",
        type: "post",
        data: { prueba:num },
	dataType: "json",
        success: function(data){
	    celda.text(data[0].nombre_s);
        },
        error:function(){
            alert("failure");
        }
    });
  });
  $("#agregar").on("click",function(){
    $("table tr:last").clone(true).appendTo("table");
    filas=filas+1;
    $("table tr:last").find("input").attr("name","num_paciente"+filas);
    //$("table #eliminar").on("click",eliminarfila());
  });
  $("#eliminar").on("click",eliminarfila);
});
function eliminarfila() {
    $(this).closest('tr').remove();
    filas=filas-1;
  };