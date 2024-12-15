<?php
/* Smarty version 4.3.4, created on 2024-10-05 17:11:59
  from 'C:\laragon\www\prestashop\adminstore\themes\new-theme\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_670110ef782409_73451649',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '81a5835bd7fe17d3382c9961d2ce362168d21d0b' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\adminstore\\themes\\new-theme\\template\\content.tpl',
      1 => 1728119045,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_670110ef782409_73451649 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="ajax_confirmation" class="alert alert-success" style="display: none;"></div>
<div id="content-message-box"></div>


<?php if ((isset($_smarty_tpl->tpl_vars['content']->value))) {?>
  <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php }
}
}
