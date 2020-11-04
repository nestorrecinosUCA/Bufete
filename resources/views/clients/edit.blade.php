<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="/css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/131163/isolated/lists/751175c268ea1f69854ff67fb93ee1a2-icono-de-circulo-de-martillo-de-juez.png">
    <title>Bufete de abogados</title>
  </head>

  <body class="backg-color">
    @foreach ($client as $c)
    <h1 class="title center my-2">Editar a {{$c->name}} {{$c->lastname}}</h1>
    <div class="container text center">
      <form action="{{route('store-c')}}" method="POST">
          @csrf
          <label for="name">Actualizar nombre</label>
          <br>
          <input type="text" name="name" id="name" class="form-control w-50 mx-auto" required value="{{$c->name}}">
          <label for="lastname">Actualizar apellido</label>
          <br>
          <input type="text" name="lastname" id="lastname" class="form-control w-50 mx-auto" required value="{{$c->lastname}}">
          <label for="dui">Actualizar DUI</label>
          <br>
          <input type="text" name="dui" id="dui" class="form-control w-50 mx-auto" required maxlength="10" value="{{$c->dui}}">
          <label for="nit">Actualizar NIT</label>
          <br>
          <input type="text" name="nit" id="nit" class="form-control w-50 mx-auto" required maxlength="17" value="{{$c->nit}}">
          <label for="address">Actualizar dirección</label>
          <br>
          <input type="text" name="address" id="address" class="form-control w-50 mx-auto" value="{{$c->address}}">
          <label for="telephone">Actualizar teléfono</label>
          <br>
          <input type="text" name="telephone" id="telephone" class="form-control w-50 mx-auto" value="{{$c->telephone}}">
          <label for="cellphone">Actualizar Celular</label>
          <br>
          <input type="text" name="cellphone" id="cellphone" class="form-control w-50 mx-auto" required value="{{$c->cellphone}}">
          <label for="notes">Actualizar Notas</label>
          <br>
          <input type="text" name="notes" id="notes" class="form-control w-50 mx-auto" required value="{{$c->notes}}">
          
          <button class="btn btn-primary mt-2">
              Actualizar
          </button>
      </form>
    </div>
    @endforeach
  </body>
</html>