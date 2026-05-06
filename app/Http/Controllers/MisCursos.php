<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //importamos la clase DB para hacer consultas a la base de datos

class MisCursos extends Controller

{    
    public function index2($curso)
    {
        return 'Hola mundillo, el curso es: ' . $curso;
    }
    public function index(){
        $datos=DB::select("select * from alumno");
        return view('datosalumnos')->with("datos", $datos);
    }
    public function adicionar(Request $request){
        $insertar=DB::insert(
            "insert into alumno (ci,nombre,paterno,materno) values(?,?,?,?)",
            [
                $request->ci,
                $request->nombre,
                $request->paterno,
                $request->materno
            ]
        );
        if ($insertar){
            return back()->with("mensaje","Alumno registrado con exito");
        }else{
            return back()->with("mensaje","Error al registrar alumno");
        }
    }
}
