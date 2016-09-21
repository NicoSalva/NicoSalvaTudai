$(document).ready(function(){
 getInfo("home.html");

  $(document).on("click", '#home' , getLinkHome);

  function getLinkHome(event) {
    event.preventDefault();
    var link = "home.html";
    getInfo(link);
  }

  $(document).on("click",'#servicios', getLinkPaquetesServicio);

  function getLinkPaquetesServicio(event){
    event.preventDefault();
    var link = "index.php?action=mostrar_paquetes";
    getInfo(link);

    getInfoPresupuesto();
  }

  $(document).on("click", '#presupuesto' , getLinkPresupuesto);

  function getLinkPresupuesto(event) {
    event.preventDefault();
    var link = "index.php?action=mostrar_presupuesto";

    getInfo(link);
  }

  $(document).on("click", '#somos' , getLinkSomos);

  function getLinkSomos(event) {
    event.preventDefault();
    var link = "quienessomos.html";

    getInfo(link);
  }

  $(document).on("click", '#contacto' , getLinkContacto);

  function getLinkContacto(event) {
    event.preventDefault();
    var link = "index.php?action=mostrar_contacto";

    getInfo(link);
  }


  function getInfo(link) {
    $.ajax({
      url: link,
      method:"GET",
      dataType: "html",
      success: function(resultData){
        if (link=== "quienessomos.html") {
          $("#cargadorAjax").removeClass("fondo");
        }
        else {
          $("#cargadorAjax").addClass("fondo");
        }

        $("#cargadorAjax").html(resultData);
        return;
      },
      error:function(jqxml, status, errorThrown){
        alert('Error');
      }
    });
    $("#cargadorAjax").html("<h3>Cargando...</h3>");
    event.preventDefault();
  }

});
