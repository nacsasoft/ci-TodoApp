<?php
/* Smarty version 3.1.39, created on 2021-06-14 12:17:51
  from '/opt/lampp/htdocs/codeigniter/ci-TodoApp/app/Views/template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60c78f3fbec541_55910885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9efa12e9ca51925353adb8794f5ace3489eef3ab' => 
    array (
      0 => '/opt/lampp/htdocs/codeigniter/ci-TodoApp/app/Views/template.tpl',
      1 => 1623691015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60c78f3fbec541_55910885 (Smarty_Internal_Template $_smarty_tpl) {
echo (($tmp = @$_smarty_tpl->tpl_vars['time']->value)===null||$tmp==='' ? 'BUMM' : $tmp);?>
<br>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['apples']->value, 'item', false, 'key', 'name', array (
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
    <?php echo $_smarty_tpl->tpl_vars['item']->value;?>
<br>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php }
}
