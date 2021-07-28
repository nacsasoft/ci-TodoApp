<?php
/* Smarty version 3.1.39, created on 2021-07-28 13:21:46
  from '/opt/lampp/htdocs/CodeIgniter/ci-TodoApp2/app/Views/ujFeladat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6101a03a171dc5_38691954',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b70a4bcf1482209d8feeb724e43812b891fbf739' => 
    array (
      0 => '/opt/lampp/htdocs/CodeIgniter/ci-TodoApp2/app/Views/ujFeladat.tpl',
      1 => 1627491468,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6101a03a171dc5_38691954 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3064819516101a03a15ef97_69924879', 'title');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_344062506101a03a161967_42070713', 'BodyMain');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "mainTemplate.tpl");
}
/* {block 'title'} */
class Block_3064819516101a03a15ef97_69924879 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_3064819516101a03a15ef97_69924879',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ci-TodoApp - Új feladat<?php
}
}
/* {/block 'title'} */
/* {block 'BodyMain'} */
class Block_344062506101a03a161967_42070713 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'BodyMain' => 
  array (
    0 => 'Block_344062506101a03a161967_42070713',
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
                    <div><?php echo (($tmp = @$_smarty_tpl->tpl_vars['txtFeladatCim']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>
                </div>
                <div class="form-group">
                    <label for="txaFeladatLeiras">Feladat részletei</label>
                    <textarea name="txaFeladatLeiras" required minlength="2" cols="40" rows="5" aria-describedby="txaFeladatLeirasHelpBlock"  class="form-control"></textarea> 
                    <span id="txaFeladatLeirasHelpBlock" class="form-text text-muted">Írja ide a fealadat részleteit!</span>
                    <div><?php echo (($tmp = @$_smarty_tpl->tpl_vars['txaFeladatLeiras_error']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>
                </div>
                <div class="form-group">
                    <button type="submit" id="btnUjFelvitel" class="btn btn-primary" onclick="ujFelvitelJS()">Új feladat rögzítése</button>
                    <a href="index.php" class="btn btn-secondary float-right">Mégsem</a>
                </div>
                <div class=""></div>
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
