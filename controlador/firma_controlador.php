<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
    <a href=""></a>
        <meta charset="UTF-8">
        <title></title>
        
    </head>

    
    <body>
    
        <?php
        require "modelo/Firma.php";
        
        $firmas = new Firma();
        $mostrarDatos = $firmas->get_firmas();
        
        if (isset($_POST['firma'])) { 
        
            $nombre=$_POST["nom"];
            $firmas_r= 'mi_imagen_'.date('d_m_Y_H_i_s').'.png';
            
            // mostrar la imagen
            //echo '<img src="'.$_POST['firma'].'" border="1">';

            // funcion para gusrfdar la imagen base64 en el servidor
            // el nombre debe tener la extension
            function uploadImgBase64 ($base64, $name){
                // decodificamos el base64
                $datosBase64 = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64));
                // definimos la ruta donde se guardara en el server
                $path= $_SERVER['DOCUMENT_ROOT'].'/firma/upload/'.$name;
                // guardamos la imagen en el server
                if(!file_put_contents($path, $datosBase64)){
                    // retorno si falla
                    return false;
                }
                else{
                    // retorno si todo fue bien
                    return true;
                }
            }

            // llamamos a la funcion uploadImgBase64( img_base64, nombre_fina.png) 
            uploadImgBase64($_POST['firma'],  $firmas_r);
            
            $firmas->insertar_firmas($nombre, $firmas_r);
            header("Location:index.php");
        }

        /*if(isset($_POST["imagen"])){
            
             $nombre=$_POST["nom"];
             $firmas_r=$_POST["firma"];

             $firmas->insertar_firmas($nombre, $firmas_r);
             header("Location:index.php");
             
        }*/

        require "vista/firma_vistas.php";
        
        ?>
        
                
<script type="text/javascript">
    /* Variables de Configuracion */
    var idCanvas='canvas';
    var idForm='formCanvas';
    var inputImagen='imagen';
    var estiloDelCursor='crosshair';
    var colorDelTrazo='#555';
    var colorDeFondo='#fff';
    var grosorDelTrazo=2;

    /* Variables necesarias */
    var contexto=null;
    var valX=0;
    var valY=0;
    var flag=false;
    var imagen=document.getElementById(inputImagen); 
    var anchoCanvas=document.getElementById(idCanvas).offsetWidth;
    var altoCanvas=document.getElementById(idCanvas).offsetHeight;
    var pizarraCanvas=document.getElementById(idCanvas);

    /* Esperamos el evento load */
    window.addEventListener('load',IniciarDibujo,false);

    function IniciarDibujo(){
      /* Creamos la pizarra */
      pizarraCanvas.style.cursor=estiloDelCursor;
      contexto=pizarraCanvas.getContext('2d');
      contexto.fillStyle=colorDeFondo;
      contexto.fillRect(0,0,anchoCanvas,altoCanvas);
      contexto.strokeStyle=colorDelTrazo;
      contexto.lineWidth=grosorDelTrazo;
      contexto.lineJoin='round';
      contexto.lineCap='round';
      /* Capturamos los diferentes eventos */
      pizarraCanvas.addEventListener('mousedown',MouseDown,false);// Click pc
      pizarraCanvas.addEventListener('mouseup',MouseUp,false);// fin click pc
      pizarraCanvas.addEventListener('mousemove',MouseMove,false);// arrastrar pc

      pizarraCanvas.addEventListener('touchstart',TouchStart,false);// tocar pantalla tactil
      pizarraCanvas.addEventListener('touchmove',TouchMove,false);// arrastras pantalla tactil
      pizarraCanvas.addEventListener('touchend',TouchEnd,false);// fin tocar pantalla dentro de la pizarra
      pizarraCanvas.addEventListener('touchleave',TouchEnd,false);// fin tocar pantalla fuera de la pizarra
    }

    function MouseDown(e){
      flag=true;
      contexto.beginPath();
      valX=e.pageX-posicionX(pizarraCanvas); valY=e.pageY-posicionY(pizarraCanvas);
      contexto.moveTo(valX,valY);
    }

    function MouseUp(e){
      contexto.closePath();
      flag=false;
    }

    function MouseMove(e){
      if(flag){
        contexto.beginPath();
        contexto.moveTo(valX,valY);
        valX=e.pageX-posicionX(pizarraCanvas); valY=e.pageY-posicionY(pizarraCanvas);
        contexto.lineTo(valX,valY);
        contexto.closePath();
        contexto.stroke();
      }
    }

    function TouchMove(e){
      e.preventDefault();
      if (e.targetTouches.length == 1) { 
        var touch = e.targetTouches[0]; 
        MouseMove(touch);
      }
    }

    function TouchStart(e){
      if (e.targetTouches.length == 1) { 
        var touch = e.targetTouches[0]; 
        MouseDown(touch);
      }
    }

    function TouchEnd(e){
      if (e.targetTouches.length == 1) { 
        var touch = e.targetTouches[0]; 
        MouseUp(touch);
      }
    }

    function posicionY(obj) {
      var valor = obj.offsetTop;
      if (obj.offsetParent) valor += posicionY(obj.offsetParent);
      return valor;
    }

    function posicionX(obj) {
      var valor = obj.offsetLeft;
      if (obj.offsetParent) valor += posicionX(obj.offsetParent);
      return valor;
    }

    /* Limpiar pizarra */
    function LimpiarTrazado(){
      contexto=document.getElementById(idCanvas).getContext('2d');
      contexto.fillStyle=colorDeFondo;
      contexto.fillRect(0,0,anchoCanvas,altoCanvas);
    }

    /* Enviar el trazado */
    function GuardarTrazado(){
      imagen.value=document.getElementById(idCanvas).toDataURL('image/png');
      document.forms[idForm].submit();
    }
</script>
    </body>
</html>
