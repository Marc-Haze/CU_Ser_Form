<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articulo;
use App\Models\Cliente;
use App\Models\Estampado;
use App\Models\Pedido;
use App\Models\Posicion;
use App\Models\Prenda;
use App\Models\Trabajo;

class FormController extends Controller{
    
    public function insertData(Request $request){
        $dataPedido= new Pedido;
        $dataPedido->id=$request->numeroPedido;
        $dataPedido->idCliente=$request->idCliente;
        $dataPedido->fechaPedido=$request->fechaPedido;
        $dataPedido->fechaTerminacion=$request->fechaTerminacion;
        $dataPedido->creacion=$request->creacion;
        $dataPedido->save();

        $dataTrabajo= new Trabajo;
        $dataTrabajo->idPedido=$request->numeroPedido;
        $dataTrabajo->tipoTrabajo=$request->tipoTrabajo;
        $dataTrabajo->referencia=$request->referencia;
        $dataTrabajo->save();

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

        $dataPrenda= new Prenda;
        $dataTrabajo->idPedido=$request->numeroPedido;
        $dataPrenda->idPosicion=$request->idPosicion;
        $dataPrenda->tipoPrenda=$request->tipoPrenda;
        $dataPrenda->save();
        return response()->json('Datos añadidos con éxito');
    }
}