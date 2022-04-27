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
        $dataCliente->numero=$request->numero;
        $dataCliente->cif_nif=$request->cif_nif;
        $dataCliente->razonSocial=$request->razonSocial;
        $dataCliente->nombreComercial=$request->nombreComercial;
        $dataCliente->telefono=$request->telefono;
        $dataCliente->email=$request->email;
        $dataCliente->domicilio=$request->domicilio;
        $dataCliente->codigoPostal=$request->codigoPostal;
        $dataCliente->municipio=$request->municipio;
        $dataCliente->provincia=$request->provincia;
        $dataCliente->observaciones=$request->observaciones;
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
        if($request-> input('numero')){
            $cliente->numero=$request->input('numero');
        }
        if($request-> input('cif_nif')){
            $cliente->cif_nif=$request->input('cif_nif');
        }
        if($request-> input('razonSocial')){
            $cliente->razonSocial=$request->input('razonSocial');
        }
        if($request-> input('nombreComercial')){
            $cliente->nombreComercial=$request->input('nombreComercial');
        }
        if($request-> input('telefono')){
            $cliente->telefono=$request->input('telefono');
        }
        if($request-> input('email')){
            $cliente->email=$request->input('email');
        }
        if($request-> input('domicilio')){
            $cliente->domicilio=$request->input('domicilio');
        }
        if($request-> input('codigoPostal')){
            $cliente->codigoPostal=$request->input('codigoPostal');
        }
        if($request-> input('municipio')){
            $cliente->municipio=$request->input('municipio');
        }
        if($request-> input('provincia')){
            $cliente->provincia=$request->input('provincia');
        }
        if($request-> input('observaciones')){
            $cliente->observaciones=$request->input('observaciones');
        }
        $cliente->save();
        return response()->json("Datos del Cliente actualizados");
    }
}