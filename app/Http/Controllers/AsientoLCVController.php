<?php

namespace App\Http\Controllers;

use App\Models\asiento_LCV;
use Illuminate\Http\Request;

class AsientoLCVController extends Controller
{
    protected $asientoLCV;

    public function __construct()
    {
       $this->asientoLCV= new asiento_LCV(); 
    }
    
    public function index()
    {
        $datos= $this->asientoLCV->get();
       $dato = ['datos'=>$datos];
        echo view('header');
        echo view('configuracion_parametros_sistema/menu');
        echo view('configuracion_parametros_sistema/asientoLCV/asientoLCV',$dato);
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
     * @param  \App\Models\asiento_LCV  $asiento_LCV
     * @return \Illuminate\Http\Response
     */
    public function show(asiento_LCV $asiento_LCV)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\asiento_LCV  $asiento_LCV
     * @return \Illuminate\Http\Response
     */
    public function edit(asiento_LCV $asiento_LCV)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\asiento_LCV  $asiento_LCV
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, asiento_LCV $asiento_LCV)
    {
        $alcv=$asiento_LCV->generar_asientos;
        $asiento_LCV->generar_asientos=$request->generar_asientos;
        
        $asiento_LCV->update();

        if($alcv != $request->generar_asientos){
        return redirect()->to(asset('asientoLCV'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\asiento_LCV  $asiento_LCV
     * @return \Illuminate\Http\Response
     */
    public function destroy(asiento_LCV $asiento_LCV)
    {
        //
    }
}
