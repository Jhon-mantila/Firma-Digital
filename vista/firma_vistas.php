<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        

       
<!-- creamos el form para el envio -->
    <form id='formCanvas' method='post' action='#' ENCTYPE='multipart/form-data'>
        
                    <table border="1">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Firma</th>
                        <th>insertar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><input type='text' name='nom' size='10'></td>
                        <td>
                                    <!-- creamos el camvas -->
                            <canvas id='canvas' width="200" height="200" style='border: 1px solid #CCC;'>
                                <p>Tu navegador no soporta canvas</p>
                            </canvas>
                        </td>
                        <td>        
                            <button type='button' onclick='LimpiarTrazado()'>Borrar</button>
                            <button type='button' onclick='GuardarTrazado()'>Guardar</button>
                            <input type='hidden' name='firma' id='imagen' />
                        </td>
 
                    </tr>
                </tbody>
            </table>
          
    </form>
        
        <table width ="50%" border="0" align="center">
            <tr>
                <td>Id Firma</td>
                <td>Nombre</td>
                <td>Firma</td>
            </tr>
        <?php
           foreach ($mostrarDatos as $datos):
        ?>
            <tr>
                <td><?php echo $datos["id"]?></td>
                <td><?php echo $datos["nombre"]?></td>
                <td><img src="upload/<?php echo $datos["img_firma"]?>" alt="firmas"></td>
            </tr>
     <?php
        endforeach;
     ?>  
    </body>
</html>
