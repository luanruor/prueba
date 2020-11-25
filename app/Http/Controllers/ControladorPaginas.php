<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App;

class ControladorPaginas extends Controller
{
    public function Inicio(){

    	$estado="Activo";

    	return view('index',compact('estado'));
    }

    public function RegistroExitoso(){
    	return view('RegistroExitoso');
    }

    public function Crear(Request $request){
    	//return $request->all();

    	$request->validate([
    		'nombre'=>'required'
    	]);

    	$departamentoNuevo=new App\Models\Departamento;
    	$departamentoNuevo->nombre=$request->nombre;
    	$departamentoNuevo->estado=$request->estado;

		$departamentoNuevo->save();    	

		return view('RegistroExitoso');

    }

    public function Prueba(){
    	$departamentos=App\Models\Departamento::simplePaginate(5);

    	return view('prueba',compact('departamentos'));
    }
}
