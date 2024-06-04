{include "htmlStart.tpl"}
<div class="containerH2">
<h2 class="h2AllSongs">ALL SONGS</h2>
</div>
<div class="containerDiv">

<table class="table  table-striped">
<tr>
    <th>id</th>
    <th>Nombre</th>
    <th>Artista</th>
    <th>id Album</th>
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
        <td>{$cancion->id_album}</td>
        <td><a href="delete/{$cancion->id}"><img class="form-ico" src="./img/src/trash.png"></td>
        <td><a href="editar/{$cancion->id}"><img class="form-ico" src="./img/src/edit.png"></td>
    </tr>
{/foreach}
</table>
</div>

{include "htmlEnd.tpl"}