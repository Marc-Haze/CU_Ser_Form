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
        if(!empty($request->input('tipoTrabajo'))){
            
            $dataTrabajo= new Trabajo;
            $dataTrabajo->idPedido=$request->numeroPedido;
            $dataTrabajo->tipoTrabajo=$request->tipoTrabajo;
            $dataTrabajo->referencia=$request->referencia;
            $dataTrabajo->save();

            $dataPosicion= new Posicion;
            $dataPosicion->idImagen=$request->idImagen;
            $dataPosicion->posicion=$request->posicion;
            $dataPosicion->otros=$request->otros;
            $dataPosicion->save();

            $dataPrenda= new Prenda;
            $dataPrenda->idPedido=$request->numeroPedido;
            $dataPrenda->idPosicion=$dataPosicion->id;
            $dataPrenda->tipoPrenda=$request->tipoPrenda;
            $dataPrenda->save();

            $numeroPedido=$dataTrabajo->idPedido=$request->numeroPedido;

            return view('form.secondForm', compact('numeroPedido'));

        }else{
            $numeroPedido=$request->numeroPedido;
            return view('form.thirdForm', compact('numeroPedido'));
        }
    }

    public function insertData2(Request $request){
        $dataArticulo= new Articulo;
        $dataArticulo->idPedido=$request->numeroPedido;
        $dataArticulo->articulo=$request->articulo;
        $dataArticulo->talla=$request->talla;
        $dataArticulo->color=$request->color;
        $dataArticulo->descripcion=$request->descripcion;
        $dataArticulo->codigoInterno=$request->codigoInterno;
        $dataArticulo->ean=$request->ean;
        $dataArticulo->save();

        $dataEstampado= new Estampado;
        $dataEstampado->idPedido=$request->numeroPedido;
        $dataEstampado->referencia=$request->referencia;
        $dataEstampado->unidades=$request->unidades;
        $dataEstampado->precioUnd=$request->precioUnd;
        $dataEstampado->importeTotal=$request->importeTotal;
        $dataEstampado->observaciones=$request->observaciones;
        $dataEstampado->save();

        return response()->json('Datos añadidos con éxito');
    }
}