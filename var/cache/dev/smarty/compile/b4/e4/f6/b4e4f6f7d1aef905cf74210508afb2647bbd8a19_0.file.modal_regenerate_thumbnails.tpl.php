<?php
/* Smarty version 4.3.4, created on 2024-10-05 19:45:20
  from 'C:\laragon\www\prestashop\adminstore\themes\default\template\controllers\images\modal_regenerate_thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_670134e0884a86_20221739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4e4f6f7d1aef905cf74210508afb2647bbd8a19' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\adminstore\\themes\\default\\template\\controllers\\images\\modal_regenerate_thumbnails.tpl',
      1 => 1728119006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670134e0884a86_20221739 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal-body">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Regenerate thumbnails for the selected images? With the \"erase\" option enabled, the previously selected thumbnails will be deleted.",'d'=>"Admin.Design.Notification"),$_smarty_tpl ) );?>

</div>
<?php }
}
