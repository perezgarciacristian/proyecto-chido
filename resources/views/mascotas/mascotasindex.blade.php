<!DOCTYPE html>
<html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Listado de Animales </title>
 </head>

 <body>
    <h1>Listado de Animales</h1>
    <table>
         <tr>
              <th>Nombre</th>
              <th>Edad</th>
              <th>Genero</th>
         </tr>
 
         @foreach ($mascotas as $mascota)
         <tr>
           <td>{{$mascota->Nombre}}</td>
           <td>{{$mascota->Edad}}</td>
           <td>{{$mascota->Genero}}</td>
           <td><a href="/mascotas/{{ $mascota->id }}/edit">Editar</a></td>


         <td>
          <form action="/mascotas/{{ $mascota->id }}" method="POST">
          @csrf
          @method('DELETE')
          <input type= "Submit" value= "Eliminar">
          
          </form>
          </td>
          </tr>
         @endforeach
            
         

         </td>
    </table>

 </body>

</html>