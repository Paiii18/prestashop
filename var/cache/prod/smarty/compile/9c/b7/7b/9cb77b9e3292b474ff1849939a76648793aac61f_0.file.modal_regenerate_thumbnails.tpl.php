<?php
/* Smarty version 4.3.4, created on 2024-10-05 09:27:35
  from 'C:\laragon\www\prestashop\admin\themes\default\template\controllers\images\modal_regenerate_thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67010687bf6342_05766652',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9cb77b9e3292b474ff1849939a76648793aac61f' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\admin\\themes\\default\\template\\controllers\\images\\modal_regenerate_thumbnails.tpl',
      1 => 1728119006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67010687bf6342_05766652 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Regenerate thumbnails for the selected images? With the \"erase\" option enabled, the previously selected thumbnails will be deleted.",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>

</div>
<?php }
}
