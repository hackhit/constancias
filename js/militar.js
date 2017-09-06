'use strict';
/**
 Desarrollado por  :  Maria Elena Nuñez
 Correo            :  marielen936@gmail.com
 Modifcado    por  :
 Correo persona mod:
 Fecha Creacion    :  11-07-2017
 Fecha Modificacion:  11-07-2017
 Descripcion       :  Clases, metodos y funciones de Militares
*/
let Util = new Utilidad();
class DatoBasico{
	constructor(){
		this.cedula = "";
		this.nropersona = 0;
		this.nacionalidad = "";
		this.nombreprimero = "";
		this.nombresegundo = "";
		this.apellidoprimero = "";
		this.apellidosegundo = "";
		this.fechanacimiento = "";
		this.fechadefuncion = "";
		this.nropasaporte = "";
		this.sexo = "";
		this.estadocivil = "";

	}

	

	Sexo(){
		return (this.sexo == "F")?"FEMENINO":"MASCULINO";
	}

	Nacionalidad(){
		let nacionalidad = "VENEZOLANA";
		if (this.nacionalidad == "E"){
			nacionalidad = "EXTRANJERA"
		}
		return nacionalidad;
	}

	

}

class DocumentoCivil{
	constructor(){
		this.archivo = "";
	}

	ActaMatrimonio(){
		this.registrocivil = "";
		this.ano = "";
		this.acta = "";
		this.folio = "";
		this.libro = "";
		this.archivo = "";
		return this;
	}

	ActaDivorcio(){
		this.tribunal = "";
		this.numerosentencia = "";
		this.fechasentencia = "";
		this.archivo = "";
		return this;
	}

	CartaSolteria(){
		this.registrocivil = "";
		this.fecha = "";
		this.archivo = "";
		return this;
	}

	ConstanciaViudez(){
		this.registrocivil = "";
		this.fecha = "";
		this.archivo = "";
		return this;
	}

	ActaDefuncion(){
		this.registrocivil = "";
		this.fecha = "";
		this.archivo = "";
		return this;
	}

}

class  DatoFisico{
	constructor(){
		this.peso = 0.0;
		this.talla = 0.0;
	}
}

class DatoFisionomico{
	constructor(){
		this.colorpiel = "";
		this.colorojos = "";
		this.colorcabello = "";
		this.estatura = "";
		this.senaParticular = "";
		this.gruposanguineo = "";
	}

    ObtenerCabello(){
        var cad = "";
        switch (this.colorcabello){
		case "NE":cad = "NEGRO";break;
            	case "BA":cad = "BLANCO";break;
            	case "CA":cad = "CASTAÑO";break;
		case "MA":cad = "MARRON";break;
		case "AM":cad = "AMARILLO";break;
		case "AZ":cad = "AZUL";break;
		case "VI":cad = "VIOLETA";break;
		case "CV":cad = "CALVO";break;
		case "GR":cad = "GRIS";break;
		default: cad = "********";break;
        }
        return cad;
    }

    ObtenerPiel(){
        var cad = "";
        switch (this.colorpiel){
			case "NE":cad = "NEGRA";break;
            case "BL":cad = "BLANCA";break;
            case "CA":cad = "CANELA";break;
            case "MO":cad = "MORENA";break;
						case "TR":cad = "TRIGUEÑA";break;
						case "MO":cad = "MORENA";break;
						case "RO":cad = "ROSADA";break;
            default: cad = "********";break;
        }
        return cad;
    }

    ObtenerOjo(){
        var cad = "";
        switch (this.colorojos){
            case "AM":cad = "ÁMBAR";break;
            case "AV":cad = "AVELLANA";break;
            case "CA":cad = "CASTAÑO";break;
            case "VE":cad = "VERDE";break;

            case "AZ":cad = "AZUL";break;
            case "GR":cad = "GRIS";break;
            case "NE":cad = "NEGRO";break;
            case "MA":cad = "MARRON";break;
						case "PA":cad = "PARDO";break;

            default: cad = "********";break;
        }
        return cad;
    }
}

class Correo{
	constructor(){
		this.principal = "";
		this.alternativo = "";
		this.institucional = "";
	}
}


class RedSocial{
	constructor(){
		this.twitter = "";
		this.facebook = "";
		this.instagram = "";
		this.linkedin = "";
	}
}

class Telefono{
	constructor(){
		this.movil = "";
		this.domiciliario = "";
		this.emergencia = "";
	}
}


class Direccion{
	constructor(){
		this.tipo = 0;
		this.estado = "";
		this.ciudad = "";
		this.municipio = "";
		this.parroquia = "";
		this.calleavenida = "";
		this.casa = "";
		this.apartamento = "";
		this.numero = 0;


	}
}

