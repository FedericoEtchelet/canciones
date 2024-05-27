<?php
/* Smarty version 4.5.2, created on 2024-05-27 22:04:18
  from 'D:\xampp\htdocs\web\TPESPECIAL\templates\songList.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.2',
  'unifunc' => 'content_6654e742aac593_67302433',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f11fcf629e7c23c5b56a2bfb921934c74e443f54' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web\\TPESPECIAL\\templates\\songList.tpl',
      1 => 1716840257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:htmlStart.tpl' => 1,
    'file:htmlEnd.tpl' => 1,
  ),
),false)) {
function content_6654e742aac593_67302433 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:htmlStart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<table>
<tr>
    <th>id</th>
    <th>Nombre</th>
    <th>Artista</th>
    <th>id Album</th>
</tr>
<?php $_smarty_tpl->_assignInScope('contador', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['canciones']->value, 'cancion');
$_smarty_tpl->tpl_vars['cancion']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cancion']->value) {
$_smarty_tpl->tpl_vars['cancion']->do_else = false;
?> 
    <?php $_smarty_tpl->_assignInScope('contador', $_smarty_tpl->tpl_vars['contador']->value+1);?>
    <tr>   
    <td><?php echo $_smarty_tpl->tpl_vars['cancion']->value->id;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['cancion']->value->nombre;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['cancion']->value->artista;?>
</td>
    <td><?php echo $_smarty_tpl->tpl_vars['cancion']->value->id_album;?>
</td>
    </tr>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>   

</table>









<?php $_smarty_tpl->_subTemplateRender("file:htmlEnd.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
