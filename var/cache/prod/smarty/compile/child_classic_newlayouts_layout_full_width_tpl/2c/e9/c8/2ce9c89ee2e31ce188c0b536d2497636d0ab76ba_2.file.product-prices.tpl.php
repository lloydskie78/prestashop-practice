<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-16 09:23:44
  from 'C:\xampp\htdocs\ps\themes\child_classic_new\templates\catalog\_partials\product-prices.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602b1ea0cd35d9_47547988',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2ce9c89ee2e31ce188c0b536d2497636d0ab76ba' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ps\\themes\\child_classic_new\\templates\\catalog\\_partials\\product-prices.tpl',
      1 => 1587958804,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602b1ea0cd35d9_47547988 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
  <div class="product-prices">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1295438852602b1ea0cc4dd2_48656430', 'product_discount');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2100882844602b1ea0cc6485_46052944', 'product_price');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1639577133602b1ea0cca9b7_52016314', 'product_without_taxes');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1816440512602b1ea0ccbb45_19181553', 'product_pack_price');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69143715602b1ea0ccca12_82356716', 'product_ecotax');
?>


    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"weight",'hook_origin'=>'product_sheet'),$_smarty_tpl ) );?>


    <div class="tax-shipping-delivery-label">
      <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No tax','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

      <?php } elseif ($_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label']) {?>
        <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['labels']['tax_long'], ENT_QUOTES, 'UTF-8');?>

      <?php }?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"price"),$_smarty_tpl ) );?>

      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"after_price"),$_smarty_tpl ) );?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['additional_delivery_times'] == 1) {?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['delivery_information']) {?>
          <span class="delivery-information"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['delivery_information'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>
      <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['additional_delivery_times'] == 2) {?>
        <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] > 0) {?>
          <span class="delivery-information"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['delivery_in_stock'], ENT_QUOTES, 'UTF-8');?>
</span>
                <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['quantity'] <= 0 && $_smarty_tpl->tpl_vars['product']->value['add_to_cart_url']) {?>
          <span class="delivery-information"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['delivery_out_stock'], ENT_QUOTES, 'UTF-8');?>
</span>
        <?php }?>
      <?php }?>
    </div>
  </div>
<?php }
}
/* {block 'product_discount'} */
class Block_1295438852602b1ea0cc4dd2_48656430 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_discount' => 
  array (
    0 => 'Block_1295438852602b1ea0cc4dd2_48656430',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
        <div class="product-discount">
          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

          <span class="regular-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
      <?php }?>
    <?php
}
}
/* {/block 'product_discount'} */
/* {block 'product_unit_price'} */
class Block_1349638220602b1ea0cc9672_56302398 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php if ($_smarty_tpl->tpl_vars['displayUnitPrice']->value) {?>
            <p class="product-unit-price sub"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(%unit_price%)','d'=>'Shop.Theme.Catalog','sprintf'=>array('%unit_price%'=>$_smarty_tpl->tpl_vars['product']->value['unit_price_full'])),$_smarty_tpl ) );?>
</p>
          <?php }?>
        <?php
}
}
/* {/block 'product_unit_price'} */
/* {block 'product_price'} */
class Block_2100882844602b1ea0cc6485_46052944 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_price' => 
  array (
    0 => 'Block_2100882844602b1ea0cc6485_46052944',
  ),
  'product_unit_price' => 
  array (
    0 => 'Block_1349638220602b1ea0cc9672_56302398',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div
        class="product-price h5 <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>has-discount<?php }?>"
        itemprop="offers"
        itemscope
        itemtype="https://schema.org/Offer"
      >
        <link itemprop="availability" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['seo_availability'], ENT_QUOTES, 'UTF-8');?>
"/>
        <meta itemprop="priceCurrency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

        <div class="current-price">
          <span itemprop="price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <?php if ($_smarty_tpl->tpl_vars['product']->value['discount_type'] === 'percentage') {?>
              <span class="discount discount-percentage"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %percentage%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%percentage%'=>$_smarty_tpl->tpl_vars['product']->value['discount_percentage_absolute'])),$_smarty_tpl ) );?>
</span>
            <?php } else { ?>
              <span class="discount discount-amount">
                  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save %amount%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['discount_to_display'])),$_smarty_tpl ) );?>

              </span>
            <?php }?>
          <?php }?>
        </div>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1349638220602b1ea0cc9672_56302398', 'product_unit_price', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'product_price'} */
/* {block 'product_without_taxes'} */
class Block_1639577133602b1ea0cca9b7_52016314 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_without_taxes' => 
  array (
    0 => 'Block_1639577133602b1ea0cca9b7_52016314',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['priceDisplay']->value == 2) {?>
        <p class="product-without-taxes"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%price% tax excl.','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['product']->value['price_tax_exc'])),$_smarty_tpl ) );?>
</p>
      <?php }?>
    <?php
}
}
/* {/block 'product_without_taxes'} */
/* {block 'product_pack_price'} */
class Block_1816440512602b1ea0ccbb45_19181553 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_pack_price' => 
  array (
    0 => 'Block_1816440512602b1ea0ccbb45_19181553',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['displayPackPrice']->value) {?>
        <p class="product-pack-price"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instead of %price%','d'=>'Shop.Theme.Catalog','sprintf'=>array('%price%'=>$_smarty_tpl->tpl_vars['noPackPrice']->value)),$_smarty_tpl ) );?>
</span></p>
      <?php }?>
    <?php
}
}
/* {/block 'product_pack_price'} */
/* {block 'product_ecotax'} */
class Block_69143715602b1ea0ccca12_82356716 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_ecotax' => 
  array (
    0 => 'Block_69143715602b1ea0ccca12_82356716',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php if ($_smarty_tpl->tpl_vars['product']->value['ecotax']['amount'] > 0) {?>
        <p class="price-ecotax"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Including %amount% for ecotax','d'=>'Shop.Theme.Catalog','sprintf'=>array('%amount%'=>$_smarty_tpl->tpl_vars['product']->value['ecotax']['value'])),$_smarty_tpl ) );?>

          <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'(not impacted by the discount)','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

          <?php }?>
        </p>
      <?php }?>
    <?php
}
}
/* {/block 'product_ecotax'} */
}
