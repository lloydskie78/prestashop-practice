<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-16 09:36:09
  from 'C:\xampp\htdocs\ps\themes\child_classic_new\templates\catalog\listing\category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602b2189a93513_09088188',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d7210a06bf3ecbe02f686f0432a599884160985' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ps\\themes\\child_classic_new\\templates\\catalog\\listing\\category.tpl',
      1 => 1587958804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/category-header.tpl' => 1,
  ),
),false)) {
function content_602b2189a93513_09088188 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17121251602b2189a90a06_72305677', 'product_list_header');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'product_list_header'} */
class Block_17121251602b2189a90a06_72305677 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_17121251602b2189a90a06_72305677',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value), 0, false);
}
}
/* {/block 'product_list_header'} */
}
