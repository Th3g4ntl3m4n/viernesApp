<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;

class ContactoController extends Controller
{


    public function formContact(request $request){

         // validar si existe el usuario
        // $user = User::find($request->email);

         //if ya existe entonces no lo registro y le muestro un msj que revise el correo porque ya existe 
        //$type = 1;
             
       /* $request->validate([    
            'name' => 'required',        
            'phone' => 'required',
            'contry' => 'required',
            'email' => 'required',                      
        ]);  */  

        $user = new Contacto();  
        $user->nombre = $request ->nombre;     
        $user->celular = $request ->celular;
        $user->email = $request ->email;
        $user->servicios = $request ->servicios;
        $user->observaciones = $request ->observaciones;
        $user->save();

         // Redirigir a la página de lista de contactos con un mensaje de éxito
         return redirect()->route('contacto')->with('success', '¡Tu mensaje ha sido enviado con éxito!');

    }
    // Método para mostrar el formulario de contacto
    public function create()
    {
        return view('contacto');  // Devuelve la vista con el formulario
   
       
    }

    // Método para mostrar la lista de contactos enviados
    public function index()
    {
        // Obtener todos los registros de contacto desde la base de datos
        $contactos = Contacto::all();

        // Pasar los datos de contacto a la vista
        return view('contactos.index', compact('contactos'));
    }
}
