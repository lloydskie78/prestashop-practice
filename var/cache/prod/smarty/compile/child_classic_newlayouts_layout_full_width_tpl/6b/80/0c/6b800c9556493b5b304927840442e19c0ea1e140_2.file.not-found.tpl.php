<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-16 10:10:36
  from 'C:\xampp\htdocs\ps\themes\child_classic_new\templates\errors\not-found.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602b299cd725d2_04417268',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b800c9556493b5b304927840442e19c0ea1e140' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ps\\themes\\child_classic_new\\templates\\errors\\not-found.tpl',
      1 => 1587958804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602b299cd725d2_04417268 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<section id="content" class="page-content page-not-found">
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_139559589602b299cd707a1_58925678', 'page_content');
?>

</section>
<?php }
/* {block 'search'} */
class Block_1910292677602b299cd71468_15476324 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displaySearch'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'search'} */
/* {block 'hook_not_found'} */
class Block_943763690602b299cd71cc1_65750067 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNotFound'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'hook_not_found'} */
/* {block 'page_content'} */
class Block_139559589602b299cd707a1_58925678 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_139559589602b299cd707a1_58925678',
  ),
  'search' => 
  array (
    0 => 'Block_1910292677602b299cd71468_15476324',
  ),
  'hook_not_found' => 
  array (
    0 => 'Block_943763690602b299cd71cc1_65750067',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <h4><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sorry for the inconvenience.','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</h4>
    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search again what you are looking for','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</p>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1910292677602b299cd71468_15476324', 'search', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_943763690602b299cd71cc1_65750067', 'hook_not_found', $this->tplIndex);
?>


  <?php
}
}
/* {/block 'page_content'} */
}
