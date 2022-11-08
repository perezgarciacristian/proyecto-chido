<!DOCTYPE html >
<html lang="es">
  <head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>Contacto</title>
  </head>
  <body>
  {{$nombre}}
   <form action="/recibe-form-Contacto" method="POST">
    @csrf
    
    <label for="nombre">Nombre:</label><br>
    <input type="text"  name="nombre"  Value="{{old('nombre')}}">
    @error('nombre')
        <i>{{ $message }}</i>
    @enderror
    </br>

    <label for="Mail">Mail:</label><br>
    <input type="email"  name="Mail" Value="{{$email}}"> 
    @error('Mail')
        <i>{{ $message }}</i>
    @enderror
    
    </br>
    <label for="Comentario">Comentario:</label><br>
    <textarea name="Comentario" rows="10"cols="50">
    </textarea>
    @error('Comentario')
        <i>{{ $message }}</i>
    @enderror
   
    </br>

  <input type='submit'  value='Enviar'>  
</form>
  
  </body>
</html>