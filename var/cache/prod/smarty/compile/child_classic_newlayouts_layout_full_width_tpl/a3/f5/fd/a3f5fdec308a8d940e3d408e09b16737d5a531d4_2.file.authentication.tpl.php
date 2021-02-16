<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-16 09:28:08
  from 'C:\xampp\htdocs\ps\themes\child_classic_new\templates\customer\authentication.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602b1fa817ce19_43615141',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3f5fdec308a8d940e3d408e09b16737d5a531d4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ps\\themes\\child_classic_new\\templates\\customer\\authentication.tpl',
      1 => 1587958804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602b1fa817ce19_43615141 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_738832881602b1fa8174e78_91141258', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1525057426602b1fa81777d9_82227038', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_title'} */
class Block_738832881602b1fa8174e78_91141258 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_738832881602b1fa8174e78_91141258',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Log in to your account','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'display_after_login_form'} */
class Block_105598266602b1fa8179922_14823069 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCustomerLoginFormAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'display_after_login_form'} */
/* {block 'login_form_container'} */
class Block_1403250661602b1fa8177b05_00435198 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section class="login-form">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'customer/_partials/login-form.tpl','ui'=>$_smarty_tpl->tpl_vars['login_form']->value),$_smarty_tpl ) );?>

      </section>
      <hr/>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_105598266602b1fa8179922_14823069', 'display_after_login_form', $this->tplIndex);
?>

      <div class="no-account">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['register'], ENT_QUOTES, 'UTF-8');?>
" data-link-action="display-register-form">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No account? Create one here','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

        </a>
      </div>
    <?php
}
}
/* {/block 'login_form_container'} */
/* {block 'page_content'} */
class Block_1525057426602b1fa81777d9_82227038 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_1525057426602b1fa81777d9_82227038',
  ),
  'login_form_container' => 
  array (
    0 => 'Block_1403250661602b1fa8177b05_00435198',
  ),
  'display_after_login_form' => 
  array (
    0 => 'Block_105598266602b1fa8179922_14823069',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1403250661602b1fa8177b05_00435198', 'login_form_container', $this->tplIndex);
?>

<?php
}
}
/* {/block 'page_content'} */
}
