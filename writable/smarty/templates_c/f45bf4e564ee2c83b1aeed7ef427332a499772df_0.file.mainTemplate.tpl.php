<?php
/* Smarty version 3.1.39, created on 2021-07-19 11:34:20
  from '/opt/lampp/htdocs/CodeIgniter/ci-TodoApp/app/Views/mainTemplate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f5a98c0af848_24985770',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f45bf4e564ee2c83b1aeed7ef427332a499772df' => 
    array (
      0 => '/opt/lampp/htdocs/CodeIgniter/ci-TodoApp/app/Views/mainTemplate.tpl',
      1 => 1626712455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f5a98c0af848_24985770 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">
        <!-- Font a BS-hez -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- sajat stiluslap -->
        <link rel = "stylesheet" type = "text/css" href = "css/style.css">

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/scripts/myscripts.js"><?php echo '</script'; ?>
>

    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_174823320260f5a98c08b9a6_86345233', 'title');
?>
</title>

    </head>
    <body class="bg-light">
        <div class="mainContainer">
            <!-- Menü -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" width="30" alt="Logo"> TodoApp</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"         data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['activemenu']->value == 'index') {?>active<?php }?>" href="index.php">Kezdőlap</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['activemenu']->value == 'ujFeladat') {?>active<?php }?>" href="ujFeladat">Új feladat</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </nav>

                        <section class="BodyMain">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17336960560f5a98c0954f7_68475015', 'BodyMain');
?>

            </section>

                        <section class="footer">
                <div class="container">
                    <div class="row">
                        <div class="col text-center">Copyright© 2021</div>
                        <div class="col text-center">by Nagy Csaba e.v.</div>
                    </div>
                </div>
            </section>

        </div>

    </body>
</html><?php }
/* {block 'title'} */
class Block_174823320260f5a98c08b9a6_86345233 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_174823320260f5a98c08b9a6_86345233',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ci-TodoApp - Főoldal<?php
}
}
/* {/block 'title'} */
/* {block 'BodyMain'} */
class Block_17336960560f5a98c0954f7_68475015 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'BodyMain' => 
  array (
    0 => 'Block_17336960560f5a98c0954f7_68475015',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <h1 class="m-5">Feladatlista...</h1>
                    <div class="row ml-2 mr-2 justify-content-center" style="min-height: 65vh;">
                        <div class="col-md-3  border border-primary">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feladatlista']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                <p class="feladatlista" id="<?php echo $_smarty_tpl->tpl_vars['value']->value->fid;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->fcim;?>
</p>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <div class="col-md-6 border border-primary">
                                                        <?php echo (($tmp = @$_smarty_tpl->tpl_vars['kivalasztott_feladat']->value)===null||$tmp==='' ? '' : $tmp);?>

                        </div>
                    </div>
                <?php
}
}
/* {/block 'BodyMain'} */
}
