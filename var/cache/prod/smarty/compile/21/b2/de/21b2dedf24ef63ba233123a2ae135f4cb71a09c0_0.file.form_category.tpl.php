<?php
/* Smarty version 4.3.4, created on 2024-10-05 09:27:39
  from 'C:\laragon\www\prestashop\admin\themes\default\template\helpers\form\form_category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6701068bb6e464_53632922',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '21b2dedf24ef63ba233123a2ae135f4cb71a09c0' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\admin\\themes\\default\\template\\helpers\\form\\form_category.tpl',
      1 => 1728119014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6701068bb6e464_53632922 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['categories']->value) && (isset($_smarty_tpl->tpl_vars['categories']->value))) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		var inputName = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addcslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['categories']->value['input_name'],'\'' ));?>
';
		var use_radio = <?php if ($_smarty_tpl->tpl_vars['categories']->value['use_radio']) {?>1<?php } else { ?>0<?php }?>;
		var selectedCat = <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'intval' ][ 0 ], array( call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'implode' ][ 0 ], array( $_smarty_tpl->tpl_vars['categories']->value['selected_cat'] )) ));?>
;
		var selectedLabel = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addcslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['categories']->value['trads']['selected'],'\'' ));?>
';
		var home = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'addcslashes' ][ 0 ], array( $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['name'],'\'' ));?>
';
		var use_radio = <?php if ($_smarty_tpl->tpl_vars['categories']->value['use_radio']) {?>1<?php } else { ?>0<?php }?>;
		var use_context = <?php if ((isset($_smarty_tpl->tpl_vars['categories']->value['use_context']))) {?>1<?php } else { ?>0<?php }?>;
	<?php echo '</script'; ?>
>
<div class="panel">
	<div class="category-filter panel-heading">
		<a href="#" id="collapse_all" class="btn btn-link"><i class="icon-collapse-alt icon-large"></i> <?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Collapse all'];?>
</a>
		<a href="#" id="expand_all" class="btn btn-link"><i class="icon-expand-alt icon-large"></i> <?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Expand all'];?>
</a>
		<?php if (!$_smarty_tpl->tpl_vars['categories']->value['use_radio']) {?>
		<a href="#" id="check_all" class="btn btn-link"><i class="icon-check-sign"></i> <?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Check all'];?>
</a>
		<a href="#" id="uncheck_all" class="btn btn-link"><i class="icon-check-empty"></i> <?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Uncheck all'];?>
</a>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['categories']->value['use_search']) {?>
			<span>
				<?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['search'];?>
:&nbsp;
				<form method="post" id="filternameForm">
					<input type="text" name="search_cat" id="search_cat"/>
				</form>
			</span>
		<?php }?>
	</div>
	<?php $_smarty_tpl->_assignInScope('home_is_selected', false);?>
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value['selected_cat'], 'cat');
$_smarty_tpl->tpl_vars['cat']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cat']->value) {
$_smarty_tpl->tpl_vars['cat']->do_else = false;
?>
		<?php if (is_array($_smarty_tpl->tpl_vars['cat']->value)) {?>
			<?php if ($_smarty_tpl->tpl_vars['cat']->value['id_category'] != $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['id_category']) {?>
				<input <?php if (in_array($_smarty_tpl->tpl_vars['cat']->value['id_category'],$_smarty_tpl->tpl_vars['categories']->value['disabled_categories'])) {?>disabled="disabled"<?php }?> type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['categories']->value['input_name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value['id_category'];?>
"/>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('home_is_selected', true);?>
			<?php }?>
		<?php } else { ?>
			<?php if ($_smarty_tpl->tpl_vars['cat']->value != $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['id_category']) {?>
				<input <?php if (in_array($_smarty_tpl->tpl_vars['cat']->value,$_smarty_tpl->tpl_vars['categories']->value['disabled_categories'])) {?>disabled="disabled"<?php }?> type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['categories']->value['input_name'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['cat']->value;?>
"/>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('home_is_selected', true);?>
			<?php }?>
		<?php }?>
	<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	<ul id="categories-treeview" class="filetree">
		<li id="<?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['id_category'];?>
" class="hasChildren">
			<span class="folder">
				<?php if ($_smarty_tpl->tpl_vars['categories']->value['top_category']->id != $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['id_category']) {?>
					<input type="<?php if (!$_smarty_tpl->tpl_vars['categories']->value['use_radio']) {?>checkbox<?php } else { ?>radio<?php }?>"
							name="<?php echo $_smarty_tpl->tpl_vars['categories']->value['input_name'];?>
"
							value="<?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['id_category'];?>
"
							<?php if ($_smarty_tpl->tpl_vars['home_is_selected']->value) {?>checked="checked"<?php }?>
							onclick="clickOnCategoryBox($(this));"/>
						<span class="category_label"><?php echo $_smarty_tpl->tpl_vars['categories']->value['trads']['Root']['name'];?>
</span>
				<?php } else { ?>
					&nbsp;
				<?php }?>
			</span>
			<ul>
				<li><span class="placeholder">&nbsp;</span></li>
		  	</ul>
		</li>
	</ul>
	<?php if ($_smarty_tpl->tpl_vars['categories']->value['use_radio']) {?>
	<?php echo '<script'; ?>
 type="text/javascript">
		searchCategory();
	<?php echo '</script'; ?>
>
	<?php }?>
</div>
<?php }
}
}
