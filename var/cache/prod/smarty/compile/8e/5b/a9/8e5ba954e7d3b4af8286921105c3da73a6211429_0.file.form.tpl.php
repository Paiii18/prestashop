<?php
/* Smarty version 4.3.4, created on 2024-10-05 09:27:37
  from 'C:\laragon\www\prestashop\admin\themes\default\template\controllers\shop\helpers\form\form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67010689403149_27275672',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e5ba954e7d3b4af8286921105c3da73a6211429' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\admin\\themes\\default\\template\\controllers\\shop\\helpers\\form\\form.tpl',
      1 => 1728119009,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67010689403149_27275672 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1768300114670106893c23a3_40940442', "input");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_793036279670106893da316_89792562', "other_fieldsets");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27993489567010689400248_94508587', "script");
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "input"} */
class Block_1768300114670106893c23a3_40940442 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_1768300114670106893c23a3_40940442',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'theme') {?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['values'], 'theme');
$_smarty_tpl->tpl_vars['theme']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['theme']->value) {
$_smarty_tpl->tpl_vars['theme']->do_else = false;
?>
			<div class="col-lg-3 select_theme <?php if ($_smarty_tpl->tpl_vars['theme']->value->getName() == $_smarty_tpl->tpl_vars['fields_value']->value['theme_name']) {?>select_theme_choice<?php }?>" onclick="$(this).find('input').attr('checked', true); $('.select_theme').removeClass('select_theme_choice'); $(this).toggleClass('select_theme_choice');">
				<div class="radio">
					<label>
						<input type="radio" name="theme_name" value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['theme']->value->getName(),'html','UTF-8' ));?>
"<?php if ($_smarty_tpl->tpl_vars['theme']->value->getName() == $_smarty_tpl->tpl_vars['fields_value']->value['theme_name']) {?> checked="checked"<?php }?> /> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['theme']->value->getName(),'html','UTF-8' ));?>

					</label>
				</div>
				<div class="theme-container">
					<img class="thumbnail" src="../<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['theme']->value->get('preview'),'html','UTF-8' ));?>
" />
				</div>
			</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<div class="clear">&nbsp;</div>
	<?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'textShopGroup') {?>
		<p style="color: #000000; padding: 0px; font-size: 12px; margin-top: 4px;"><?php echo $_smarty_tpl->tpl_vars['input']->value['value'];?>
</p>
	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'select' && $_smarty_tpl->tpl_vars['input']->value['name'] == 'id_category') {?>
			<?php echo '<script'; ?>
 type="text/javascript">
				$(document).ready(function(){
					$('#id_category').change(function(){
						doAdminAjax(
							{
							ajax: '1',
							id_category : $(this).val(),
							use_shop_context : 0,
							action : 'getCategoriesFromRootCategory',
							controller: 'AdminShop',
							token : '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
',
							},
							function(res)
							{
								$('#categories-tree').parent().parent().html(res);
							}
						);
					});
					$('#id_category').trigger('change');
				});
			<?php echo '</script'; ?>
>
		<?php }?>
		<?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

	<?php }
}
}
/* {/block "input"} */
/* {block "other_fieldsets"} */
class Block_793036279670106893da316_89792562 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'other_fieldsets' => 
  array (
    0 => 'Block_793036279670106893da316_89792562',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php if ((isset($_smarty_tpl->tpl_vars['form_import']->value))) {?>
	<div class="panel">
		<h3><i class="icon-cloud-download"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Import data from another shop','d'=>'Admin.Advparameters.Feature'),$_smarty_tpl ) );?>
</h3>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['form_import']->value, 'field', false, 'key');
$_smarty_tpl->tpl_vars['field']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['field']->value) {
$_smarty_tpl->tpl_vars['field']->do_else = false;
?>
		<div class="form-group">
		<?php if ($_smarty_tpl->tpl_vars['key']->value == 'radio') {?>
			<label class="control-label col-lg-3"><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
</label>
			<div class="col-lg-2">
				<span class="switch prestashop-switch">
					<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
_on" value="1" <?php if ($_smarty_tpl->tpl_vars['field']->value['value']) {?> checked="checked" <?php }?> />
					<label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
_on">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Yes','d'=>'Admin.Global'),$_smarty_tpl ) );?>

					</label>
					<input type="radio" name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
_off" value="0"  <?php if (!$_smarty_tpl->tpl_vars['field']->value['value']) {?> checked="checked" <?php }?> />
					<label for="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
_off">
						<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'No','d'=>'Admin.Global'),$_smarty_tpl ) );?>

					</label>
					<a class="slide-button btn"></a>
				</span>
			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'select') {?>
			<div id="shop_list" <?php if (!$_smarty_tpl->tpl_vars['checked']->value) {?>display:none<?php }?>>
				<label class="control-label col-lg-3"><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
</label>
				<div class="col-lg-9">
					<select name="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" id="<?php echo $_smarty_tpl->tpl_vars['field']->value['name'];?>
" >
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['options']['query'], 'option', false, 'key');
$_smarty_tpl->tpl_vars['option']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['option']->value) {
$_smarty_tpl->tpl_vars['option']->do_else = false;
?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['key']->value == $_smarty_tpl->tpl_vars['defaultShop']->value) {?>selected="selected"<?php }?>>
								<?php echo $_smarty_tpl->tpl_vars['option']->value['name'];?>

							</option>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					</select>
				</div>
			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'allcheckbox') {?>
			<div id="data_list" <?php if (!$_smarty_tpl->tpl_vars['checked']->value) {?>display:none<?php }?>>
				<label class="control-label col-lg-3"><?php echo $_smarty_tpl->tpl_vars['field']->value['label'];?>
</label>
				<div class="col-lg-9 multiple-checkboxes">
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['field']->value['values'], 'label', false, 'key');
$_smarty_tpl->tpl_vars['label']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['label']->value) {
$_smarty_tpl->tpl_vars['label']->do_else = false;
?>
					<p class="checkbox"><input type="checkbox" name="importData[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" checked="checked" /> <?php echo $_smarty_tpl->tpl_vars['label']->value;?>
</p>
				<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
				</div>
			</div>
		<?php } elseif ($_smarty_tpl->tpl_vars['key']->value == 'submit') {?>
			<div class="col-lg-9">
				<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['field']->value['title'];?>
" name="submitAdd<?php echo $_smarty_tpl->tpl_vars['table']->value;?>
" class="btn btn-default<?php if ((isset($_smarty_tpl->tpl_vars['field']->value['class']))) {?> <?php echo $_smarty_tpl->tpl_vars['field']->value['class'];
}?>" />
			</div>
		<?php }?>
		</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		<div class="panel-footer">
			<button type="submit" value="1" id="shop_form_submit_btn" name="submitAddshop" class="btn btn-default pull-right">
				<i class="process-icon-save"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

			</button>
			<a href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currentIndex']->value,'html','UTF-8' ));?>
