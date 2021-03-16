<?php
namespace App\Models;
use CodeIgniter\Model;
class mUsuariosR extends Model{
	protected $table = 'insertar_estudiantes';
	protected $primarykey ='id_estudiante';

	protected $useAutoIncremet=true;

	protected $returnType ='array';
	protected $useSoftDeletes = true;

	protected $allowedFields = ['Nombre', 'Apellidos','Fecha_Nacimiento','Correo_electronico','Contraseñas'];

	protected $useTimestamps = false;
	protected $createdField  = 'created_at';
	protected $updatedField  = 'updated_at';
	protected $deletedField  = 'deleted_at';

	protected $validationRules = [];
	protected $validationMessages = [];
	protected $skipValidation = false;	
	}	
?>