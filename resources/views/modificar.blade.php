<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form method="post" action="{{route('update',$persona->id)}}">
    @csrf
    @method('PUT')
    <label >Nombre</label><input type="text" name="nombre" value="{{$persona->nombre}}"><br>
    <label >Apellidos</label><input type="text" name="apellidos" value="{{$persona->apellidos}}"><br>
    <label >Ci</label><input type="text" name="ci" value="{{$persona->ci}}"><br>
    <label >Sexo</label><input type="text" name="sexo" value="{{$persona->sexo}}"><br>
    <label >Celular</label><input type="text" name="celular" value="{{$persona->celular}}"><br>
    <input type="submit">
</form>
</body>
</html>
