<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Articulo;
use App\Models\Estampado;
use App\Models\Posicion;
use App\Models\Prenda;
use App\Models\Trabajo;
use routes\web;

class PedidoController extends Controller{
    
    // Permite el acceso al modelo
    public function findAll(){
        // dataPedido contiene todos los datos del modelo Pedido
        $dataPedido= Pedido::all();
        // Devuelve un json con la información de Pedido
        return view('get.ordersList', compact('dataPedido'));
    }
    
    // Guarda el Pedido en la base de datos con una petición 
    // y redirecciona algunos datos al Segundo Formulario
    public function addPedido(Request $request){
        $dataPedido= new Pedido;
        $dataPedido->id=$request->numeroPedido;
        $dataPedido->numeroTienda=$request->numeroTienda;
        $dataPedido->idCliente=$request->idCliente;
        $dataPedido->fechaPedido=$request->fechaPedido;
        $dataPedido->fechaTerminacion=$request->fechaTerminacion;
        $dataPedido->creacion=$request->creacion;
        $dataPedido->save();
        $numeroPedido=$dataPedido->id=$request->numeroPedido;
        $idCliente=$dataPedido->id=$request->idCliente;
        return view('form.secondForm', compact('numeroPedido','idCliente'));
    }

    //Busca un pedido y sus datos por ID
    public function findById($id){
        $pedido= new Pedido;
        $dataPedido=$pedido->find($id);

        $dataArticulo= Articulo::all()->where('idPedido', $id);
        $dataPrenda= Prenda::all()->where('idPedido', $id);
        $dataTrabajo= Trabajo::all()->where('idPedido', $id);
        $dataEstampado= Estampado::all()->where('idPedido', $id);
        return view('get.orderIdSearch', compact('dataPedido','dataArticulo','dataTrabajo','dataEstampado','dataPrenda'));
    }

    //Borra una posicion usando la ID
    public function deleteById($id){
        $pedido= Pedido::find($id);
        if(!$pedido){
            return response()->json('ERROR: El pedido seleccionado no existe');
        }
        $pedido->delete();
        return response()->json("Registro eliminado con éxito");
    }

    //Actualiza los datos del Estampado seleccionado su id
    public function updateById(Request $request,$id){
        $pedido= Pedido::find($id);
        
        //Actualiza solo los datos que han cambiado
        if($request-> input('idCliente')){
            $pedido->idCliente=$request->input('idCliente');
        }
        if($request-> input('id')){
            $pedido->id=$request->input('id');
        }
        if($request-> input('fechaPedido')){
            $pedido->fechaPedido=$request->input('fechaPedido');
        }
        if($request-> input('fechaTerminacion')){
            $pedido->fechaTerminacion=$request->input('fechaTerminacion');
        }
        $pedido->save();
        return response()->json("Datos del Pedido actualizados");
    }
}