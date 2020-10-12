<?php
/* Smarty version 3.1.34-dev-7, created on 2020-09-30 11:06:28
  from 'C:\XAMPP\htdocs\Serenity\app\views\browseAlbums.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f744a94950f52_18720710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8ecec00f101dae5e6223f8c71d7009470749a874' => 
    array (
      0 => 'C:\\XAMPP\\htdocs\\Serenity\\app\\views\\browseAlbums.tpl',
      1 => 1601416370,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f744a94950f52_18720710 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9783953915f744a948e53a9_11627844', 'header');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11449417695f744a948edfe7_31435666', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "main.tpl");
}
/* {block 'header'} */
class Block_9783953915f744a948e53a9_11627844 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_9783953915f744a948e53a9_11627844',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 serenity. browse albums<?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_11449417695f744a948edfe7_31435666 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11449417695f744a948edfe7_31435666',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 
    <br/><h1> Browse Albums</h1>
    <button class="btn btn-sm btn-outline-secondary" type="button" style="margin-top: 2em; margin-bottom: 2em;">Add New</button>
    <table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Album Name</th>
      <th scope="col">Album Genre</th>
      <th scope="col">Album Description</th>
      <th scope="col">Album Release</th>
      <th scope="col">Cover</th>
      <th scope="col">Label</th>
      <th scope="col">Band</th>      
      <th scope ="col">Action</th>
    </tr>
  </thead>
  <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['album']->value, 'row');
$_smarty_tpl->tpl_vars['row']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->do_else = false;
?>
                <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["idAlbum"];?>
</td> 
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["AlbumName"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["AlbumGenre"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["AlbumDescription"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["AlbumReleaseDate"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["AlbumCoverPath"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["LabelName"];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['row']->value["BandName"];?>
</td>
                
                <td> 
                    <button class="btn btn-sm btn-outline-secondary" style="background-color: #ffefed;"type="button">comments</button>
                </td>
   
                </tr>            
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>            
            </tbody>
</table>
<?php
}
}
/* {/block 'content'} */
}
