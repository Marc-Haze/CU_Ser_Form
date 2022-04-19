<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trabajo;

class TrabajoController extends Controller{
    
    // Permite el acceso al modelo
    public function findAll(){
        // dataTrabajo contiene todos los datos del modelo T.Trabajo
        $dataTrabajo= Trabajo::all();
        // Devuelve un json con la información de T.Trabajo
        return response()->json($dataTrabajo);
    }

    // Guarda el T.Trabajo en la base de datos con una petición
    public function addTrabajo(Request $request){
        $dataTrabajo= new Trabajo;
        $dataTrabajo->tipoTrabajo=$request->tipoTrabajo;
        $dataTrabajo->referencia=$request->referencia;
        $dataTrabajo->descripcion=$request->descripcion;
        $dataTrabajo->pvp=$request->pvp;
        $dataTrabajo->igic=$request->igic;
        $dataTrabajo->save();
        return response()->json('Trabajo añadido con éxito');
    }

    //Busca a una posicion por ID
    public function findById($id){
        $trabajo= new Trabajo;
        $dataTrabajo=$trabajo->find($id);
        return response()->json($dataTrabajo);
    }

    //Borra una posicion usando la ID
    public function deleteById($id){
        $trabajo= Trabajo::find($id);
        if(!$trabajo){
            return response()->json('ERROR: El tipo de trabajo seleccionado no existe');
        }
        $trabajo->delete();
        return response()->json("Registro eliminado con éxito");
    }

    //Actualiza los datos del T.Trabajo seleccionado su id
    public function updateById(Request $request,$id){
        $trabajo= Trabajo::find($id);
        
        //Actualiza solo los datos que han cambiado
        if($request-> input('tipoTrabajo')){
            $trabajo->tipoTrabajo=$request->input('tipoTrabajo');
        }
        if($request-> input('referencia')){
            $trabajo->referencia=$request->input('referencia');
        }
        if($request-> input('descripcion')){
            $trabajo->descripcion=$request->input('descripcion');
        }
        if($request-> input('pvp')){
            $trabajo->pvp=$request->input('pvp');
        }
        if($request-> input('igic')){
            $trabajo->igic=$request->input('igic');
        }
        $trabajo->save();
        return response()->json("Datos del T.Trabajo actualizados");
    }
}