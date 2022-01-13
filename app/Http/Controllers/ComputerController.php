<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use Illuminate\Support\Facades\DB;

class ComputerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        /*$computers = DB::table('computers')->paginate(30);
        return view('computadores.index')->with('computers', $computers);
        */
        $computers = Computer::all();
        return view('computadores.index')->with('computers', $computers);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('computadores.create');

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
        $computer = new Computer();
        $computer->oficina = $request->get('oficina');
        $computer->responsable= $request->get('responsable');
        $computer->fecha= $request->get('fecha');
        $computer->marca = $request->get('marca');
        $computer->modelo = $request->get('modelo');
        $computer->ram = $request->get('ram');
        $computer->almacenamiento = $request->get('almacenamiento');
        $computer->so = $request->get('so');
        $computer->comentarios = $request->get('comentarios');
        $computer->tipo_uso= $request->get('tipo_uso');
        $computer->save();
        return redirect('computers');
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
        //
        return view('computadores.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
