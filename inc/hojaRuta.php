<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hoja de Solvencia</title>

 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../css/skins.ipsfa/_all-skins_1.css">
  <script src="../bower_components/jquery/dist/jquery.min.js"></script>

<script src="../js/config.js"></script>
  <script src="../js/utilidad.js"></script>
  <script src="../js/militar.js"></script>

  <script src="../js/consultar.js"></script>

  <script type="text/javascript">
  function fecha(){
    var f = new Date();
        f = f.getDate() + "/" + (f.getMonth() +1) + "/" + f.getFullYear();
      $("#_fecha").html(f);
    }
  </script>
</head>
<body onload="Consultar()">
<input type="hidden" value="<?php echo '10107698';?>" id="_cedula"> 
  <table border="0" width="100%" style="margin: 0 auto;">
    <tr>
      <td width="15%" valign="top" rowspan="2"><img  style="width: 100px;height: 100px; margin-left: 0px" class="img-responsive file-path-wrapper-pre-view" src="../images/logo_ipsfa.png" id="_imgescudo"/>

      </td>
      <td width="70%" class="membrete" valign="top">
            <left><br>
                    REPÚBLICA BOLIVARIANA DE VENEZUELA <BR>
                    MINISTERIO DEL PODER POPULAR PARA LA DEFENSA<BR>
                    VICEMINISTERIO DE SERVICIOS, PERSONAL Y LOGÍSTICA<BR>
                    DIRECCIÓN GENERAL DE EMPRESAS Y SERVICIOS<BR>
                    INSTITUTO DE PREVISIÓN SOCIAL DE LA FUERZA ARMADA<BR>
                    RIF: G20003692-3<BR>
            </left></td>
      <td width="15%" valing="bottom" rowspan="2">
      <div style="border: 1px solid black;">
          <p>1. FECHA: <br>
            <div style="margin-left: 30px;"><label id="_fecha"></label></div>
      </div>

      </td>
    </tr>
    <tr>
    	<td><center><h4><B>HOJA DE SOLVENCIA DE  <br>TRAMITES DE PASE A RETIRO  <br>AVALADAS POR EL IPSFA</B></h4></center>
</td>
    </tr>
  </table>
   

<table  border="1" width="100%" style="margin: 0 auto;">
  <caption><div class="titulo_ruta">DATOS DEL AFILIADO</div></caption>
  <tr>
    <td width="30%"><div class="subtitulos"> 2. GRADO / JERARQUIA:</div><br>
    &nbsp;&nbsp;<label id="_lblGrado"></label></td>
    <td width="50%" colspan="2"><div class="subtitulos"> 3. APELLIDOS Y NOMBRES:</div><br>
    &nbsp;&nbsp;<label id="_lblnombreMil"></label></td>
    <td width="20%"><div class="subtitulos"> 4.CÉDULA DE IDENTIDAD:</div><br>
    &nbsp;&nbsp;<label id="_lblcedulaMil"> </label></td>
  </tr>
  <tr>
    <td width="30%" ><div class="subtitulos"> 5. COMPONENTE: </div><br>
    &nbsp;&nbsp;<label id="_lblcomponente"></label></td>
    <td width="30%"><div class="subtitulos">6. TELÉFONO: </div><br>
    &nbsp;&nbsp;<label id="_telefono"></label></td>
    <td width="40%" colspan="2"><div class="subtitulos">7. FIRMA DEL AFILIADO: </div><br>&nbsp;</td>
  </tr>
</table>

<table  border="1" width="100%" style="margin: 0 auto;">
  <caption><div class="titulo_ruta">1.- GERENCIA DE AFILIACIÓN (APLICA A TODO EL PERSONAL MILITAR)</div></caption>
  <tr>
    <td width="40%" rowspan="2"><div class="subtitulos" style="width: 180px;">8. VERIFICADO EN EL SISTEMA:</div>
    		<div style="width: 50px; float: left;"><input type="checkbox">&nbsp;&nbsp;SI </div>
        <div style="width: 50px; float: left;"><input type="checkbox">&nbsp;&nbsp;NO</div>
    </td>
    <td width="60%" colspan="3"><div class="subtitulos">9. TIEMPO DE SERVICIO</div>
  </tr>
  <tr>
    <td width="20%"><div class="subtitulos" style="width: 30px;">10.</div><br>
    				<div class="saltos">AÑOS: &nbsp;&nbsp;<label id="_anniosserv"></label></div></td>
    <td width="20%"><div class="subtitulos" style="width: 30px;">11.</div><br>
    				<div class="saltos">MESES: &nbsp;&nbsp;<label id="_messerv"></label></div></td>
    <td width="30%"><div class="subtitulos" style="width: 30px;">12.</div><br>
    				<div class="saltos">DÍAS: &nbsp;&nbsp;<label id="_diasserv"></label></div></td>
  </tr>
  <tr>
    <td><div class="subtitulos">13. APELLIDOS Y NOMBRES DEL JEFE DE ÁREA:</div><br>&nbsp;</td>
    <td><div class="subtitulos">14. FIRMA:</div><br> &nbsp;</td>
    <td><div class="subtitulos">15. SELLO:</div><br> &nbsp;</td>
    <td><div class="subtitulos">16. FECHA:</div><br> &nbsp;</td>
  </tr>
