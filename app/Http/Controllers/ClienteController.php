<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ClienteController extends Controller{
    
    // Permite el acceso al modelo
    public function findAll(){
        // dataCliente contiene todos los datos del modelo Cliente
        $dataCliente= Cliente::all();
        // Devuelve un json con la información de Cliente
        return response()->json($dataCliente);
    }

    // Guarda el Cliente en la base de datos con una petición
    public function addCliente(Request $request){

        $dataCliente= new Cliente;

        $dataCliente->nombre=$request->nombre;
        $dataCliente->email=$request->email;
        $dataCliente->contacto=$request->contacto;

        $dataCliente->save();
        return response()->json('Cliente añadido con éxito');
    }

    //Busca a un cliente por ID
    public function findById($id){
        $cliente= new Cliente;
        $dataCliente=$cliente->find($id);
        return response()->json($dataCliente);
    }

    //Borra un cliente usando la ID
    public function deleteById($id){
        $cliente= Cliente::find($id);
        if(!$cliente){
            return response()->json('ERROR: El cliente seleccionado no existe');
        }
        $cliente->delete();
        return response()->json("Registro eliminado con éxito");
    }

    //Actualiza los datos del cliente seleccionado
    public function updateById(Request $request,$id){
        $cliente= Cliente::find($id);
        
        //Actualiza solo los datos que han cambiado
        if($request-> input('nombre')){
            $cliente->nombre=$request->input('nombre');
        }
        if($request-> input('email')){
            $cliente->email=$request->input('email');
        }
        if($request-> input('contacto')){
            $cliente->contacto=$request->input('contacto');
        }
        $cliente->save();
        return response()->json("Datos del Cliente actualizados");
    }
}