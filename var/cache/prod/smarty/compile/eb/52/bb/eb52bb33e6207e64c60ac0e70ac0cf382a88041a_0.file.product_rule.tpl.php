<?php
/* Smarty version 4.3.4, created on 2024-10-05 09:27:34
  from 'C:\laragon\www\prestashop\admin\themes\default\template\controllers\cart_rules\product_rule.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67010686615ca0_55256271',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb52bb33e6207e64c60ac0e70ac0cf382a88041a' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\admin\\themes\\default\\template\\controllers\\cart_rules\\product_rule.tpl',
      1 => 1728119003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67010686615ca0_55256271 (Smarty_Internal_Template $_smarty_tpl) {
?> <tr id="product_rule_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_group_id']->value ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_id']->value ));?>
_tr">
	<td>
		<input type="hidden" name="product_rule_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_group_id']->value ));?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['product_rule_id']->value;?>
" />
		<input type="hidden" name="product_rule_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_group_id']->value ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_id']->value ));?>
_type" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_type']->value ));?>
" />
				[<?php if ($_smarty_tpl->tpl_vars['product_rule_type']->value == 'products') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Products','d'=>'Admin.Global'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['product_rule_type']->value == 'categories') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Categories','d'=>'Admin.Global'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['product_rule_type']->value == 'manufacturers') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brands','d'=>'Admin.Global'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['product_rule_type']->value == 'suppliers') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Suppliers','d'=>'Admin.Global'),$_smarty_tpl ) );
} elseif ($_smarty_tpl->tpl_vars['product_rule_type']->value == 'attributes') {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Attributes','d'=>'Admin.Global'),$_smarty_tpl ) );
}?>]
	</td>
	<td>
		<input type="text" id="product_rule_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_group_id']->value ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_id']->value ));?>
_match" value="" disabled="disabled" />
	</td>
	<td>
		<a class="btn btn-default" id="product_rule_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_group_id']->value ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_id']->value ));?>
_choose_link" href="#product_rule_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_group_id']->value ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_id']->value ));?>
_choose_content">
			<i class="icon-list-ul"></i>
			<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

		</a>
		<div>
			<div id="product_rule_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_group_id']->value ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_id']->value ));?>
_choose_content">
				<?php echo $_smarty_tpl->tpl_vars['product_rule_choose_content']->value;?>

			</div>
		</div>
	</td>
	<td class="text-right">
		<a class="btn btn-default" href="javascript:removeProductRule(<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_group_id']->value ));?>
, <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_id']->value ));?>
);">
			<i class="icon-remove"></i>
		</a>
	</td>
</tr>

<?php echo '<script'; ?>
 type="text/javascript">
	$('#product_rule_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_group_id']->value ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_id']->value ));?>
_choose_content').parent().hide();
  $("#product_rule_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_group_id']->value ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_id']->value ));?>
_choose_link").fancybox({
    autoDimensions: false,
    autoSize: false,
    width: 900,
    autoHeight: true,
  });
	$(document).ready(function() { updateProductRuleShortDescription($('#product_rule_select_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_group_id']->value ));?>
_<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( $_smarty_tpl->tpl_vars['product_rule_id']->value ));?>
_add')); });
<?php echo '</script'; ?>
>
<?php }
}