&amp;id_shop_group=0&amp;token=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['token']->value,'html','UTF-8' ));?>
" class="btn btn-default" onclick="window.history.back();">
				<i class="process-icon-cancel"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Cancel','d'=>'Admin.Actions'),$_smarty_tpl ) );?>

			</a>
		</div>
	</div>
	<?php }
}
}
/* {/block "other_fieldsets"} */
/* {block "script"} */
class Block_27993489567010689400248_94508587 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_27993489567010689400248_94508587',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	var ids_category = new Array();
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ids_category']->value, 'id_category', false, 'key');
$_smarty_tpl->tpl_vars['id_category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['id_category']->value) {
$_smarty_tpl->tpl_vars['id_category']->do_else = false;
?>
		ids_category[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
] = <?php echo $_smarty_tpl->tpl_vars['id_category']->value;?>
;
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	$(document).ready(function() {
		$('input[name=useImportData]').click(function()	{
			if ($(this).attr('id') == 'useImportData_on')
			{
				$('input[name^="importData["]').prop('checked', true);
				$('#shop_list, #data_list').slideDown('slow');
			}
			else
			{
				$('input[name^="importData["]').prop('checked', false);
				$('#shop_list, #data_list').slideUp('slow');
			}
		});
		$('#id_category, #importFromShop').change(function(){
			shop_id = $('#importFromShop').val();
			category_id = $('#id_category').val();
			if (ids_category[shop_id] != category_id)
				disableProductsDuplication();
			else
				enableProductsDuplication();
		});
	});
	function disableProductsDuplication()
	{
		$('input[name="importData[product_attribute]"], input[name="importData[image]"], input[name="importData[product]"], input[name="importData[stock_available]"], input[name="importData[discount]"]').removeAttr('checked').attr('disabled', 'disabled');
	}
	function enableProductsDuplication()
	{
		$('input[name="importData[product_attribute]"], input[name="importData[image]"], input[name="importData[product]"], input[name="importData[stock_available]"], input[name="importData[discount]"]').removeAttr('disabled').attr('checked', 'checked');
	}
<?php
}
}
/* {/block "script"} */
}
