<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estampado;

class EstampadoController extends Controller{
    
    // Permite el acceso al modelo
    public function findAll(){
        // dataEstampado contiene todos los datos del modelo Estampado
        $dataEstampado= Estampado::all();
        // Devuelve un json con la información de Estampado
        return response()->json($dataEstampado);
    }

    // Guarda el Estampado en la base de datos con una petición
    public function addEstampado(Request $request){
        $dataEstampado= new Estampado;
        $dataEstampado->idPedido=$request->idPedido;
        $dataEstampado->referencia=$request->referencia;
        $dataEstampado->unidades=$request->unidades;
        $dataEstampado->precioUnd=$request->precioUnd;
        $dataEstampado->importeTotal=$request->importeTotal;
        $dataEstampado->observaciones=$request->observaciones;
        $dataEstampado->save();
        return response()->json('Estammpado añadido con éxito');
    }

    //Busca a una posicion por ID
    public function findById($id){
        $estampado= new Estampado;
        $dataEstampado=$estampado->find($id);
        return response()->json($dataEstampado);
    }

    //Borra una posicion usando la ID
    public function deleteById($id){
        $estampado= Estampado::find($id);
        if(!$estampado){
            return response()->json('ERROR: El estampado seleccionado no existe');
        }
        $estampado->delete();
        return response()->json("Registro eliminado con éxito");
    }

    //Actualiza los datos del Estampado seleccionado su id
    public function updateById(Request $request,$id){
        $estampado= Estampado::find($id);
        
        //Actualiza solo los datos que han cambiado
        if($request-> input('idPedido')){
            $estampado->idPedido=$request->input('idPedido');
        }
        if($request-> input('referencia')){
            $estampado->referencia=$request->input('referencia');
        }
        if($request-> input('unidades')){
            $estampado->unidades=$request->input('unidades');
        }
        if($request-> input('precioUnd')){
            $estampado->precioUnd=$request->input('precioUnd');
        }
        if($request-> input('importeTotal')){
            $estampado->importeTotal=$request->input('importeTotal');
        }
        if($request-> input('Observaciones')){
            $estampado->observaciones=$request->input('observaciones');
        }
        $estampado->save();
        return response()->json("Datos del Estampado actualizados");
    }
}