class Carnet{
	constructor(){
		this.idcarnet = "";
		this.tipo = "";
		this.condicion = "";
		this.serial = "";
		this.codigocomponente = "";
		this.fechacreacion = "";
		this.fechavencimiento = "";
		this.responsable = "";
		this.Componente = new Componente();
		this.Grado = new Grado();
	}
}


class Familiar{
	constructor(){
		this.id = "";
		this.Persona = new Persona();
		this.parentesco = "";
		this.esmilitar = "";
		this.condicion = 0;
		this.estudia = 0;
		this.beneficio = true;
		this.documento = 0;
		this.documentopadre = "";
		this.historiamedica = "";
    	this.donante = "";
   		this.serial = "";
	}

	GenerarParentesco(){
		var parentesco= "";
		 switch(this.parentesco) {
		    case "PD":
		     	parentesco =(this.Persona.DatoBasico.sexo=="F")?"MADRE":"PADRE";
		        break;
		    case "HJ":
		    	parentesco = (this.Persona.DatoBasico.sexo=="F")?"HIJA":"HIJO";
		        break;
		    case "EA":
		    	parentesco = (this.Persona.DatoBasico.sexo=="F")?"ESPOSA":"ESPOSO";
		        break;
				case "HO":
		    	parentesco = (this.Persona.DatoBasico.sexo=="F")?"HERMANA":"HERMANO";
		        break;
		    default:
		        parentesco = "";
		        break;
		}
		return parentesco;
	}
	Obtener(){
		
		return this;
	}

}

class Tim{
	constructor(){
		this.fechacreacion = "";
		this.fechavencimiento = "";
		this.Componente = new Componente();
		this.Grado = new Grado();
		this.firma = "";
		this.huella = "";
	}
}

class Componente{
	constructor(){
		this.nombre = "";
		this.descripcion = "";
		this.abreviatura = "";
	}
	Crear(componente){

	}
}

class Grado{
	constructor(){

		this.nombre = "";
		this.descripcion = "";
		this.abreviatura = "";
	}
	Obtener(){
		return this;
	}
}

class DatoFinanciero{
	constructor(){
		this.tipo = "";
		this.institucion = "";
		this.cuenta = "";
	}
}

class Persona{
	constructor(){
		this.DatoBasico = new DatoBasico();
		this.CuentaBancaria = new CuentaBancaria();
		this.DatoFisico = new DatoFisico();
		this.Correo = new Correo();
		this.DatoFisionomico = new DatoFisionomico();
		this.Direccion = [];
		this.DatoFinanciero = [];
		this.Telefono = new Telefono();
		this.PartidaNacimiento = new PartidaNacimiento();
		this.Defuncion = new Defuncion();
		this.DocumentoCivil = new DocumentoCivil();
		this.RedSocial = new RedSocial();
		this.foto = "";
		this.huella = "";https://lintut.com/how-to-configure-static-ip-address-on-centos-7/
		this.firma = "";

		this.CondicionEspecial = new CondicionEspecial();
	}
}

class PartidaNacimiento{
	constructor(){
		this.registro = "";
		this.ano = "";
		this.acta = "";
		this.folio = "";
		this.libro = "";
	}
}

class Defuncion{
	constructor(){
		this.registrocivil = "";
		this.ano = "";
		this.acta = "";
		this.folio = "";
		this.libro = "";
	}
}

class Recibo{
    constructor(){
        this.id = "";
        this.idf = "";
        this.motivo = "";
        this.numero = 0;
        this.canal = "";
        this.fecha = "";
        this.monto = 0.0;
    }
}

class Militar{
	constructor(){
		this.id = "";
		this.tipodato = 0;
		this.Persona = new Persona();
		this.categoria = "";
		this.situacion = "";
		this.clase = "";
		this.fingreso = "";
		this.fascenso = "";
		this.areconocido = 0;
		this.mreconocido = 0;
		this.dreconocido = 0;
		this.posicion = 0;
		this.fresuelto = "";
		this.nresuelto = 0;
		this.descripcionhistorica = "";
		this.Componente = new Componente();
		this.Grado = new Grado();
		this.urlsimbolo = "";
		this.urlfirmaministro = "";
		this.urlpresidenteipsfa = "";
		this.urlfoto = "";
		this.urlhuella = "";
		this.urlfirma = "";
		this.urlcedula = "";
		this.codigocomponente = "";
    	this.numerohistoria = "";
    	this.pasearetiro = false;
	}


