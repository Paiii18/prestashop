<?php
/* Smarty version 4.3.4, created on 2024-10-05 09:27:27
  from 'C:\laragon\www\prestashop\themes\classic\templates\customer\order-follow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.4',
  'unifunc' => 'content_6701067fb109a7_76420233',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '78716dcbcc26f9e81e80903160dd9a2e61c17a08' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\themes\\classic\\templates\\customer\\order-follow.tpl',
      1 => 1728118228,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6701067fb109a7_76420233 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13883690546701067faf16f4_98358331', 'page_title');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19257392816701067faf3270_38183925', 'page_content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/page.tpl');
}
/* {block 'page_title'} */
class Block_13883690546701067faf16f4_98358331 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_title' => 
  array (
    0 => 'Block_13883690546701067faf16f4_98358331',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Merchandise returns','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'page_title'} */
/* {block 'page_content'} */
class Block_19257392816701067faf3270_38183925 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content' => 
  array (
    0 => 'Block_19257392816701067faf3270_38183925',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <h6><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Here is a list of pending merchandise returns','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</h6>

  <?php if ($_smarty_tpl->tpl_vars['ordersReturn']->value && count($_smarty_tpl->tpl_vars['ordersReturn']->value)) {?>
    <table class="table table-striped table-bordered hidden-sm-down">
      <thead class="thead-default">
        <tr>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Return','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Package status','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date issued','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</th>
          <th><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Returns form','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</th>
        </tr>
      </thead>
      <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ordersReturn']->value, 'return');
$_smarty_tpl->tpl_vars['return']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['return']->value) {
$_smarty_tpl->tpl_vars['return']->do_else = false;
?>
          <tr>
            <td><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['details_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</a></td>
            <td><a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['return_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['return_number'], ENT_QUOTES, 'UTF-8');?>
</a></td>
            <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['state_name'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['return_date'], ENT_QUOTES, 'UTF-8');?>
</td>
            <td class="text-sm-center">
              <?php if ($_smarty_tpl->tpl_vars['return']->value['print_url']) {?>
                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['print_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
              <?php } else { ?>
                -
              <?php }?>
            </td>
          </tr>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </tbody>
    </table>
    <div class="order-returns hidden-md-up">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ordersReturn']->value, 'return');
$_smarty_tpl->tpl_vars['return']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['return']->value) {
$_smarty_tpl->tpl_vars['return']->do_else = false;
?>
        <div class="order-return">
          <ul>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</strong>
              <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['details_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['reference'], ENT_QUOTES, 'UTF-8');?>
</a>
            </li>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Return','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</strong>
              <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['return_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['return_number'], ENT_QUOTES, 'UTF-8');?>
</a>
            </li>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Package status','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</strong>
              <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['state_name'], ENT_QUOTES, 'UTF-8');?>

            </li>
            <li>
              <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Date issued','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</strong>
              <?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['return_date'], ENT_QUOTES, 'UTF-8');?>

            </li>
            <?php if ($_smarty_tpl->tpl_vars['return']->value['print_url']) {?>
              <li>
                <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Returns form','d'=>'Shop.Theme.Customeraccount'),$_smarty_tpl ) );?>
</strong>
                <a href="<?php echo htmlspecialchars((string) $_smarty_tpl->tpl_vars['return']->value['print_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Print out','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</a>
              </li>
            <?php }?>
          </ul>
        </div>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  <?php } else { ?>
    <div class="alert alert-info" role="alert" data-alert="info"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You have no merchandise return authorizations.','d'=>'Shop.Notifications.Error'),$_smarty_tpl ) );?>
</div>
  <?php }
}
}
/* {/block 'page_content'} */
}
