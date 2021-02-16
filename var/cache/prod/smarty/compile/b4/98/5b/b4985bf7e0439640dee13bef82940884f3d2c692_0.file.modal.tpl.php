<?php
/* Smarty version 3.1.34-dev-7, created on 2021-02-16 13:17:33
  from 'C:\xampp\htdocs\ps\admin499nsvb7w\themes\default\template\helpers\modules_list\modal.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_602b556d1e60e9_33293280',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4985bf7e0439640dee13bef82940884f3d2c692' => 
    array (
      0 => 'C:\\xampp\\htdocs\\ps\\admin499nsvb7w\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1606893182,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602b556d1e60e9_33293280 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Recommended Modules and Services'),$_smarty_tpl ) );?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
<?php echo '</script'; ?>
>
<?php }
}
