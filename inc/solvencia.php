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
      <td width="15%" valign="top"><img  style="width: 80px;height: 80px; margin-left: 0px" class="img-responsive file-path-wrapper-pre-view" src="../images/logo_ipsfa.png" id="_imgescudo"/>
      </td>
      <td width="70%" class="membrete" valign="top">
            <left><br>
                    REPÚBLICA BOLIVARIANA DE VENEZUELA <BR>
                    MINISTERIO DEL PODER POPULAR PARA LA DEFENSA<BR>
                    VICEMINISTERIO DE SERVICIOS, PERSONAL Y LOGÍSTICA<BR>
                    DIRECCIÓN GENERAL DE EMPRESAS Y SERVICIOS<BR>
                    INSTITUTO DE PREVISIÓN SOCIAL DE LA FUERZA ARMADA<BR>
                    RIF: G20003692-3
            </left></td>
    </tr>
  </table>
  <center><h4><B>HOJA DE SOLVENCIA</B></h4></center>
  <div class="subtitulos_sol">Solvencia para la Tramitación de la carta de finiquito del capital colocado en la entidad fiduciaria respectiva (FIDECOMISO).</div>
  <table border="0" width="100%" style="margin: 0 auto;">
  <tr>
    <tr>
      <td>APELLIDOS Y NOMBRES:</td>
      <td colspan="3"><label id="_lblnombreMil"></label></td>
    </tr>   
    <tr>
      <td>CÉDULA:</td>
      <td><label id="_lblcedulaMil"></label></td>
      <td>GRADO:</td>
      <td><label id="_lblGrado"></label></td>
    </tr>
    <tr>
      <td width="19%">COMPONENTE:</td>
      <td width="31%"><label id="_lblcomponente"></label></td>
      <td width="10%">TIEMPO DE SERVICIO:</td>
      <td width="40%"><label id="_lblaServicio"></label></td>
    </tr>
    <tr>
      <td>CORREO ELECTRÓNICO:</td>
      <td><label id="_correoE"></label></td>
      <td>TELEFONO:</td>
      <td><label id="_lbltelefono"></label></td>
    </tr>
  </table>
  <br>
   <table border="0" width="100%" style="margin: 0 auto;">
  <div class="subtitulos_sol">1. GERENCIA DE AFILIACIÓN: El personal Militar que tenga menos de 15 años de servicio deberá los carnets de todos los familiares afiliados.</div>
    <tr>
      <td rowspan="4" width="20%"><h2>PB</h2></td>
      <td rowspan="4" width="35%">
        <div style="width: 60px; float: left;">SI &nbsp;&nbsp; <input type="checkbox"> </div>
        <div style="width: 60px; float: left;">NO &nbsp;&nbsp; <input type="checkbox"></div>
      </td>
      <td rowspan="4" width="20%"><h4>SELLO</h4></td>
      <td width="25%"><div class="borde_firma"></div></td>
    </tr>
    <tr>
      <td><div class="borde_firma"><CENTER>FIRMA AUTORIZADA</CENTER></div></td>
    </tr>
    <tr>
      <td><div class="borde_firma"><CENTER>CARGO</CENTER></div></td>
    </tr>
    <tr>
     <td><CENTER>FECHA</CENTER></td>
    </tr>
  </table>

  <table border="0" width="100%" style="margin: 0 auto;">
  <div class="subtitulos_sol">2. GERENCIA DE BIENESTAR SOCIAL: Indicar si posee medida de embargo sobre la asignacion de antigüedad (Aplica a todo el personal militar).</div>
    <tr>
      <td rowspan="4" width="20%"><h2>PB</h2></td>
      <td rowspan="4" width="35%">
        <div style="width: 60px; float: left;">SI &nbsp;&nbsp; <input type="checkbox"> </div>
        <div style="width: 60px; float: left;">NO &nbsp;&nbsp; <input type="checkbox"></div>
      </td>
      <td rowspan="4" width="20%"><h4>SELLO</h4></td>
      <td width="25%"><div class="borde_firma"></div></td>
    </tr>
    <tr>
      <td><div class="borde_firma"><CENTER>FIRMA AUTORIZADA</CENTER></div></td>
    </tr>
    <tr>
      <td><div class="borde_firma"><CENTER>CARGO</CENTER></div></td>
    </tr>
    <tr>
     <td><CENTER>FECHA</CENTER></td>
    </tr>
  </table>

  <table border="0" width="100%" style="margin: 0 auto;">
  <div class="subtitulos_sol">3. GERENCIA DEL SISA: Indicar si posee deudas donde compromete la asignacion de antigüedad (Aplica a todo el personal militar).</div>
    <tr>
      <td rowspan="4" width="20%"><h2>PB</h2></td>
      <td rowspan="4" width="35%">
        <div style="width: 60px; float: left;">SI &nbsp;&nbsp; <input type="checkbox"> </div>
        <div style="width: 60px; float: left;">NO &nbsp;&nbsp; <input type="checkbox"></div>
      </td>
      <td rowspan="4" width="20%"><h4>SELLO</h4></td>
      <td width="25%"><div class="borde_firma"></div></td>
    </tr>
    <tr>
      <td><div class="borde_firma"><CENTER>FIRMA AUTORIZADA</CENTER></div></td>
    </tr>
    <tr>
      <td><div class="borde_firma"><CENTER>CARGO</CENTER></div></td>
    </tr>
    <tr>
     <td><CENTER>FECHA</CENTER></td>
    </tr>
  </table>

  <table border="0" width="100%" style="margin: 0 auto;">
  <div class="subtitulos_sol">4. GERENCIA DE VIVIENDA: Indicar si posee Vivienda en Guarnición (Aplica a todo el personal militar).</div>
    <tr>
      <td rowspan="4" width="20%"><h2>P2</h2></td>
      <td rowspan="4" width="35%">
        <div style="width: 60px; float: left;">SI &nbsp;&nbsp; <input type="checkbox"> </div>
        <div style="width: 60px; float: left;">NO &nbsp;&nbsp; <input type="checkbox"></div>
      </td>
      <td rowspan="4" width="20%"><h4>SELLO</h4></td>
      <td width="25%"><div class="borde_firma"></div></td>
    </tr>
    <tr>
      <td><div class="borde_firma"><CENTER>FIRMA AUTORIZADA</CENTER></div></td>
    </tr>
    <tr>
      <td><div class="borde_firma"><CENTER>CARGO</CENTER></div></td>
    </tr>
    <tr>
     <td><CENTER>FECHA</CENTER></td>
    </tr>
  </table>

  <table border="0" width="100%" style="margin: 0 auto;">
  <div class="subtitulos_sol">5. GERENCIA DE FINANZAS: Indicar si posee deudas donde compromete la asignacion de antigüedad (Aplica a todo el personal militar).</div>
    <tr>
      <td rowspan="4" width="20%"><h2>PB</h2></td>
      <td rowspan="4" width="35%">
        <div style="width: 60px; float: left;">SI &nbsp;&nbsp; <input type="checkbox"> </div>
        <div style="width: 60px; float: left;">NO &nbsp;&nbsp; <input type="checkbox"></div>
      </td>
      <td rowspan="4" width="20%"><h4>SELLO</h4></td>
      <td width="25%"><div class="borde_firma"></div></td>
    </tr>
    <tr>
      <td><div class="borde_firma"><CENTER>FIRMA AUTORIZADA</CENTER></div></td>
    </tr>
    <tr>
      <td><div class="borde_firma"><CENTER>CARGO</CENTER></div></td>
    </tr>
    <tr>
      <td><CENTER>FECHA</CENTER></td>
    </tr>
  </table>

  <table border="0" width="100%" style="margin: 0 auto;">
  <div class="subtitulos_sol">6. INVERSORA HORIZONTE Y SEGUROS HORIZONTE: Indicar si posee deudas donde compromete la asignacion de antigüedad (Aplica a todo el personal militar).</div>
    <tr>
      <td rowspan="4" width="20%"><h2>PB</h2></td>
      <td rowspan="4" width="35%">
        <div style="width: 60px; float: left;">SI &nbsp;&nbsp; <input type="checkbox"> </div>
        <div style="width: 60px; float: left;">NO &nbsp;&nbsp; <input type="checkbox"></div>
      </td>
      <td rowspan="4" width="20%"><h4>SELLO</h4></td>
      <td width="25%"><div class="borde_firma"></div></td>
    </tr>
    <tr>
      <td><div class="borde_firma"><CENTER>FIRMA AUTORIZADA</CENTER></div></td>
    </tr>
    <tr>
      <td><div class="borde_firma"><CENTER>CARGO</CENTER></div></td>
    </tr>
    <tr>
      <td><CENTER>FECHA</CENTER></td>
    </tr>
  </table>
  <br>
  <div style="font-size: 10px; text-align: justify;"><b>NOTA: DEBE INCLUIR LA COPIA DEL COMPROBANTE DE PRESENTACIÓN DE LA DECLARACIÓN JURADA DE PATRIMONIO POR "CESE DE FUNCIONES". CORREO ELECTRÓNICO: fideicomiso_byss@hotmail.com</b></div>
</body>
</html>
