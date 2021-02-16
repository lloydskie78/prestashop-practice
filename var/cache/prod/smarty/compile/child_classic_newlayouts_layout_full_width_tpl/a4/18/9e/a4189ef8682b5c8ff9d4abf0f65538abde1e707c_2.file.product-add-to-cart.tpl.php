<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-16 09:23:45
  from 'C:\xampp\htdocs\ps\themes\child_classic_new\templates\catalog\_partials\product-add-to-cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602b1ea122e425_92085792',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a4189ef8682b5c8ff9d4abf0f65538abde1e707c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ps\\themes\\child_classic_new\\templates\\catalog\\_partials\\product-add-to-cart.tpl',
      1 => 1587958804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602b1ea122e425_92085792 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="product-add-to-cart">
  <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
    <span class="control-label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_363410251602b1ea1227c94_38926076', 'product_quantity');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1358190395602b1ea122a5b3_10101519', 'product_availability');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1731449511602b1ea122cff2_82686509', 'product_minimal_quantity');
?>

  <?php }?>
</div>
<?php }
/* {block 'product_quantity'} */
class Block_363410251602b1ea1227c94_38926076 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantity' => 
  array (
    0 => 'Block_363410251602b1ea1227c94_38926076',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div class="product-quantity clearfix">
        <div class="qty">
          <input
            type="number"
            name="qty"
            id="quantity_wanted"
            value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_wanted'], ENT_QUOTES, 'UTF-8');?>
"
            class="input-group"
            min="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'], ENT_QUOTES, 'UTF-8');?>
"
            aria-label="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quantity','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
          >
        </div>

        <div class="add">
          <button
            class="btn btn-primary add-to-cart"
            data-button-action="add-to-cart"
            type="submit"
            <?php if (!$_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
              disabled
            <?php }?>
          >
            <i class="material-icons shopping-cart">&#xE547;</i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add to cart','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

          </button>
        </div>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductActions','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

      </div>
    <?php
}
}
/* {/block 'product_quantity'} */
/* {block 'product_availability'} */
class Block_1358190395602b1ea122a5b3_10101519 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability' => 
  array (
    0 => 'Block_1358190395602b1ea122a5b3_10101519',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <span id="product-availability">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
          <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
            <i class="material-icons rtl-no-flip product-available">&#xE5CA;</i>
          <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
            <i class="material-icons product-last-items">&#xE002;</i>
          <?php } else { ?>
            <i class="material-icons product-unavailable">&#xE14B;</i>
          <?php }?>
          <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

        <?php }?>
      </span>
    <?php
}
}
/* {/block 'product_availability'} */
/* {block 'product_minimal_quantity'} */
class Block_1731449511602b1ea122cff2_82686509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_minimal_quantity' => 
  array (
    0 => 'Block_1731449511602b1ea122cff2_82686509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <p class="product-minimal-quantity">
        <?php if ($_smarty_tpl->tpl_vars['product']->value['minimal_quantity'] > 1) {?>
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'The minimum purchase order quantity for the product is %quantity%.','d'=>'Shop.Theme.Checkout','sprintf'=>array('%quantity%'=>$_smarty_tpl->tpl_vars['product']->value['minimal_quantity'])),$_smarty_tpl ) );?>

        <?php }?>
      </p>
    <?php
}
}
/* {/block 'product_minimal_quantity'} */
}
