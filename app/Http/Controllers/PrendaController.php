<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prenda;

class PrendaController extends Controller{
    
    // Permite el acceso al modelo
    public function findAll(){
        // dataPrenda contiene todos los datos del modelo Prenda
        $dataPrenda= Prenda::all();
        // Devuelve un json con la información de Prenda
        return response()->json($dataPrenda);
    }

    // Guarda la Prenda en la base de datos con una petición
    public function addPrenda(Request $request){
        $dataPrenda= new Prenda;
        $dataPrenda->idPedido=$request->idPedido;
        $dataPrenda->idPosicion=$request->idPosicion;
        $dataPrenda->tipoPrenda=$request->tipoPrenda;
        $dataPrenda->save();
        return response()->json('Prenda añadida con éxito');
    }

    //Busca a una posicion por ID
    public function findById($id){
        $prenda= new Prenda;
        $dataPrenda=$prenda->find($id);
        return response()->json($dataPrenda);
    }

    //Borra una posicion usando la ID
    public function deleteById($id){
        $prenda= Prenda::find($id);
        if(!$prenda){
            return response()->json('ERROR: La prenda seleccionada no existe');
        }
        $prenda->delete();
        return response()->json("Registro eliminado con éxito");
    }

    //Actualiza los datos de la prenda seleccionado su id
    public function updateById(Request $request,$id){
        $prenda= Prenda::find($id);
        
        //Actualiza solo los datos que han cambiado
        if($request-> input('idPedido')){
            $prenda->idPedido=$request->input('idPedido');
        }
        if($request-> input('idPosicion')){
            $prenda->idPosicion=$request->input('idPosicion');
        }
        if($request-> input('tipoPrenda')){
            $prenda->tipoPrenda=$request->input('tipoPrenda');
        }
        $prenda->save();
        return response()->json("Datos de la Prenda actualizados");
    }
}