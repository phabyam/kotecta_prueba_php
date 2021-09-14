<?php
namespace App\Models;

use CodeIgniter\Model;

class Empleado extends Model{

    protected $table = 'empleado';
        
    protected $primaryKey = 'id';
    protected $allowedFields = ["nombre", "fecha_ingreso", "salario"];
}