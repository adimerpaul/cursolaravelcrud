<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<h3>Lista de personas</h3>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('guardar')}}">
                    @csrf
                    <label >Nombre</label><input type="text" name="nombre"><br>
                    <label >Apellidos</label><input type="text" name="apellidos"><br>
                    <label >Ci</label><input type="text" name="ci"><br>
                    <label >Sexo</label><input type="text" name="sexo"><br>
                    <label >Celular</label><input type="text" name="celular"><br>
                    <input type="submit">
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>



<table border="1">
    <thead>
    <tr>
        <th>Id</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>CI</th>
        <th>Sexo</th>
        <th>Celular</th>
        <th>Opciones</th>
    </tr>
    </thead>
    <tbody>
        @foreach($personas as $persona)
            <tr>
                <td>{{$persona->id}}</td>
                <td>{{$persona->nombre}}</td>
                <td>{{$persona->apellidos}}</td>
                <td>{{$persona->ci}}</td>
                <td>{{$persona->sexo}}</td>
                <td>{{$persona->celular}}</td>
                <td>
                    <a href="{{route('modificar',$persona->id)}}">Modificar</a>
                    <form action="{{route('eliminar',$persona->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>

                </td>
            </tr>
        @endforeach
    </tbody>
</table>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>
