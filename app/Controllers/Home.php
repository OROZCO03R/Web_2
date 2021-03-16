<?php

namespace App\Controllers;
use App\Models\mUsuariosR;
class Home extends BaseController
{
	public function index()
	{
		return view('welcome_message');
	}
	public function bienvenida()
	{
		return view('vBienvenida');
	}
	public function registro()
	{
		return view('vRegistro');
	}
	public function eliminar()
	{
		return view('vEliminar');
	}

	public function insertarForm()
	{
		$mUsuariosR = new mUsuariosR();
		$usuarioNuevo = [
			"Nombre" => $_POST['Nombre'],
			"Apellidos" => $_POST['Apellidos'],
			"Fecha_Nacimiento" => $_POST['Fecha_de_Nacimiento'],
			"Correo_electronico" => $_POST['Correo_electronico'],
			"Contraseñas" => $_POST['Contraseñas']
		];

		$mUsuariosR->insert($usuarioNuevo);
		$datoId['idRegistrado'] = $mUsuariosR->db->insertId();
		return view("vSuccess",$datoId);
		
	}
	
}
