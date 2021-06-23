<?php
/* Smarty version 3.1.39, created on 2021-06-23 09:52:30
  from '/opt/lampp/htdocs/codeigniter/ci-TodoApp/app/Views/ujFeladat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d34aaed01008_13324857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '505ad94183b77c67016c4e6314200f01b4ff3933' => 
    array (
      0 => '/opt/lampp/htdocs/codeigniter/ci-TodoApp/app/Views/ujFeladat.tpl',
      1 => 1624459455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d34aaed01008_13324857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_62761477060d34aaecffa94_77100371', 'title');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_161062912260d34aaed00842_36054604', 'BodyMain');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "mainTemplate.tpl");
}
/* {block 'title'} */
class Block_62761477060d34aaecffa94_77100371 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_62761477060d34aaecffa94_77100371',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ci-TodoApp - Új feladat<?php
}
}
/* {/block 'title'} */
/* {block 'BodyMain'} */
class Block_161062912260d34aaed00842_36054604 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'BodyMain' => 
  array (
    0 => 'Block_161062912260d34aaed00842_36054604',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 class="m-5">Új feladat felvitele...</h1>
    

<?php
}
}
/* {/block 'BodyMain'} */
}
