<?php

namespace App\Http\Controllers\Productos;
use App\Http\Controllers\Controller;
use App\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(Request $request){
        $producto = Producto::orderBy('id','desc')->get();
        return response()->json($producto,200);
    }
    public function store(Request $request){
        $producto = Producto::create($request->all());
        return response()->json($producto,200);
    }

    public function edit(Request $request){
        $producto = Producto::find($request->id)->update([
            'reference'=>$request->input('reference'),
            'name'=>$request->input('name'),
            'description'=>$request->input('description'),
            'logo'=>$request->input('logo'),
            'date_release'=>$request->input('date_release'),
            'date_revision'=>$request->input('date_revision')
        ]);
        return response()->json($producto,200);
    }

    public function buscar(Request $request){
        $producto = Producto::where('name','like','%'.$request->p.'%')->get();
        return response()->json($producto,200);
    }

    public function destroy(Request $request){
        $producto = Producto::where('id',$request->id)->delete();
        return response()->json(['result' => $producto, 'request' => $request],200);
	}
}
