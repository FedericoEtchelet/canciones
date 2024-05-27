{include "htmlStart.tpl"}

<table>
<tr>
    <th>id</th>
    <th>Nombre</th>
    <th>Artista</th>
    <th>id Album</th>
</tr>
{$contador = 0}
{foreach    $canciones as $cancion} 
    {$contador = $contador+1}
    <tr>   
    <td>{$cancion->id}</td>
    <td>{$cancion->nombre}</td>
    <td>{$cancion->artista}</td>
    <td>{$cancion->id_album}</td>
    </tr>
{/foreach}   

</table>









{include "htmlEnd.tpl"}