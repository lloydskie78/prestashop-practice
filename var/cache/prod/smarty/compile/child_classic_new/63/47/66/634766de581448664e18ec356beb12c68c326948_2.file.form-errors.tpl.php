<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-16 09:28:09
  from 'C:\xampp\htdocs\ps\themes\child_classic_new\templates\_partials\form-errors.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602b1fa9129d96_06549376',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '634766de581448664e18ec356beb12c68c326948' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ps\\themes\\child_classic_new\\templates\\_partials\\form-errors.tpl',
      1 => 1587958804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602b1fa9129d96_06549376 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (count($_smarty_tpl->tpl_vars['errors']->value)) {?>
  <div class="help-block">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_250990485602b1fa9127c89_96611105', 'form_errors');
?>

  </div>
<?php }
}
/* {block 'form_errors'} */
class Block_250990485602b1fa9127c89_96611105 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_errors' => 
  array (
    0 => 'Block_250990485602b1fa9127c89_96611105',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['errors']->value, 'error');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['error']->value) {
?>
          <li class="alert alert-danger"><?php echo nl2br($_smarty_tpl->tpl_vars['error']->value);?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    <?php
}
}
/* {/block 'form_errors'} */
}
