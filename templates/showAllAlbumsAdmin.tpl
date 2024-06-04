{include 'htmlStart.tpl'}


<div class="containerH2">
  <h2 class="h2AllSongs">ALL ALBUMS</h2>
</div>
<div class="containerDiv">
  {foreach $albums as $album}
    <div class="card-group">
      <div class="card">
        <img src="./{$album->imagen}" class="card-img-top" alt="imagenDeAlbum">
        <div class="card-body">
          <h5 class="card-title"><a class="cardAlbumTitle" href="album/{$album->id_album}">{$album->album}</h5>
          <a href="editAlbum/{$album->id_album}"><img class="form-ico" src="./img/src/edit.png"></a>
          <a class="imagenA" href="deleteAllSongs/{$album->id_album}"><img class="form-ico" src="./img/src/trash.png"></a>
        </div>
      </div>
    </div>
  {/foreach}
</div>
{include 'htmlEnd.tpl'}