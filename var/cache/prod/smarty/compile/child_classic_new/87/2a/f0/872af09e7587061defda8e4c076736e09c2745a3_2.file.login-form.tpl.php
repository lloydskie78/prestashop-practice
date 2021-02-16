<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-16 09:28:09
  from 'C:\xampp\htdocs\ps\themes\child_classic_new\templates\customer\_partials\login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602b1fa9072018_79602025',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '872af09e7587061defda8e4c076736e09c2745a3' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ps\\themes\\child_classic_new\\templates\\customer\\_partials\\login-form.tpl',
      1 => 1587958804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/form-errors.tpl' => 1,
  ),
),false)) {
function content_602b1fa9072018_79602025 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1584576146602b1fa906c6d4_37012568', 'login_form');
?>

<?php }
/* {block 'login_form_errors'} */
class Block_708654286602b1fa906cb52_88502170 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:_partials/form-errors.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('errors'=>$_smarty_tpl->tpl_vars['errors']->value['']), 0, false);
?>
  <?php
}
}
/* {/block 'login_form_errors'} */
/* {block 'login_form_actionurl'} */
class Block_1896999551602b1fa906d8b9_79421775 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'login_form_actionurl'} */
/* {block 'form_field'} */
class Block_1163798861602b1fa906e886_34451965 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['form_field'][0], array( array('field'=>$_smarty_tpl->tpl_vars['field']->value),$_smarty_tpl ) );?>

          <?php
}
}
/* {/block 'form_field'} */
/* {block 'login_form_fields'} */
class Block_1660958573602b1fa906dee9_89895355 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['formFields']->value, 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1163798861602b1fa906e886_34451965', 'form_field', $this->tplIndex);
?>

        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      <?php
}
}
/* {/block 'login_form_fields'} */
/* {block 'form_buttons'} */
class Block_1957555128602b1fa9071452_08287664 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <button id="submit-login" class="btn btn-primary" data-link-action="sign-in" type="submit" class="form-control-submit">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        <?php
}
}
/* {/block 'form_buttons'} */
/* {block 'login_form_footer'} */
class Block_754897855602b1fa9071146_56503692 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="form-footer text-sm-center clearfix">
        <input type="hidden" name="submitLogin" value="1">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1957555128602b1fa9071452_08287664', 'form_buttons', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'login_form_footer'} */
/* {block 'login_form'} */
class Block_1584576146602b1fa906c6d4_37012568 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form' => 
  array (
    0 => 'Block_1584576146602b1fa906c6d4_37012568',
  ),
  'login_form_errors' => 
  array (
    0 => 'Block_708654286602b1fa906cb52_88502170',
  ),
  'login_form_actionurl' => 
  array (
    0 => 'Block_1896999551602b1fa906d8b9_79421775',
  ),
  'login_form_fields' => 
  array (
    0 => 'Block_1660958573602b1fa906dee9_89895355',
  ),
  'form_field' => 
  array (
    0 => 'Block_1163798861602b1fa906e886_34451965',
  ),
  'login_form_footer' => 
  array (
    0 => 'Block_754897855602b1fa9071146_56503692',
  ),
  'form_buttons' => 
  array (
    0 => 'Block_1957555128602b1fa9071452_08287664',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_708654286602b1fa906cb52_88502170', 'login_form_errors', $this->tplIndex);
?>


  <form id="login-form" action="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1896999551602b1fa906d8b9_79421775', 'login_form_actionurl', $this->tplIndex);
?>
" method="post">

    <section>
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1660958573602b1fa906dee9_89895355', 'login_form_fields', $this->tplIndex);
?>

      <div class="forgot-password">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['password'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Forgot your password?','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

        </a>
      </div>
    </section>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_754897855602b1fa9071146_56503692', 'login_form_footer', $this->tplIndex);
?>


  </form>
<?php
}
}
/* {/block 'login_form'} */
}
