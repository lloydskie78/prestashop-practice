<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-16 13:17:19
  from 'C:\xampp\htdocs\ps\admin499nsvb7w\themes\new-theme\template\components\layout\information_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602b555facadc0_13028116',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd41e2675a5e0b7e966bf9ff1f37a63793a61c0b2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ps\\admin499nsvb7w\\themes\\new-theme\\template\\components\\layout\\information_messages.tpl',
      1 => 1606893182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602b555facadc0_13028116 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['informations']->value) && count($_smarty_tpl->tpl_vars['informations']->value) && $_smarty_tpl->tpl_vars['informations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-info">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <ul id="infos_block" class="list-unstyled">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['informations']->value, 'info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
?>
          <li><?php echo $_smarty_tpl->tpl_vars['info']->value;?>
</li>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </ul>
    </div>
  </div>
<?php }
}
}
