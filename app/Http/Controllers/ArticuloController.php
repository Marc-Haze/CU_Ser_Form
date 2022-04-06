<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;

class ArticuloController extends Controller{
    
    // Permite el acceso al modelo
    public function findAll(){
        // dataArticulo contiene todos los datos del modelo Articulo
        $dataArticulo= Articulo::all();
        // Devuelve un json con la información de Prenda
        return response()->json($dataArticulo);
    }

    // Guarda el Articulo en la base de datos con una petición
    public function addArticulo(Request $request){
        $dataArticulo= new Articulo;
        $dataArticulo->idPrenda=$request->idPrenda;
        $dataArticulo->referencia=$request->referencia;
        $dataArticulo->talla=$request->talla;
        $dataArticulo->color=$request->color;
        $dataArticulo->cantidad=$request->cantidad;
        $dataArticulo->colorEstampado=$request->colorEstampado;
        $dataArticulo->save();
        return response()->json('Articulo añadido con éxito');
    }

    //Busca a una posicion por ID
    public function findById($id){
        $articulo= new Articulo;
        $dataArticulo=$articulo->find($id);
        return response()->json($dataArticulo);
    }

    //Borra una posicion usando la ID
    public function deleteById($id){
        $articulo= Articulo::find($id);
        if(!$articulo){
            return response()->json('ERROR: El articulo seleccionada no existe');
        }
        $articulo->delete();
        return response()->json("Registro eliminado con éxito");
    }

    //Actualiza los datos del articulo seleccionado su id
    public function updateById(Request $request,$id){
        $articulo= Articulo::find($id);
        
        //Actualiza solo los datos que han cambiado
        if($request-> input('idPrenda')){
            $articulo->idPrenda=$request->input('idPrenda');
        }
        if($request-> input('referencia')){
            $articulo->referencia=$request->input('referencia');
        }
        if($request-> input('talla')){
            $articulo->talla=$request->input('talla');
        }
        if($request-> input('color')){
            $articulo->color=$request->input('color');
        }
        if($request-> input('cantidad')){
            $articulo->cantidad=$request->input('cantidad');
        }
        if($request-> input('colorEstampado')){
            $articulo->colorEstampado=$request->input('colorEstampado');
        }
        $articulo->save();
        return response()->json("Datos del Articulo actualizados");
    }
}