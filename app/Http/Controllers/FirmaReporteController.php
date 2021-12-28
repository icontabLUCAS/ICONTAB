<?php

namespace App\Http\Controllers;

use App\Models\firma_reporte;
use Illuminate\Http\Request;

class FirmaReporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   


        $firma=firma_reporte::paginate(5);
        $datos=['firmaReporte'=>$firma , 'c'=>1];
        echo view('header');
        echo view('configuracion_parametros_sistema/menu');
        echo view('configuracion_parametros_sistema/firmaReporte/firmaReporte', $datos);
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
     * @param  \App\Models\firma_reporte  $firma_reporte
     * @return \Illuminate\Http\Response
     */
    public function show(firma_reporte $firma_reporte)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\firma_reporte  $firma_reporte
     * @return \Illuminate\Http\Response
     */
    public function edit(firma_reporte $firma_reporte)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\firma_reporte  $firma_reporte
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, firma_reporte $firma_reporte)
    { 
        $f1=$firma_reporte->firma1; 
        $f2=$firma_reporte->firma2;
        $f3=$firma_reporte->firma3;
        $fp=$firma_reporte->opcion_firma_enteresado;
       
        $firma_reporte->firma1=$request->firma1;
        $firma_reporte->firma2=$request->firma2;
        $firma_reporte->firma3=$request->firma3;
        if ($firma_reporte->activo_opcion == 1){
        $firma_reporte->opcion_firma_enteresado=$request->firma_interesado;
        }
        $firma_reporte->update();

        if($f1!=$request->firma1 || $f2!=$request->firma2 || $f3!=$request->firma3 || ($fp!=$request->firma_interesado && $firma_reporte->activo_opcion==1) ){
            return redirect()->to(asset('firmaReporte'));
        }
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\firma_reporte  $firma_reporte
     * @return \Illuminate\Http\Response
     */
    public function destroy(firma_reporte $firma_reporte)
    {
        //
    }
}
