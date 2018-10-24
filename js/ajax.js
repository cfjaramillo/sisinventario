// Esta función se ejecuta cada vez que la página se carga
// Y aca se consultan los productos que existen en el inventario
// Invocan la página inventario.php la cual tiene la lógica de consulta
(function consultarProductos(id){

    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
  
  
  
  
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.getElementById("txtRespuesta").innerHTML= this.responseText;
        }
        else {
          //document.getElementById("txtRespuesta").innerHTML = "Error de conexión";
        }
      }
  
      /* Se invoca la página inventario.php */
      xmlhttp.open("GET","inventario.php",true);
      xmlhttp.send();
      Notificar();
      
  
  
  
  })();

  function Notificar(){
    if (window.XMLHttpRequest) {
      // code for IE7+, Firefox, Chrome, Opera, Safari
      xmlhttp=new XMLHttpRequest();
    } else { // code for IE6, IE5
      xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
    xmlhttp.onreadystatechange=function() {
      if (this.readyState==4 && this.status==200) {
        document.getElementById("mdl-js-snackbar").innerHTML=this.responseText;
      }
      else {
        //document.getElementById("mdl-js-snackbar").innerHTML=("Error de conexión");
      }
    }
    
    /* Se invoca la página detalle.php y se le pasa como parámetro el ID del producto */
    xmlhttp.open("GET","agotar.php",true);
    xmlhttp.send();
    
    }

    function esconder(){
        document.getElementById("modal").innerHTML = "";
        }


        function agregarCantidad(){

            /*¨Se obtiene la cantidad del producto original */
            var cant = document.getElementById("cantidad").value;
            
            /* Se obtiene la cantidad a agregar */
            var num = document.getElementById("cantidad_retirar").value;
            
            /* Se obtiene el código del producto */
            var id = document.getElementById("codigo_producto").value;
            
            /* Si el valor es mayor a 0 */
            if (num>0){
            if (window.XMLHttpRequest) {
                // code for IE7+, Firefox, Chrome, Opera, Safari
                xmlhttp=new XMLHttpRequest();
              } else { // code for IE6, IE5
                xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
              }
            
            
              xmlhttp.onreadystatechange=function() {
                if (this.readyState==4 && this.status==200) {
                  document.getElementById("txtRespuesta3").innerHTML=this.responseText;
                }
                else {
                  document.getElementById("txtRespuesta3").innerHTML="Error de conexión";
                }
              }
              /* Se invoca la página editar.php y se envía como parámetro la cantidad a agregar */
              xmlhttp.open("GET","editar.php?cant="+(parseInt(cant)+parseInt(num))+"&id="+id,true);
              xmlhttp.send();
              /* Se muestra un mensaje indicando que se realizaron los cambios exitosamente */
              alert("Se han realizado los cambios exitosamente");
              /* Se refresca la página */
              window.location.reload(true);
            }
            }


            /* Función que consulta el detalle de un producto a partir de su ID */
function consultarDetalle(){

    /* Se obtiene el valor que tiene la caja de texto con ID codigo_producto */
    
    var num = document.getElementById("codigo_producto").value;
    
    
    /* Si el valor que se obtiene es mayor a 0 */
    if (num>0){
    
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.getElementById("txtRespuesta2").innerHTML=this.responseText;
        }
        else {
          document.getElementById("txtRespuesta2").innerHTML="Error de conexión";
        }
      }
    
      /* Se invoca la página detalle.php y se le pasa como parámetro el ID del producto */
      xmlhttp.open("GET","detalle.php?id="+num,true);
      xmlhttp.send();
    }
    }
    
    /* Función que agrega o eliminar productos del inventario */
    function retirarCantidad(){
    
    /* Se obtiene la cantidad inicial del producto */
    var cant = document.getElementById("cantidad").value;
    
    /* Se obtiene la cantidad a agregar o retirar ingresada por el usuario */
    var num = document.getElementById("cantidad_retirar").value;
    
    /* Se obtiene el código del producto */
    var id = document.getElementById("codigo_producto").value;
    
    /* Si el monto a retirar o agregar es mayor a lo que tiene en inventario */
    /* Se va por ELSE y muestra un mensaje indicando que no tiene esa cantidad de productos */
    if (Number(num) < Number(cant)){
        
    
    /* Si el valor que ingresa es mayor a 0 */
    if (num>0){
    if (window.XMLHttpRequest) {
        // code for IE7+, Firefox, Chrome, Opera, Safari
        xmlhttp=new XMLHttpRequest();
      } else { // code for IE6, IE5
        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
      }
    
    
      xmlhttp.onreadystatechange=function() {
        if (this.readyState==4 && this.status==200) {
          document.getElementById("txtRespuesta3").innerHTML=this.responseText;
        }
        else {
            document.getElementById("txtRespuesta3").innerHTML="Error de conexión";
        }
      }
      /* Se invoca la página editar.php y se pasa como parámetros la cantidad a retirar */
      xmlhttp.open("GET","editar.php?cant="+(cant-num)+"&id="+id,true);
      xmlhttp.send();
    
      /* Se muestra un mensaje indicando que retiro los productos exitosamente */
      alert("Ha retirado productos del inventario");
    
      /* Se refresca la página */
      window.location.reload(true);
    }
    }
    /* Se muestra un mensaje indicando que la cantidad no esta dispomible */
    else {
      alert("La cantidad a retirar supera la cantidad disponible en el inventario");
        alert(num);
        alert(cant);
    }
    }