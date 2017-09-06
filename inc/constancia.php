<?php 
  session_start();
  
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Constancia de Afiliación</title>

 <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../css/skins.ipsfa/_all-skins_1.css">
  <script src="../bower_components/jquery/dist/jquery.min.js"></script>
    <script src="../bower_components/barcode/dist/JsBarcode.all.js"></script>

  <script src="../js/config.js"></script>
  <script src="../js/utilidad.js"></script>
  <script src="../js/militar.js"></script>

  <script src="../js/consultar.js"></script>
  


</head>
<body class="hold-transition skin-yellow" id="_body" onload="Consultar()">

<input type="hidden" value="<?php echo '10107698';?>" id="_cedula"> 
<section class="content" id="_Constancia">
<div class="marca-de-agua">
<table border="0" width="100%">
  <tr>
    <td width="15%" valign="top"><img  style="width: 90px;height: 90px; margin-left: 0px" class="img-responsive file-path-wrapper-pre-view" src="../images/logo_ipsfa.png" id="_imgescudo"/><BR>
    <img  style="width: 90px;height: 35px; margin-left: 0px" class="img-responsive file-path-wrapper-pre-view" src="../images/fondo_ipsfa.png" id="_imgescudo"/>

    </td>
    <td width="70%" class="membrete">
          <left>
                  REPÚBLICA BOLIVARIANA DE VENEZUELA <BR>
                  MINISTERIO DEL PODER POPULAR PARA LA DEFENSA<BR>
                  VICEMINISTERIO DE SERVICIOS, PERSONAL Y LOGÍSTICA<BR>
                  DIRECCIÓN GENERAL DE EMPRESAS Y SERVICIOS<BR>
                  INSTITUTO DE PREVISIÓN SOCIAL DE LA FUERZA ARMADA<BR>
                  RIF: G20003692-3<BR>
          </left></td>
    <td width="15%"  valign="top"><center>
        <img style="width: 90px;height: 90px; margin-left: 0px" class="img-responsive file-path-wrapper-pre-view" src='../images/ndisponible.jpg' onerror="this.src='../images/ndisponible.jpg'" id="_img"/>

          <img width="35%" src=" " alt="Grado Militar" id="_Constgrado"><br>
          <label id='_lblGrado'></label>
      </center></td>
  </tr>
</table>
 <center><h3>CONSTANCIA DE AFILIACIÓN</h3></center>
<div class="row">
  <div  class="col-sm-12 col-md-12 cuerpo_constancia" align="justify">
  El suscrito <b><label id='_lblgradoPI'>General de División</label></b> Presidente de la Junta Administradora del 
  Instituto de Previsión Social de las Fuerzas Armadas, hace constar por medio de la presente que el (la) 
  ciudadano(a) <b><label id='_lblGrado'></label> <label id='_lblnombreMil'></label></b>, Titular de la Cédula de 
  Identidad Número V.- <b><label id='_lblcedulaMil'></label></b>, se encuentra Afiliado(a) a este Instituto.
  </div>
