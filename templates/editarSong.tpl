{include "htmlStartEditar.tpl"}

<div class="containerDiv">
    <form action="../finalizarEdit/{$cancion->id}" method="POST">
    <h2 class="h2Form">Editar Cancion</h2>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nombre De La Cancion</label>
    <input type="text" class="form-control" name="nombre" placeholder="Ingrese El Nombre De La Cancion">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ingrese El Artista</label>
    <input type="text" class="form-control" name="artista" placeholder="Ingrese El Artista">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Ingrese El Id Del Album</label>
    <input type="text" class="form-control" name="id_album" placeholder="Ingrese El Id">
  </div>
  <div class="mb-3 form-check">

  <button type="submit" class="btn">Finalizar</button>
</form>
</div>


{include "htmlEnd.tpl"}