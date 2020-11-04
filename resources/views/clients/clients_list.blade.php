<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="css/styles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="https://images.vexels.com/media/users/3/131163/isolated/lists/751175c268ea1f69854ff67fb93ee1a2-icono-de-circulo-de-martillo-de-juez.png">
    <title>Bufete de abogados - Clientes</title>
  </head>

  <body class="backg-color">
      <button class="btn">
          <a href="/" class="title">
              Inicio
          </a>
      </button>
      <div class="container my-2">
          <h1 class="title center">Listado de cliente</h1>
              @foreach ($clients as $client)
                  <div @if ($client->status=='active')
                      class="active my-1 row"
                      @else
                        class="no-active my-1 row"
                  @endif>
                  <div class="col-3">
                      <h6>Nombre:</h6> {{$client->name}} {{$client->lastname}}
                      <h6>DUI: </h6> {{$client->dui}}
                      <h6>NIT: </h6> {{$client->nit}}
                      <h6>Dirección:</h6> {{$client->address}}
                  </div>
                  <div class="col-3">
                    <h6>Teléfono:</h6>
                        @if (is_null($client->telephone))
                            No disponible
                        @else
                            {{$client->telephone}}
                        @endif
                        <h6>Celular:</h6>
                        @if (is_null($client->cellphone))
                            No disponible
                        @else
                            {{$client->cellphone}}
                        @endif
                            <h6>Estado:</h6>
                        @if ($client->status=='active')
                          Activo
                        @else
                          Inactivo
                        @endif
                  </div>
                  <div class="col-4">
                      <h6>Notas:</h6>
                      <p>{{$client->notes}}</p>
                  </div>
                  <div class="col-2 align-self-center">
                      <div>
                          <form action="delete/{{$client->id}}" method="POST">
                            @csrf
                              <button>
                                  <img src="https://image.flaticon.com/icons/png/512/61/61848.png" width="20" alt="">
                              </button>
                          </form>
                      </div>
                      <div>
                          <a href="edit-form/{{$client->id}}">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Edit_icon_%28the_Noun_Project_30184%29.svg/1024px-Edit_icon_%28the_Noun_Project_30184%29.svg.png" width="35" alt="Editar">
                          </a>
                      </div>
                  </div>
                  </div>
              @endforeach
      </div>
      <div>
          <button>
              <a href="{{route('create-client')}}">
                  Agregar cliente
              </a>
          </button>
      </div>
  </body>
</html>