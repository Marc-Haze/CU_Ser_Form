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
        $dataArticulo->idPedido=$request->idPedido;
        $dataArticulo->articulo=$request->articulo;
        $dataArticulo->talla=$request->talla;
        $dataArticulo->color=$request->color;
        $dataArticulo->descripcion=$request->descripcion;
        $dataArticulo->codigoInterno=$request->codigoInterno;
        $dataArticulo->ean=$request->ean;
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
        if($request-> input('idPedido')){
            $articulo->idPedido=$request->input('idPedido');
        }
        if($request-> input('articulo')){
            $articulo->articulo=$request->input('articulo');
        }
        if($request-> input('talla')){
            $articulo->talla=$request->input('talla');
        }
        if($request-> input('color')){
            $articulo->color=$request->input('color');
        }
        if($request-> input('descripcion')){
            $articulo->descripcion=$request->input('descripcion');
        }
        if($request-> input('codigoInterno')){
            $articulo->codigoInterno=$request->input('codigoInterno');
        }
        if($request-> input('ean')){
            $articulo->ean=$request->input('ean');
        }
        $articulo->save();
        return response()->json("Datos del Articulo actualizados");
    }
}