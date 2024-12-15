<?php
/* Smarty version 4.3.4, created on 2024-10-05 09:27:29
  from 'C:\laragon\www\prestashop\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_67010681662434_50459953',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '256cf4bfab57d2e00a6a34464ff48124a9618717' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1728118223,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67010681662434_50459953 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\laragon\\www\\prestashop\\var\\cache\\prod\\smarty\\compile\\25\\6c\\f4\\256cf4bfab57d2e00a6a34464ff48124a9618717_2.file.helpers.tpl.php',
    'uid' => '256cf4bfab57d2e00a6a34464ff48124a9618717',
    'call_name' => 'smarty_template_function_renderLogo_15776152416701068155c671_76558337',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_15776152416701068155c671_76558337 */
if (!function_exists('smarty_template_function_renderLogo_15776152416701068155c671_76558337')) {
function smarty_template_function_renderLogo_15776152416701068155c671_76558337(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_15776152416701068155c671_76558337 */
}
