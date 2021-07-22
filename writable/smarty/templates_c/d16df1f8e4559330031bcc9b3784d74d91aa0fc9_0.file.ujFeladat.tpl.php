<?php
/* Smarty version 3.1.39, created on 2021-07-22 13:53:06
  from '/opt/lampp/htdocs/CodeIgniter/ci-TodoApp/app/Views/ujFeladat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f9be9251fd56_08636786',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd16df1f8e4559330031bcc9b3784d74d91aa0fc9' => 
    array (
      0 => '/opt/lampp/htdocs/CodeIgniter/ci-TodoApp/app/Views/ujFeladat.tpl',
      1 => 1626979966,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f9be9251fd56_08636786 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_82765498760f9be925187f5_31869207', 'title');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_71225265660f9be9251a421_75665936', 'BodyMain');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "mainTemplate.tpl");
}
/* {block 'title'} */
class Block_82765498760f9be925187f5_31869207 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_82765498760f9be925187f5_31869207',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ci-TodoApp - Új feladat<?php
}
}
/* {/block 'title'} */
/* {block 'BodyMain'} */
class Block_71225265660f9be9251a421_75665936 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'BodyMain' => 
  array (
    0 => 'Block_71225265660f9be9251a421_75665936',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 class="m-5">Új feladat felvitele...</h1>

    <div class="col">
        <div class="row">
            <form action="javascript:void(0)" id="myform" class="col-lg-8">
                <div class="form-group">
                    <label for="txtFeladatCim">Feladat címe</label> 
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <i class="fa fa-address-card"></i>
                                </div>
                            </div> 
                        <input name="txtFeladatCim" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="txaFeladatLeiras">Feladat részletei</label> 
                    <textarea name="txaFeladatLeiras" required minlength="2" cols="40" rows="5" aria-describedby="txaFeladatLeirasHelpBlock"  class="form-control"></textarea> 
                    <span id="txaFeladatLeirasHelpBlock" class="form-text text-muted">Írja ide a fealadat részleteit!</span>
                </div> 
                <div class="form-group">
                    <button type="submit" id="btnUjFelvitel" class="btn btn-primary" onclick="ujFelvitelJS()">Új feladat rögzítése</button>
                    <a href="index.php" class="btn btn-secondary float-right">Mégsem</a>
                </div>
            </form>
        </div>
        <div class="row">
            <span class="d-none alert alert-success mb-3" id="res_message"></span>
        </div>
    </div>

    <?php echo '<script'; ?>
 src="assets/<?php echo $_smarty_tpl->tpl_vars['jsfile']->value;?>
.js" type="text/javascript"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'BodyMain'} */
}
