<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SitioController extends Controller
{
    public function Crush($codigo=null)
    {
        if($codigo == "1234")
        {
            $nombre = 'cristian';
            $email ='@udg.mx';
            
        }else{
            $nombre ='';
            $email ='';
            
        }
        
     return view('Contacto', compact('codigo'));

    }

    public function Contacto()
    {
        return view('Contacto');
    }

    public function recibeFormContacto(Request $request)
    {
        $request->validate([
        'nombre' => 'required',
        'Mail' => 'required',
        'Comentario' => 'required',
        ]);
        
    }

    public function landingpage()
    {
        return view('landingpage');
    }
}