	Crear(militar){
		//Area de Trabajo
		var Conn = new Conexion();
		var nom = militar.Persona.DatoBasico.nombreprimero + " " + militar.Persona.DatoBasico.nombresegundo + " " + militar.Persona.DatoBasico.apellidoprimero + " " + militar.Persona.DatoBasico.apellidosegundo;
 		var edoc = Util.GenerarEstadoCivil(militar.Persona.DatoBasico.estadocivil, militar.Persona.DatoBasico.sexo);
 		var situac = Util.ConvertirSitucacion(militar.situacion);
		var cat = Util.ObtenerCategoria(militar.categoria,militar.situacion);
		var cla = Util.ObtenerClasificacion(militar.clase);
		var comp = Util.GenerarComponente(militar.Componente.abreviatura);
		var fechaN = Util.ConvertirFechaHumana(militar.Persona.DatoBasico.fechanacimiento);
		var fecha = Util.ConvertirFechaActual();
		var fechaIng = Util.ConvertirFechaHumana(militar.fingreso);
		var fechaAsc = Util.ConvertirFechaHumana(militar.fascenso);
		var ts = Util.CalcularTServicio(militar.fingreso,militar.fretiro,situac)
		var fehora = Util.FechaHora();
		var datF=""; 
		var annioS = ts.substr(0, 2);
		var mesS = ts.substr(7, 2);
		var diaS = ts.substr(15, 2);

		var url = "../images/grados/" + militar.Grado.abreviatura + ".png";
		url = url.toLowerCase();
		$("#_Constgrado").attr("src", url);
		//Datos Constancia de Afiliacion
		var rutaimg = Conn.URLIMG;
		url = rutaimg + $("#_cedula").val() + ".jpg";
		if (militar.Persona.foto  != undefined){
			rutaimg = Conn.URLTEMP;
			url = rutaimg + $("#_cedula").val() + "/foto.jpg";
		}
		//$("#minifoto").attr("href", url);
		$("#_img").attr("src", url);
		$('#_contenidoFamiliares').html(datF);
		$('#_lblGrado').html(militar.Grado.descripcion);
		$('#_lblnombreMil').html(nom);
		$('#_lblcedulaMil').html(militar.Persona.DatoBasico.cedula);
		$('#_lbledoCivilM').html(edoc);
		$('#_lblfchNacMil').html(fechaN);
		$('#_lbldireccionMil').html(nom);
		$('#_lblfchIngresoFANB').html(fechaIng);
		$('#_lblcomponente').html(comp);
		$('#_lblsituacionMil').html(situac);
		$('#_lblclascat').html(cla+' / ' +cat);
		$('#_lblfchUltAscenso').html(fechaAsc);
		$('#_lblaServicio').html(ts);
		$('#_FechaActual').html(fecha);
		$('#_fecha').html(fehora);
		$('#_anniosserv').html(annioS);
		$('#_messerv').html(mesS);
		$('#_diasserv').html(diaS);
		
			militar.Familiar.forEach(v => {
			var DBF = v.Persona.DatoBasico;
			var par = Util.ConvertirParentesco(v.parentesco,DBF.sexo)
			var fecN = Util.ConvertirFechaHumana(DBF.fechanacimiento);
			var ec = Util.GenerarEstadoCivil(DBF.estadocivil, DBF.sexo);
			var cedula = DBF.cedula;
			var nombre = DBF.apellidoprimero + ' ' + DBF.apellidosegundo + ' ' + DBF.nombreprimero + ' ' + DBF.nombresegundo;
			var situacion = "ACTIVO";
			if (v.beneficio != true) {
				situacion = "INACTIVO"
			}
			if (v.beneficio == false && v.parentesco == "EA"){
				//esposa inactiva
			}else{
				
			datF += `<tr>`;
        	datF += `<td>${nombre}</td>
        			 <td>${cedula}</td>
        			 <td>${par}</td>
        			 <td>${fecN}</td>
        			 <td>${ec}</td>
        			 <td>${situacion}</td>`;
        	datF += `</tr>`;
        	}
      	});
			//Fin datos de Constancia de Afiliación
			//Datos Hoja de Ruta
			//$('#_lblcedulaMil').html(militar.Persona.DatoBasico.cedula);

	}


}

class CuentaBancaria{
	constructor(){
		this.banco = "";
		this.tipocuenta = "";
		this.numerocuenta = "";
	}
}

class CondicionEspecial{
    constructor(){
        this.fecha = "";
        this.tipodiscapacidad = 0;
        this.diagnostico = "";
        this.nombrehospitalmilitar="";
    }
}

/**
$(function (){
  if (sessionStorage.getItem('ipsfaToken') == undefined ){
		$(location).attr("href","index.html");
	}else{
		$("#_body").show();
	}
});
**/
function CerrarSession(){
	sessionStorage.removeItem('ipsfaToken');
	$(location).attr("href","index.html");
}
