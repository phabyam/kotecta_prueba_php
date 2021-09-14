<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Solicitud;
use App\Models\Empleado;

class Solicitudes extends Controller
{

    public function index()
    {
        $datos['header'] = view('header');
        $datos['footer'] = view('footer');

        $empleado = new Solicitud();


        $datos['solicitudes'] =  $empleado->getSolicitudesRelacionadas()->get();
        
    

        return view('solicitudes/listar', $datos);
    }


    public function crear()
    {
        $datos['header'] = view('header');
        $datos['footer'] = view('footer');

        $datos['header'] = view('header');
        $datos['footer'] = view('footer');

        

        $empleado = new Empleado();



        $datos['empleados'] = $empleado->orderBy('id', 'DESC')->findAll();
        

        return view('solicitudes/crear', $datos);
    }


    public function guardar()
    {

        $datos = [
            'id_empleado' => $this->request->getVar('id_empleado'),
            'codigo' => $this->request->getVar('codigo'),
            'resumen' => $this->request->getVar('resumen'),            
            'descripcion' => $this->request->getVar('descripcion')
        ]; 
        
        //print_r($datos); exit;

        $solicitud = new Solicitud();
        
        $solicitud->insert($datos);
        
        return $this->response->redirect(base_url('listar_solicitudes'));
    }


    public function borrar($id=null)
    {
        $datos['header'] = view('header');
        $datos['footer'] = view('footer');

        $solicitud = new Solicitud();

        
        $solicitud->where('id', $id)->delete();
        

        return $this->response->redirect(base_url('listar_solicitudes'));
       
    }

    public function editar($id=null)
    {
        $datos['header'] = view('header');
        $datos['footer'] = view('footer');

        $solicitud = new Solicitud();

        $empleado = new Empleado();



        $datos['empleados'] = $empleado->orderBy('id', 'DESC')->findAll();
        $datos['solicitud'] = $solicitud->where('id', $id)->first();

        

        return view('solicitudes/editar', $datos);
        

       
    }


    public function actualizar()
    {

        $datos = [
            'id_empleado' => $this->request->getVar('id_empleado'),
            'codigo' => $this->request->getVar('codigo'),
            'resumen' => $this->request->getVar('resumen'),            
            'descripcion' => $this->request->getVar('descripcion')
        ];        

        $solicitud = new Solicitud();
        $id = $this->request->getVar('id');
        
        $solicitud->update($id, $datos);
        
        return $this->response->redirect(base_url('listar_solicitudes'));
    }
}
