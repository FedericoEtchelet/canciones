{include "htmlStartEditar.tpl"}

<div class="containerDiv">
  <form action="../finalizarEditAlbum/{$album->id_album}" method="POST">
    <h2 class="h2Form">Editar Album</h2>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Nombre Del Album</label>
      <input type="text" class="form-control" name="nombre" placeholder="Ingrese el titulo del album">
    </div>
    <button type="submit" class="btn">Finalizar</button>
  </form>
</div>


{include "htmlEnd.tpl"}