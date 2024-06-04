{include "htmlStartEditar.tpl"}

<div class="songsByAlbum-container">
    <div class="albumCard">
        <img src="../{$album->imagen}" class="album-card-img-top" alt="...">
        <h5 class="card-title">{$album->album}</h5>
        <div class="album-card-body">
            <table class="table table-striped" id="album-table">
                <tr>
                    <th>id</th>
                    <th>Nombre</th>
                    <th>Artista</th>
                    <th>Delete</th>
                    <th>Edit</th>
                </tr>
                {$contador = 0}
                {foreach $canciones as $cancion}
                    {$contador = $contador+1}
                    <tr>
                        <td>{$cancion->id}</td>
                        <td>{$cancion->nombre}</td>
                        <td>{$cancion->artista}</td>
                        <td><a href="../deleteByAlbum/{$cancion->id}"><img class="form-ico" src="../img/src/trash.png"></td>
                        <td><a href="../editar/{$cancion->id}"><img class="form-ico" src="../img/src/edit.png"></td>
                    </tr>
                {/foreach}
                <p class="card-text"><small class="text-body-secondary">Canciones: {$contador}</small></p>
        </div>
    </div>
</div>
<form action="../addSong/{$album->id_album}" method="POST"> {*../ cuidado con esto*}
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Titulo</label>
        <input type="text" class="form-control" name="nombre" placeholder="Ingrese el titulo de la cancion">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Artista</label>
        <input type="text" class="form-control" name="artista" placeholder="Ingrese el nombre del artista">
    </div>
    <button type="submit" class="btn">Agregar</button>
</form>
{include "htmlEnd.tpl"}