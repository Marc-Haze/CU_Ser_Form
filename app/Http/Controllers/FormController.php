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
    public function insertDataForm2(Request $request){
        if(!empty($request->input('tipoTrabajo'))){
            $dataTrabajo= new Trabajo;
            $dataTrabajo->idPedido=$request->numeroPedido;
            $dataTrabajo->tipoTrabajo=$request->tipoTrabajo;
            $dataTrabajo->referencia=$request->referencia;
            $dataTrabajo->save();

            $dataPrenda= new Prenda;
            $dataPrenda->idPedido=$request->numeroPedido;
            $dataPrenda->tipoPrenda=$request->tipoPrenda;
            $dataPrenda->save();

            $dataPosicion= new Posicion;
            $dataPosicion->idImagen=$request->idImagen;
            $dataPosicion->idPrenda=$dataPrenda->id;
            $dataPosicion->posicion=$request->posicion;
            $dataPosicion->otros=$request->otros;
            $dataPosicion->save();

            $numeroPedido=$dataTrabajo->idPedido=$request->numeroPedido;
            return view('form.secondForm', compact('numeroPedido'));
        }else{
            $numeroPedido=$request->numeroPedido;
            return view('form.thirdForm', compact('numeroPedido'));
        }
    }

    public function insertDataForm3(Request $request){
        if(!empty($request->input('articulo'))){
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

            $numeroPedido=$request->numeroPedido;
            return view('form.thirdForm', compact('numeroPedido'));
        }else{
            $numeroPedido=$request->numeroPedido;
            return redirect()->to('/index'); 
        }
    }

    //Busca un pedido y sus datos por ID y los envía al formulario de Modificación
     public function modById($id){
        $pedido= new Pedido;
        $dataPedido=$pedido->find($id);

        $dataArticulo= Articulo::all()->where('idPedido', $id);
        $dataPrenda= Prenda::all()->where('idPedido', $id);
        $dataTrabajo= Trabajo::all()->where('idPedido', $id);
        $dataEstampado= Estampado::all()->where('idPedido', $id);
        return view('form.modOrderForm', compact('dataPedido','dataArticulo','dataTrabajo','dataEstampado','dataPrenda'));
    }
    
    public function modOrderData(Request $request,$id){
        $pedido= Pedido::find($id);
        $dataArticulo= Articulo::all()->where('idPedido', $id);
        $dataPrenda= Prenda::all()->where('idPedido', $id);
        $dataTrabajo= Trabajo::all()->where('idPedido', $id);
        $dataEstampado= Estampado::all()->where('idPedido', $id);
        
        //Actualiza solo los datos que han cambiado
        if($request-> input('numeroTienda')){
            $pedido->numeroTienda=$request->input('numeroTienda');
        }
        if($request-> input('creacion')){
            $pedido->fechaPedido=$request->input('creacion');
        }
        if($request-> input('fechaTerminacion')){
            $pedido->fechaTerminacion=$request->input('fechaTerminacion');
        }
        $pedido->save();

        foreach ($dataPrenda as $prenda){
            if($request-> input('tipoPrenda')){
                $prenda->tipoPrenda=$request->input('tipoPrenda');
            }
            $prenda->save();
        }

        foreach ($dataTrabajo as $trabajo){
            if($request-> input('tipoTrabajo')){
                $trabajo->tipoTrabajo=$request->input('tipoTrabajo');
            }
            if($request-> input('referencia')){
                $trabajo->referencia=$request->input('referencia');
            }
            $trabajo->save();
        }

        foreach ($dataArticulo as $articulo){
            if($request-> input('articulo')){
                $articulo->articulo=$request->input('articulo');
            }
            if($request-> input('talla')){
                $articulo->talla=$request->input('talla');
            }
            if($request-> input('color')){
                $articulo->color=$request->input('color');
            }
            if($request-> input('descripcion')){
                $articulo->descripcion=$request->input('descripcion');
            }
            if($request-> input('codigoInterno')){
                $articulo->codigoInterno=$request->input('codigoInterno');
            }
            if($request-> input('ean')){
                $articulo->ean=$request->input('ean');
            }
            $articulo->save();
        }

        foreach ($dataEstampado as $estampado){
            if($request-> input('referencia')){
                $estampado->referencia=$request->input('referencia');
            }
            if($request-> input('unidades')){
                $estampado->unidades=$request->input('unidades');
            }
            if($request-> input('precioUnd')){
                $estampado->precioUnd=$request->input('precioUnd');
            }
            if($request-> input('importeTotal')){
                $estampado->importeTotal=$request->input('importeTotal');
            }
            if($request-> input('observaciones')){
                $estampado->observaciones=$request->input('observaciones');
            }
            $estampado->save();
        }
        return redirect()->to('/index'); 
    }
}