{include 'htmlStart.tpl'}
<div class="containerDiv">
    <form action="insertAlbum" method="POST" enctype="multipart/form-data">
        <h2 class="h2Form">Agregar album</h2>
        <div class="mb-3">
            <label class="form-label">Titulo</label>
            <input type="text" class="form-control" name="album_name" placeholder="Ingrese el nombre del album">
        </div>
        <div class="mb-3">
            <label for="file-upload" class="custom-file-upload">
                <i class="fa fa-cloud-upload"></i> Agregar imagen
            </label>
            <input id="file-upload" name="imagen" type="file" />
        </div>
        <div class="mb-3 form-check">
        </div>
        <button class="btn" type="submit">Agregar album</button>
    </form>
</div>

{include 'htmlEnd.tpl'}