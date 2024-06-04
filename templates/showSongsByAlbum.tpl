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
                </tr>
                {$contador = 0}
                {foreach $canciones as $cancion}
                    {$contador = $contador+1}
                    <tr>
                        <td>{$cancion->id}</td>
                        <td>{$cancion->nombre}</td>
                        <td>{$cancion->artista}</td>
                    </tr>
                {/foreach}
                <p class="card-text"><small class="text-body-secondary">Canciones: {$contador}</small></p>
        </div>
    </div>
</div>
{include "htmlEnd.tpl"}