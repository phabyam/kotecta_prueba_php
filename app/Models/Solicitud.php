<?php
namespace App\Models;

use CodeIgniter\Model;


class Solicitud extends Model{

    protected $table = 'solicitud';
        
    protected $primaryKey = 'id';
    protected $allowedFields = ["codigo", "descripcion", "resumen", "id_empleado"];

    protected $db;

    public function getSolicitudesRelacionadas(){

        $builder = $this->db->table("solicitud");
        $builder->select('solicitud.*, empleado.nombre as nombre_empleado');
        $builder->join('empleado', 'solicitud.id_empleado = empleado.id', "left")
        ->orderBy('id', 'desc'); // added left here
        

  
        return $builder;
    }

}