</table>

<table  border="1" width="100%" style="margin: 0 auto;">
  <caption><div class="titulo_ruta">2.- GERENCIA DE BIENESTAR Y SEGURIDAD SOCIAL (APLICA A TODO EL PERSONAL MILITAR)</div></caption>
  <tr>
    <td width="60%" colspan="3"><div class="subtitulos" style="width: 200px;">17. MEDIDAD DE EMBARGO:</div>
        <div style="width: 50px; float: left;"><input type="checkbox">&nbsp;&nbsp;SI </div>
        <div style="width: 50px; float: left;"><input type="checkbox">&nbsp;&nbsp;NO</div>
    </td>
    <td width="40%" rowspan="2"><div class="subtitulos">18.</div><br><div class="saltos">
      <center>MONTOS Bs.</center></div>
  </tr>
  <tr>
    <td colspan="3"><div class="subtitulos" style="width: 20px;">19.</div><br>
    				<div class="saltos">DESCRIPCIÓN DE LOS MONTOS</div></td>
  </tr>
  <tr>
    <td colspan="3"><br><div class="saltos">MONTO 5% PENSIONES</div></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="3"><br><div class="saltos">MONTO FIDEICOMISO</div></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="3"><div class="subtitulos" style="width: 20px;">20.</div><br>
    				<div class="saltos"><b>TOTAL</b></div></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="4"><div class="subtitulos">21.OBSERVACIONES:</div><br>&nbsp;</td>
  </tr>
  <tr>
    <td width="35%"><div class="subtitulos">22. APELLIDOS Y NOMBRES DEL JEFE DE ÁREA:</div><br>&nbsp;</td>
    <td width="20%"><div class="subtitulos">23. FIRMA:</div><br> &nbsp;</td>
    <td width="20%"><div class="subtitulos">24. SELLO:</div><br> &nbsp;</td>
    <td width="25%"><div class="subtitulos">25. FECHA:</div><br> &nbsp;</td>
  </tr>
</table>

<table  border="1" width="100%" style="margin: 0 auto;">
  <caption><div class="titulo_ruta">3.- GERENCIA DEL SISA (APLICA A TODO EL PERSONAL MILITAR)</div></caption>
  <tr>
    <td width="60%" colspan="3"><div class="subtitulos">26.</div> <br>
    				<div class="saltos">DESCRIPCIÓN:  </div> </td>
    <td width="40%"><div class="subtitulos">27.</div><br><div class="saltos"><center>MONTOS Bs.</center></div>
  </tr>
  <tr>
    <td colspan="3"><br><div class="saltos">PRESTAMO ESPECIAL:</div></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="3"><br><div class="saltos">PRESTAMO EFECTIVO:</div></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="3"><br><div class="saltos">CREDITO COMERCIAL:</div></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="3"><div class="subtitulos" style="width: 20px;">28.</div><br><div class="saltos"><b>TOTAL</b></div></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="4"><div class="subtitulos">29.OBSERVACIONES:</div><br>&nbsp;</td>
  </tr>
  <tr>
    <td width="35%"><div class="subtitulos">30. APELLIDOS Y NOMBRES DEL JEFE DE ÁREA:</div><br>&nbsp;</td>
    <td width="20%"><div class="subtitulos">31. FIRMA:</div><br> &nbsp;</td>
    <td width="20%"><div class="subtitulos">32. SELLO:</div><br> &nbsp;</td>
    <td width="25%"><div class="subtitulos">33. FECHA:</div><br> &nbsp;</td>
  </tr>
</table>

