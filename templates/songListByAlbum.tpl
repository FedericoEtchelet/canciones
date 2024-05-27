{include "htmlStart.tpl"}

<table>
<tr>
    <th>Titulo</th>
</tr>
{$contador = 0}
{foreach    $canciones as $cancion} 
    {$contador = $contador+1}
    <tr>   
    <td>{$cancion->nombre}</td>
    </tr>
{/foreach}   

</table>









{include "htmlEnd.tpl"}