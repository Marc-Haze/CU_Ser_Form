<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posicion;

use Carbon\Carbon;

class PosicionController extends Controller{
    
    // Permite el acceso al modelo
    public function findAll(){
        // dataPosicion contiene todos los datos del modelo Posicion
        $dataPosicion= Posicion::all();
        // Devuelve un json con la información de Posicion
        return response()->json($dataPosicion);
    }

    // Guarda el Cliente en la base de datos con una petición
    public function addPosicion(Request $request){

        $dataPosicion= new Posicion;

        //Si se añade una imagen la procesa y la sube a un directorio local.
        if($request->hasFile('imagen')){

            $OriginalName=$request->file('imagen')->getClientOriginalName();
            $newName=Carbon::now()->timestamp."_".$OriginalName;
            $Destiny='./upload/';
            $request->file('imagen')->move($Destiny, $newName);

            $dataPosicion->imagen=ltrim($Destiny,'.').$newName;
        }

        $dataPosicion->idCliente=$request->idCliente;
        $dataPosicion->posicion=$request->posicion;
        $dataPosicion->otros=$request->otros;
        

        $dataPosicion->save();
        $request->file('imagen');
        return response()->json('Posicion añadida con éxito');
    }

    //Busca a una posicion por ID
    public function findById($id){
        $posicion= new Posicion;
        $dataPosicion=$posicion->find($id);
        return response()->json($dataPosicion);
    }

    //Borra una posicion usando la ID
    public function deleteById($id){
        $posicion= Posicion::find($id);
        if(!$posicion){
            return response()->json('ERROR: La posicion seleccionada no existe');
        }
        $posicion->delete();
        return response()->json("Registro eliminado con éxito");
    }

    //Actualiza los datos de la posicion seleccionado
    public function updateById(Request $request,$id){
        $posicion= Posicion::find($id);

        if($request->hasFile('imagen')){
            //Si existe una imagen enlazada la borra
            if($posicion){
                $fileRoute=base_path('public').$posicion->imagen;
                if(file_exists($fileRoute)){
                    unlink($fileRoute);
                }
                $posicion->delete();
            }

            //Añade una nueva imagen.
            $OriginalName=$request->file('imagen')->getClientOriginalName();
            $newName=Carbon::now()->timestamp."_".$OriginalName;
            $Destiny='./upload/';
            $request->file('imagen')->move($Destiny, $newName);
            $posicion->imagen=ltrim($Destiny,'.').$newName;
        }
        
        //Actualiza solo los datos que han cambiado
        if($request-> input('idCliente')){
            $posicion->idCliente=$request->input('idCliente');
        }
        if($request-> input('posicion')){
            $posicion->posicion=$request->input('posicion');
        }
        if($request-> input('otros')){
            $posicion->otros=$request->input('otros');
        }
        $posicion->save();
        return response()->json("Datos de la Posicion actualizados");
    }
}