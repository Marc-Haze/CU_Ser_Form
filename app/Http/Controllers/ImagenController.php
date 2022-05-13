<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagen;
use Carbon\Carbon;

class ImagenController extends Controller
{
     // Permite el acceso al modelo
     public function findAll(){
        // dataImagen contiene todos los datos del modelo Imagen
        $dataImagen= Imagen::all();
        // Devuelve un json con la información de Imagen
        return response()->json($dataImagen);
    }

    // Guarda la Imagen en la base de datos con una petición
    public function addImagen(Request $request){
        $dataImagen= new Imagen;

        //Si se añade una imagen la procesa y la sube a un directorio local.
        if($request->hasFile('imagen')){

            $OriginalName=$request->file('imagen')->getClientOriginalName();
            $newName=Carbon::now()->timestamp."_".$OriginalName;
            $Destiny='./upload/';
            $request->file('imagen')->move($Destiny, $newName);

            $dataImagen->imagen=ltrim($Destiny,'.').$newName;
        }

        $dataImagen->idCliente=$request->idCliente;
        $dataImagen->save();
        $request->file('imagen');
        return response()->json('Imagen añadida con éxito');
    }

    //Busca a una Imagen por ID
    public function findById($id){
        $imagen= new Imagen;
        $dataImagen=$imagen->find($id);
        return response()->json($dataImagen);
    }

    //Borra una Imagen usando la ID
    public function deleteById($id){
        $imagen= Imagen::find($id);
        if(!$imagen){
            return response()->json('ERROR: La imagen seleccionada no existe');
        }
        $imagen->delete();
        return response()->json("Registro eliminado con éxito");
    }

    //Actualiza los datos de la imagen seleccionada
    public function updateById(Request $request,$id){
        $imagen= Imagen::find($id);

        if($request->hasFile('imagen')){
            //Si existe una imagen enlazada la borra
            if($imagen){
                $fileRoute=base_path('public').$imagen->imagen;
                if(file_exists($fileRoute)){
                    unlink($fileRoute);
                }
                $imagen->delete();
            }

            //Añade una nueva imagen.
            $OriginalName=$request->file('imagen')->getClientOriginalName();
            $newName=Carbon::now()->timestamp."_".$OriginalName;
            $Destiny='./upload/';
            $request->file('imagen')->move($Destiny, $newName);
            $imagen->imagen=ltrim($Destiny,'.').$newName;
        }
        
        //Actualiza solo los datos que han cambiado
        if($request-> input('idCliente')){
            $imagen->idCliente=$request->input('idCliente');
        }
        $imagen->save();
        return response()->json("Datos de la Imagen actualizados");
    }
}
