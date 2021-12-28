<?php

namespace App\Http\Controllers;

use App\Models\formato_doc;
use Illuminate\Http\Request;

class FormatoDocController extends Controller
{
    protected $formato;

    public function __construct()
    {
       $this->formato= new formato_doc(); 
    }
    
    public function index()
    { 
        $datos= $this->formato->get();
       $dato = ['datos'=>$datos];
        echo view('header');
        echo view('configuracion_parametros_sistema/menu');
        echo view('configuracion_parametros_sistema/formatoDocumento/formatoDocumento',$dato);
        echo view('footer'); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\formato_doc  $formato_doc
     * @return \Illuminate\Http\Response
     */
    public function show(formato_doc $formato_doc)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\formato_doc  $formato_doc
     * @return \Illuminate\Http\Response
     */
    public function edit(formato_doc $formato_doc)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\formato_doc  $formato_doc
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, formato_doc $formato_doc)
    {   
   
        $fhr=$formato_doc->habilitar_ref;
        $fim=$formato_doc->imprimir_nombre_comprobante;
        $ffh=$formato_doc->mostrar_fecha_hora;

        $formato_doc->habilitar_ref=$request->habilitar_ref;
        $formato_doc->imprimir_nombre_comprobante=$request->imprimir_nombre_comprobante;
        $formato_doc->mostrar_fecha_hora=$request->mostrar_fecha_hora;
        
        $formato_doc->update();

        if($fhr != $request->habilitar_ref || $fim != $request->imprimir_nombre_comprobante || $ffh != $request->mostrar_fecha_hora){
        return redirect()->to(asset('formatoDocumento'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\formato_doc  $formato_doc
     * @return \Illuminate\Http\Response
     */
    public function destroy(formato_doc $formato_doc)
    {
        //
    }
}
