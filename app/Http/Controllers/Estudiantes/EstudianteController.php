<?php

namespace App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Estudiante;

class EstudianteController extends Controller
{

    public function index(Request $request){
        $estudiante = Estudiante::orderBy('id','desc')->get();
        return response()->json($estudiante,200);
    }

    public function store(Request $request){
        $estudiante = Estudiante::create($request->all());
        return response()->json($estudiante,200);
    }

    public function edit(Request $request){
        $estudiante = Estudiante::find($request->id)->update([
            'nombre'=>$request->input('nombre'),
            'apellido'=>$request->input('apellido'),
            'telefono'=>$request->input('telefono'),
            'direccion'=>$request->input('direccion'),
            'correo'=>$request->input('correo')
        ]);
        return response()->json($estudiante,200);
    }

    public function buscar(Request $request){
        $estudiante = Estudiante::where('nombre','like','%'.$request->e.'%')->get();
        return response()->json($estudiante,200);
    }

    public function destroy(Request $request){
        $celular = Estudiante::where('id',$request->id)->delete();
	}
}
