<?php
/* Smarty version 3.1.39, created on 2021-08-02 14:02:31
  from '/opt/lampp/htdocs/CodeIgniter/ci-TodoApp2/app/Views/mainTemplate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_61084147c49b53_44575113',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '244d005c70dd2cb0179cd176fa3ded0d4b26f1e5' => 
    array (
      0 => '/opt/lampp/htdocs/CodeIgniter/ci-TodoApp2/app/Views/mainTemplate.tpl',
      1 => 1627930945,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_61084147c49b53_44575113 (Smarty_Internal_Template $_smarty_tpl) {
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

        <!-- felugró ablakokhoz stiluslap -->
        <link rel = "stylesheet" type = "text/css" href = "css/jquery-confirm.min.css">


    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_116382588161084147c29de4_50752384', 'title');
?>
</title>

    </head>
    <body class="bg-light">
        <div class="mainContainer">
            <!-- Menü -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="Todo-FeladatLista">
                    <img src="images/logo.png" width="30" alt="Logo"> TodoApp</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['activemenu']->value == 'index') {?>active<?php }?>" href="Todo-FeladatLista">Kezdőlap</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['activemenu']->value == 'ujFeladat') {?>active<?php }?>" href="Todo-ujFeladat">Új feladat</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Feladat keresése" aria-label="Search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Keresés</button>
                    </form>
                </div>
            </nav>

                        <section class="BodyMain">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_176787856061084147c34e27_05137225', 'BodyMain');
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

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
        
        <?php echo '<script'; ?>
 src="scripts/global.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="scripts/jquery-confirm.min.js"><?php echo '</script'; ?>
>

    </body>
</html><?php }
/* {block 'title'} */
class Block_116382588161084147c29de4_50752384 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_116382588161084147c29de4_50752384',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ci-TodoApp - Főoldal<?php
}
}
/* {/block 'title'} */
/* {block 'BodyMain'} */
class Block_176787856061084147c34e27_05137225 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'BodyMain' => 
  array (
    0 => 'Block_176787856061084147c34e27_05137225',
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
                                                        <?php if ($_smarty_tpl->tpl_vars['feladatlista']->value) {?>
                                <p class="kivalasztott_feladat"><?php echo $_smarty_tpl->tpl_vars['feladatlista']->value[$_smarty_tpl->tpl_vars['feladat_id']->value]->fleiras;?>
</p>
                            <?php }?>
                        </div>
                    </div>
                <?php
}
}
/* {/block 'BodyMain'} */
}
