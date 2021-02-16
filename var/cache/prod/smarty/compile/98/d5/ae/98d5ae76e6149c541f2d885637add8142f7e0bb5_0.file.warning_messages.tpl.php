<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-16 13:17:19
  from 'C:\xampp\htdocs\ps\admin499nsvb7w\themes\new-theme\template\components\layout\warning_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602b555fb87026_72279427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98d5ae76e6149c541f2d885637add8142f7e0bb5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ps\\admin499nsvb7w\\themes\\new-theme\\template\\components\\layout\\warning_messages.tpl',
      1 => 1606893182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602b555fb87026_72279427 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['warnings']->value)) {?>
  <div class="bootstrap">
    <div class="alert alert-warning">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <?php if (count($_smarty_tpl->tpl_vars['warnings']->value) > 1) {?>
        <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There are %d warnings.','sprintf'=>array(count($_smarty_tpl->tpl_vars['warnings']->value)),'d'=>'Admin.Notifications.Error'),$_smarty_tpl ) );?>
</h4>
      <?php }?>
      <ul class="list-unstyled">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['warnings']->value, 'warning');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['warning']->value) {
?>
          <li><?php echo $_smarty_tpl->tpl_vars['warning']->value;?>
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
