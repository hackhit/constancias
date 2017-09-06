let ObjMilitar = new Militar();


function Consultar(){
	var Conn = new Conexion();
	var url = Conn.URL + "militar/crud/" + $("#_cedula").val();
	CargarAPI(url, "GET", "", ObjMilitar);
	
	
}
