<?php
/* Smarty version 4.3.4, created on 2024-10-05 17:09:07
  from 'C:\laragon\www\prestashop\adminstore\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6701104349e0a8_98339377',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f4c6b947180d59e31500e76acf99887bbcf3287f' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\adminstore\\themes\\default\\template\\content.tpl',
      1 => 1728119000,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6701104349e0a8_98339377 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>
<div id="content-message-box"></div>

<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
	<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
