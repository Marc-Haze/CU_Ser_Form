<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use routes\web;

class PedidoController extends Controller{
    
    // Permite el acceso al modelo
    public function findAll(){
        // dataPedido contiene todos los datos del modelo Pedido
        $dataPedido= Pedido::all();
        // Devuelve un json con la información de Pedido
        return response()->json($dataPedido);
    }

    // Guarda el Pedido en la base de datos con una petición
    public function addPedido(Request $request){
        $dataPedido= new Pedido;
        $dataPedido->id=$request->numeroPedido;
        $dataPedido->idCliente=$request->idCliente;
        $dataPedido->fechaPedido=$request->fechaPedido;
        $dataPedido->fechaTerminacion=$request->fechaTerminacion;
        $dataPedido->creacion=$request->creacion;
        $dataPedido->save();
        $numeroPedido=$dataPedido->id=$request->numeroPedido;
        return view('form.secondForm', compact('numeroPedido'));
    }

    //Busca a una posicion por ID
    public function findById($id){
        $pedido= new Pedido;
        $dataPedido=$pedido->find($id);
        return response()->json($dataPedido);
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