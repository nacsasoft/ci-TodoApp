<?php
/* Smarty version 3.1.39, created on 2021-08-17 13:15:14
  from '/opt/lampp/htdocs/CodeIgniter/ci-TodoApp2/app/Views/feladatSzerkesztese.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_611bfcb2ed7e63_29593887',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a43cec4f582652c6bbcd05a0d3ed40c5d7af9f3c' => 
    array (
      0 => '/opt/lampp/htdocs/CodeIgniter/ci-TodoApp2/app/Views/feladatSzerkesztese.tpl',
      1 => 1629224109,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_611bfcb2ed7e63_29593887 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_548542139611bfcb2ece5d9_46321536', 'title');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122272041611bfcb2ecf7a7_05039330', 'BodyMain');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "mainTemplate.tpl");
}
/* {block 'title'} */
class Block_548542139611bfcb2ece5d9_46321536 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_548542139611bfcb2ece5d9_46321536',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ci-TodoApp - Feladat szerkesztése<?php
}
}
/* {/block 'title'} */
/* {block 'BodyMain'} */
class Block_122272041611bfcb2ecf7a7_05039330 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'BodyMain' => 
  array (
    0 => 'Block_122272041611bfcb2ecf7a7_05039330',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 class="m-5">Feladat szerkesztése...</h1>

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
                        <input type="hidden" id="feladatID" value="">
                        <input name="txtFeladatCim" type="text" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['txtFeladatCim']->value;?>
">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="txaFeladatLeiras">Feladat részletei</label>
                    <textarea name="txaFeladatLeiras" required minlength="2" cols="40" rows="5" aria-describedby="txaFeladatLeirasHelpBlock" class="form-control"><?php echo $_smarty_tpl->tpl_vars['txaFeladatLeiras']->value;?>
</textarea> 
                    <span id="txaFeladatLeirasHelpBlock" class="form-text text-muted">Írja ide a fealadat részleteit!</span>
                    <div><?php echo (($tmp = @$_smarty_tpl->tpl_vars['txaFeladatLeiras_error']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>
                </div>
                <div class="form-group">
                    <button type="submit" id="btnModositas" class="btn btn-primary" onclick="ModositasJS()">Feladat módosítása</button>
                    <a id="modositasMegsem" href="javascript:void(0)" class="btn btn-secondary float-right">Mégsem</a>
                </div>
                <div class=""></div>
            </form>
        </div>
        <div class="row">
            <span class="d-none alert alert-success mb-3" id="res_message"></span>
        </div>
    </div>

    <?php echo '<script'; ?>
 src="scripts/<?php echo $_smarty_tpl->tpl_vars['jsfile']->value;?>
.js"><?php echo '</script'; ?>
>

<?php
}
}
/* {/block 'BodyMain'} */
}
