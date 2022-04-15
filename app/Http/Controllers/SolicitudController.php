<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Solicitud;

class SolicitudController extends Controller
{

    function __construct()
    {
        $this->middleware('permission:ver-solicitud|crear-solicitud|editar-solicitud|borrar-solicitud')->only('index');
        $this->middleware('permission:crear-solicitud', ['only' => ['create','store']]);
        $this->middleware('permission:editar-solicitud', ['only' => ['edit','update']]);
        $this->middleware('permission:borrar-solicitud', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solicitudes = Solicitud::paginate(10);
        return view('solicitudes.index',compact('solicitudes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('solicitudes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'fecha_solicitud' => 'required',
            'titulo_solicitud' => 'required',
            'descripcion_solicitud' => 'required',
            'id_categoria_solicitud' => 'required',
            'id_producto_solicitud' => 'required',
            'id_usuario_solicitud' => 'required'
        ]);
        Solicitud::create($request->all());
        return redirect()->route('solicitudes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Solicitud $solicitud)
    {
        return view('solicitudes.editar', compact('solicitud'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solicitud $solicitud)
    {
        request()->validate([
            'fecha_solicitud' => 'required',
            'titulo_solicitud' => 'required',
            'descripcion_solicitud' => 'required',
            'id_categoria_solicitud' => 'required',
            'id_producto_solicitud' => 'required',
            'cedula_usuario_solicitud' => 'required'
        ]);
        $solicitud->update($request->all());
        return redirect()->route('solicitudes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solicitud $solicitud)
    {
        $solicitud->delete();
        return redirect()->route('solicitudes.index');
    }
}