</div>
<br>
<div class="row">
<div class="col-sm-12 col-md-12">
  <table class="table table-bordered" cellspacing="0" width="100%"  id="tblDatosMil">
  <table class="table-borderedtd" cellspacing="0" width="100%" style="border-bottom-width: 0px;">
          <tr role="row" class="odd">
                <td colspan="4" class="titulo_fondo table-borderedtd" style="border-top-width: 0px;"><b>Datos Personales</b></td>
          </tr>
          <tr role="row" class="odd">
                <td width="20%" class="titulo" ><b>Estado Civil:</b></td>
                <td width="18%"><label id='_lbledoCivilM'></label></td>
                <td width="25%" class="titulo"><b>Fecha de Nacimiento:</b></td>
                <td width="37%"><label id='_lblfchNacMil'></label></td>
          </tr>
          <tr role="row" class="odd">
                <td width="20%" class="titulo"><b>Dirección:</b></td>
                <td width="80%" colspan="3"><label id='_lbldireccionMil'></label> </td>
          </tr>

   </table>

   <table class="table-borderedtd" cellspacing="0" width="100%">
          <tr role="row" class="odd">
                <td colspan="4" class="titulo_fondo table-borderedtd" style="border-top-width: 0px;"><b>Datos Militares</b></td>
          </tr>
          <tr role="row" class="odd">
                <td width="20%" class="titulo"><b>Ingreso a la FANB:</b></td>
                <td width="18%"><label id='_lblfchIngresoFANB'></label> </td>
                <td width="25%" class="titulo"><b>Componente:</b></td>
                <td width="37%"><label id='_lblcomponente'></label></td>
          </tr>
          <tr role="row" class="odd">
              <td width="20%" class="titulo"><b>Situación:</b></td>
              <td width="18%"><label id='_lblsituacionMil'></label> </td>
              <td width="25%" class="titulo"><b>Clasificación / Categoria:</b></td>
              <td width="37%"><label id='_lblclascat'></label></td>
        </tr>
        <tr role="row" class="odd">
              <td  width="20%"  class="titulo"><b>Fecha Ultimo Ascenso:</b></td>
              <td -width="18%"><label id='_lblfchUltAscenso'></label></td>
              <td width="25%" class="titulo"><b>Años de Servicio:</b></td>
              <td width="37%"><label id='_lblaServicio'></label></td>
        </tr>

    </table>
  </table>
  <br>
  <table cellspacing="0" width="100%">
    <tr role="row" class="odd">
                <td colspan="4" class="titulo_fondo table-borderedtd "><b>Familiares Afiliados</b></td>
    </tr>
    <tr><td height="250" valign="top">
      <div id="_tblConstFamiliares">N_TIMED_OUT
﻿
￼

      <table class="table-fondo " cellspacing="0" width="100%" id="tblConstFamiliares" >
        <thead>
          <tr class="titulo_tabla table-borderedtd" >
            <th class="alinear_td">APELLIDOS Y NOMBRES</th>
            <th class="alinear_tddatos">CÉDULA</th>
            <th class="alinear_tddatos">PARENTESCO</th>
            <th class="alinear_tddatos">FECHA NAC.</th>
            <th class="alinear_tddatos">EDO CIVIL</th>
            <th class="alinear_tddatos">SITUACIÓN</th>
          </tr>
        </thead >
        <tbody id="_contenidoFamiliares">

        </tbody>
      </table>
      </div></td></tr>

    <tr><td>
      <div  class="control-label col-sm-12 col-md-12 cuerpo_constancia" align="justify">
    <br>Constancia que se expide a petición de la parte interesada a los <label id='_FechaActual'></label>.<br><br>
  </div>

<table border="0" width="100%">
  <tr>
    <td width="15%"><!-- <img id="barcode1" width="150" height="70" /> -->
      
    </td>
    <td width="70%" class="control-label">
      <center><h3>
       <img style="width: 250px;height: 120px;" class="img-responsive" src="../images/firma_digital.png" onerror="this.src='../images/ndisponible.jpg'" id="lblimgFirmaPI"/>
       <br><label id='lblnombrePI'>JESÚS RAFAEL SALAZAR VELASQUEZ</label><br>
       <label id='_lblgradoPI'>GENERAL DE DIVISIÓN</label><br>
       PRESIDENTE DE LA JUNTA ADMINISTRADORA DEL IPSFA
       </h3></center>
    </td>
    <td width="15%">
      <button onclick="imprSelec('_Constancia')" class="btnImprimir">Imprimir</button>
    </td>
  </tr>
  <tr>
    <td colspan="3" class="footer">
      <center>
        NOTA: Para validar este documento Ingresar al Portal http://www.ipsfa.gob.ve opción "Verificación de Documentos". <br>
        Direccón: Avenida Los Próceres Edif. Sede del IPSFA. Gerencia de Afiliación Planta Baja. Santa Mónica, municipio Libertador. Caracas, Distrito Capital. <br>
        Teléfonos: (0212) - 609-23-10 / 609-23-11 /609-23-12 

      </center>
    </td>
  </tr>
</table>

    </td></tr>
  </table>

</div>
</div>
</div>
</section>


</body>
</html>