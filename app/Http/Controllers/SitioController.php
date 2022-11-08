<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
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
        
     return view('Contacto', compact('nombre','email'));

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
        
       /*dd($request->all());*/
       DB::table('contactos')->insert($request->except('_token'));

       return redirect('/Contacto');
    
    }

    public function landingpage()
    {
        return view('landingpage');
    }

   


}