<section>
<table  border="1" width="100%" style="margin: 0 auto;">
  <caption><div class="titulo_ruta">4.- GERENCIA DE VIVIENDA</div></caption>
  <tr>
    <td width="50%" colspan="2"><div class="subtitulos">34.</div><br>
    	<div class="saltos" style="width: 200px; float: left;" > USUARIO DE VIVIENDA:</div>
        <div style="width: 50px; float: left;"><input type="checkbox">&nbsp;&nbsp;SI </div>
        <div style="width: 50px; float: left;"><input type="checkbox">&nbsp;&nbsp;NO</div>
    </td>
    <td width="50%" colspan="2"><div class="subtitulos">35.</div> <br>
    	<div class="saltos" style="width: 200px; float: left;" > PRESENTO SOLVENCIA:</div>
        <div style="width: 50px; float: left;"><input type="checkbox">&nbsp;&nbsp;SI </div>
        <div style="width: 50px; float: left;"><input type="checkbox">&nbsp;&nbsp;NO</div>
    </td>
  </tr>
  <tr>
    <td colspan="4"><div class="subtitulos">36.CONVENIO DE ENTREGA:</div><br>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"><div class="subtitulos">37.OBSERVACIONES:</div><br>&nbsp;</td>
  </tr>
  <tr>
    <td width="35%"><div class="subtitulos">38. APELLIDOS Y NOMBRES DEL JEFE DE ÁREA:</div><br>&nbsp;</td>
    <td width="20%"><div class="subtitulos">39. FIRMA:</div><br> &nbsp;</td>
    <td width="20%"><div class="subtitulos">40. SELLO:</div><br> &nbsp;</td>
    <td width="25%"><div class="subtitulos">41. FECHA:</div><br> &nbsp;</td>
  </tr>
</table>

<table  border="1" width="100%" style="margin: 0 auto;">
  <caption><div class="titulo_ruta">5.- GERENCIA DE FINANZAS (NO APLICA AL PERSONAL MILITAR CON MAS DE 15 AÑOS DE SERVICIO)</div></caption>
  <tr>
    <td width="60%" colspan="3"><div class="subtitulos">42.</div> <br>
    	<div class="saltos">DESCRIPCIÓN, VERIFICACIÓN Y CONFORMACIÓN CON EL ESTADO DE CUENTA DE COBRANZA:</div></td>
    <td width="40%"><div class="subtitulos">43.</div><center>MONTOS Bs.</center>
  </tr>
  <tr>
    <td colspan="3"><br><div class="saltos">PRESTAMO PERSONAL:</div></td>
        <td></td>
  </tr>
  <tr>
    <td colspan="3"><br><div class="saltos">OTROS CREDITOS:</div></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="3"><br>&nbsp;</td>
    <td></td>
  </tr>  
   <tr>
    <td colspan="3"><br>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td colspan="3"><br>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td colspan="3"><br>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td colspan="3"><br>&nbsp;</td>
    <td></td>
  </tr>
  <tr>
    <td colspan="3"><div class="subtitulos" style="width: 20px;">44.</div><br><div class="saltos"><b>TOTAL</b></div></td>
    <td></td>
  </tr>
  <tr>
    <td colspan="4"><div class="subtitulos">45.OBSERVACIONES:</div><br>&nbsp;</td>
  </tr>
  <tr>
    <td width="35%"><div class="subtitulos">46. APELLIDOS Y NOMBRES DEL JEFE DE ÁREA:</div><br>&nbsp;</td>
    <td width="20%"><div class="subtitulos">47. FIRMA:</div><br> &nbsp;</td>
    <td width="20%"><div class="subtitulos">48. SELLO:</div><br> &nbsp;</td>
    <td width="25%"><div class="subtitulos">49. FECHA:</div><br> &nbsp;</td>
  </tr>
</table>
<br>

<table  border="1" width="100%" style="margin: 0 auto;">
  <caption> <div class="titulo_ruta">6.- OPINIÓN DEL PRESIDENTE DEL INSTITUTO DE PREVISIÓN SOCIAL DE LAS FUERZAS ARMADAS NACIONALES</div> </caption>
  <tr>
    <td colspan="4"><br>&nbsp;<br>&nbsp;<br>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4"><br>&nbsp;<br>&nbsp;<br>&nbsp;</td>
  </tr>  
  <tr>
    <td colspan="4"><br>&nbsp;<br>&nbsp;<br>&nbsp;</td>
  </tr>
  <tr>
    <td width="35%"><div class="subtitulos">50. APELLIDOS Y NOMBRES DEL JEFE DE ÁREA:</div><br>&nbsp;</td>
    <td width="20%"><div class="subtitulos">51. FIRMA:</div><br> &nbsp;</td>
    <td width="20%"><div class="subtitulos">52. SELLO:</div><br> &nbsp;</td>
    <td width="25%"><div class="subtitulos">53. FECHA:</div><br> &nbsp;</td>
  </tr>
</table>
</section>
</body>
</html>
