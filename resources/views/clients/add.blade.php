<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/131163/isolated/lists/751175c268ea1f69854ff67fb93ee1a2-icono-de-circulo-de-martillo-de-juez.png">
    <title>Bufete de abogados - Añadir</title>
  </head>

  <body class="backg-color">
      <h1 class="title center my-2">Añadir Cliente</h1>
      <div class="container text center">
        <form action="{{route('store-c')}}" method="POST">
            @csrf
            <label for="name">Agregar nombre</label>
            <br>
            <input type="text" name="name" id="name" class="form-control w-50 mx-auto" required>
            <label for="lastname">Agregar apellido</label>
            <br>
            <input type="text" name="lastname" id="lastname" class="form-control w-50 mx-auto" required>
            <label for="dui">Agregar DUI</label>
            <br>
            <input type="text" name="dui" id="dui" class="form-control w-50 mx-auto" required maxlength="10">
            <label for="nit">Agregar NIT</label>
            <br>
            <input type="text" name="nit" id="nit" class="form-control w-50 mx-auto" required maxlength="17">
            <label for="address">Agregar dirección</label>
            <br>
            <input type="text" name="address" id="address" class="form-control w-50 mx-auto">
            <label for="telephone">Agregar teléfono</label>
            <br>
            <input type="text" name="telephone" id="telephone" class="form-control w-50 mx-auto">
            <label for="cellphone">Agregar Celular</label>
            <br>
            <input type="text" name="cellphone" id="cellphone" class="form-control w-50 mx-auto" required>
            <label for="notes">Agregar Notas</label>
            <br>
            <input type="text" name="notes" id="notes" class="form-control w-50 mx-auto" required>
            
            <button class="btn btn-primary mt-2">
                Agregar
            </button>
        </form>
      </div>
  </body>
</html>