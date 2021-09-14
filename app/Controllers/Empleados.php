<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Empleado;

class Empleados extends Controller
{

    public function index()
    {
        $datos['header'] = view('header');
        $datos['footer'] = view('footer');

        $empleado = new Empleado();

        $datos['empleados'] = $empleado->orderBy('id', 'DESC')->findAll();

        return view('empleados/listar', $datos);
    }


    public function crear()
    {
        $datos['header'] = view('header');
        $datos['footer'] = view('footer');

        

        return view('empleados/crear', $datos);
    }


    public function guardar()
    {

        $datos = [
            'nombre' => $this->request->getVar('nombre'),
            'fecha_ingreso' => $this->request->getVar('fecha_ingreso'),
            'salario' => $this->request->getVar('salario')
        ];
        

        $empleado = new Empleado();
        
        $empleado->insert($datos);
        
        return $this->response->redirect(base_url('listar_empleados'));
    }


    public function borrar($id=null)
    {
        $datos['header'] = view('header');
        $datos['footer'] = view('footer');

        $empleado = new Empleado();

        
        $empleado->where('id', $id)->delete();
        

        return $this->response->redirect(base_url('listar_empleados'));
       
    }

    public function editar($id=null)
    {
        $datos['header'] = view('header');
        $datos['footer'] = view('footer');

        $empleado = new Empleado();

        
        $datos['empleado'] = $empleado->where('id', $id)->first();

      

        

        return view('empleados/editar', $datos);
        

       
    }


    public function actualizar()
    {

        $datos = [
            'nombre' => $this->request->getVar('nombre'),
            'fecha_ingreso' => $this->request->getVar('fecha_ingreso'),
            'salario' => $this->request->getVar('salario')
        ];        

        $empleado = new Empleado();
        $id = $this->request->getVar('id');
        
        $empleado->update($id, $datos);
        
        return $this->response->redirect(base_url('listar_empleados'));
    }
}
