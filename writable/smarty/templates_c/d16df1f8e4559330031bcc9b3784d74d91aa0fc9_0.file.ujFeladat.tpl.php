<?php
/* Smarty version 3.1.39, created on 2021-07-20 12:46:28
  from '/opt/lampp/htdocs/CodeIgniter/ci-TodoApp/app/Views/ujFeladat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f70bf4873601_82285320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd16df1f8e4559330031bcc9b3784d74d91aa0fc9' => 
    array (
      0 => '/opt/lampp/htdocs/CodeIgniter/ci-TodoApp/app/Views/ujFeladat.tpl',
      1 => 1626795687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f70bf4873601_82285320 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134495439260f70bf486e491_73180020', 'title');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_191276671160f70bf4870d60_91467830', 'BodyMain');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "mainTemplate.tpl");
}
/* {block 'title'} */
class Block_134495439260f70bf486e491_73180020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_134495439260f70bf486e491_73180020',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ci-TodoApp - Új feladat<?php
}
}
/* {/block 'title'} */
/* {block 'BodyMain'} */
class Block_191276671160f70bf4870d60_91467830 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'BodyMain' => 
  array (
    0 => 'Block_191276671160f70bf4870d60_91467830',
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
                        <input name="txtFeladatCim" type="text" required="required" maxlength="50" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                    <label for="txaFeladatLeiras">Feladat részletei</label> 
                    <textarea name="txaFeladatLeiras" cols="40" rows="5" aria-describedby="txaFeladatLeirasHelpBlock" required="required" class="form-control"></textarea> 
                    <span id="txaFeladatLeirasHelpBlock" class="form-text text-muted">Írja ide a fealadat részleteit!</span>
                </div> 
                <div class="form-group">
                    <button type="submit" id="btnUjFelvitel" class="btn btn-primary" onclick="adatokMentese()">Új feladat rögzítése</button>
                    <a href="index.php" class="btn btn-secondary float-right">Mégsem</a>
                </div>
            </form>
        </div>
        <div class="row">
            <span class="d-none alert alert-success mb-3" id="res_message"></span>
        </div>
    </div>

    
        <?php echo '<script'; ?>
 type="text/javascript">
    
        
        <?php echo '</script'; ?>
>
    

<?php
}
}
/* {/block 'BodyMain'} */
}
