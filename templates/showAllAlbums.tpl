{include 'htmlStart.tpl'}

<div class="containerH2">
  <h2 class="h2AllSongs">ALL ALBUMS</h2>
</div>
<div class="containerDiv">
  <div class="card-group">
    {foreach $albums as $album}

      <div class="card" id="album-card">
        <img src="./{$album->imagen}" class="card-img-top" alt="imagenDeAlbum">
        <div class="card-body">
          <h5 class="card-title"><a class="cardAlbumTitle" href="album/{$album->id_album}">{$album->album}</h5>
        </div>
      </div>

    {/foreach}
  </div>
</div>

{include 'htmlEnd.tpl'}