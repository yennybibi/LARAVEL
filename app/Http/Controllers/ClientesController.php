<?php

namespace App\Http\Controllers;

use App\Models\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        //consulta informacion de la base de datos
        $datosClientes['Clientes'] = Clientes::paginate(5);
             //usando rutas
             return view('Clientes.index', $datosClientes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //usando rutas
        return view('Clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    
    //agregando los campos para validacion
    $campos = [
        'nombre' => 'required|string|max:100',
        'apellido' => 'required|string|max:100',
        'cedula' => 'required|numeric',
        'departamento' => 'required',
        'ciudad' => 'required',
        'celular' => 'required|numeric',
        'correo_electronico' => 'required|email',
        'habeas_data' => 'required',
    ];
    
    $request->validate($campos);
    
   //mensaje por cada uno de los campos
  $mensaje =[
     'required' => 'El atribute es requirido',
     'required' => 'El atribute es requirido',
     'required' => 'El atribute es requirido',
     'required' => 'El atribute es requirido',
     'required' => 'El atribute es requirido',
     'required' => 'El atribute es requirido',
     'required' => 'El atribute es requirido',
  ];

  //uniendo campos y mensajes
      $this->validate($request, $campos, $mensaje);

    // Información recibida
    //$datosClientes = request()->all();*/
    
    // Quitando el token
    $datosClientes = request()->except('_token');
    
    // Obtén el valor del campo "habeas_data" del formulario
$habeasData = $request->has('habeas_data') ? 1 : 0;

// Quita el campo "habeas_data" de los datos del formulario
$datosClientes = $request->except(['_token', 'habeas_data']);

// Agrega el valor de "habeas_data" al array de datos del cliente
$datosClientes['habeas_data'] = $habeasData;

    
    // Insertar en la base de datos
    Clientes::create($datosClientes);
    
    // Retornar datos como respuesta JSON
   // return response()->json($datosClientes);
    return redirect('Clientes')->with('mensaje', 'Cliente agregado con exito');
}

    

    /**
     * Display the specified resource.
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {

        //buscando informacion por id
        $cliente = Clientes::findOrFail($id);

        return view('Clientes.edit', compact('cliente'));

       
    }

    /**
     * Update the specified resource in storage.
     */

     public function update(Request $request, $id)
{
    $datosClientes = request()->except(['_token', '_method']);

    // Verificar el valor de la casilla de verificación
    $habeasData = isset($datosClientes['habeas_data']) ? true : false;

    // Asignar el valor apropiado para el campo habeas_data
    $datosClientes['habeas_data'] = $habeasData;

    // Actualizar el registro en la base de datos
    Clientes::where('id', $id)->update($datosClientes);

    // Buscar la información actualizada
    $cliente = Clientes::findOrFail($id);

    return view('Clientes.edit', compact('cliente'));
}

  

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {

        //$Clientes = Clientes::find($id);

        Clientes::destroy($id);

        //rediccionado
        return redirect('Clientes')->with('mensaje', 'Cliente agregado con exito');   
    }
}
