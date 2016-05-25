<?php

namespace App\Http\Controllers;

use App\Model\Prestamo;
use Illuminate\Http\Request;

use App\Http\Requests;
use DB;

class PrestamoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $prestamos = Prestamo::all();

        $prestamos = DB::table('prestamos')
            ->join('estudiantes', 'estudiantes.id', '=', 'prestamos.estudiantes_id')
            ->join('libros', 'libros.id', '=', 'prestamos.libros_id')
            ->select('prestamos.id','libros.titulo', 'estudiantes.nombre')
        ->get();


        
        return $prestamos;
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
        $prestamo = new Prestamo();
        $prestamo->libros_id = $request->libros_id;
        $prestamo->estudiantes_id = $request->estudiantes_id;

        $prestamo->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prestamo = Prestamo::findOrFail($id);
        return $prestamo;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $prestamo = Estudiante::findOrFail($id);

        $prestamo->libros_id= $request->libros_id;
        $prestamo->estudiantes_id= $request->estudiantes_id;

        $prestamo->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Prestamo::destroy($id);
    }
}
