<?php

namespace App\Http\Controllers;

use App\Models\Empleado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['empleados']=Empleado::paginate(10);
        return view('empleado.index', $datos);
    }

   
    public function create()
    {
        return view('empleado.create');
    }

    
    public function store(Request $request)
    {
        $campos = [
            'p_nombre_usuario' => 'required|string|max:10',
            's_nombre_usuario' => 'required|string|max:10',
            'p_apellido_usuario' => 'required|string|max:10',
            's_apellido_usuario' => 'required|string|max:10',
            'email_usuarios' => 'required|email|unique:empleados,email_usuarios',
            'password_usuarios' => 'required|string|min:8',
            'tipo_usuario' => 'required|string|max:10',
            'telefono' => 'required|string|max:10'
        ];
    
        $mensaje = [
            'required' => 'El :attribute es requerido',
            'email_usuarios.unique' => 'Este correo ya está registrado.'
        ];
    
        $this->validate($request, $campos, $mensaje);
    
        $datosEmpleado = $request->except('_token');
    
        // Encriptar la contraseña antes de guardar
        $datosEmpleado['password_usuarios'] = Hash::make($request->password_usuarios);
    
        Empleado::insert($datosEmpleado);
    
        return redirect('empleado')->with('mensaje', 'Empleado agregado con éxito');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function show(Empleado $empleado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $empleado=Empleado::findOrFail($id);
        return view('empleado.edit', compact('empleado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos = [
            'p_nombre_usuario' => 'required|string|max:10',
            's_nombre_usuario' => 'required|string|max:10',
            'p_apellido_usuario' => 'required|string|max:10',
            's_apellido_usuario' => 'required|string|max:10',
            'email_usuarios' => 'required|email',
            'tipo_usuario' => 'required|string|max:10',
            'telefono' => 'required|string|max:10'
        ];
    
        $mensaje = [
            'required' => 'El :attribute es requerido'
        ];
    
        // Validar solo si viene la contraseña
        if ($request->filled('password_usuarios')) {
            $campos['password_usuarios'] = 'required|string|min:8';
        }
    
        $this->validate($request, $campos, $mensaje);
    
        $datosEmpleado = request()->except(['_token','_method']);
    
        // Encriptar la contraseña si se envio
        if (!empty($request->password_usuarios)) {
            $datosEmpleado['password_usuarios'] = Hash::make($request->password_usuarios);
        } else {
            unset($datosEmpleado['password_usuarios']); // No actualizarla si viene vacía
        }
    
        Empleado::where('id','=',$id)->update($datosEmpleado);
    
        return redirect('empleado')->with('mensaje', 'Empleado modificado con exito');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Empleado  $empleado
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Empleado::destroy($id);
       // return redirect('empleado');
       return redirect('empleado')->with('mensaje', 'Empleado eliminado con éxito');

    }
}
