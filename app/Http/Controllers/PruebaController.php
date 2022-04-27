<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Prueba;

class PruebaController extends Controller{

    public function findAll(){
        $dataPrueba= Prueba::all();
        return response()->json($dataPrueba);
    }
    
    public function addPrueba(Request $request){
        $dataPrueba= new Prueba;
        $dataPrueba->dato1=$request->dato1;
        $dataPrueba->dato2=$request->dato2;
        $dataPrueba->dato3=$request->dato3;
        $dataPrueba->save();
        return response()->json('Añadido con éxito');
    }

    public function findById($id){
        $prueba= new Prueba;
        $dataPrueba=$prueba->find($id);
        return response()->json($dataPrueba);
    }

    public function deleteById($id){
        $prueba= Prueba::find($id);
        if(!$prueba){
            return response()->json('ERROR: No existe');
        }
        $prueba->delete();
        return response()->json("Registro eliminado con éxito");
    }

    public function updateById(Request $request,$id){
        $prueba= Prueba::find($id);
        
        //Actualiza solo los datos que han cambiado
        if($request-> input('dato1')){
            $prueba->dato1=$request->input('dato1');
        }
        if($request-> input('dato2')){
            $prueba->dato2=$request->input('dato2');
        }
        if($request-> input('dato3')){
            $prueba->dato3=$request->input('dato3');
        }
        $prueba->save();
        return response()->json("Datos de Prueba actualizados");
    }
}