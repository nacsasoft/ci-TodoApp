<?php
/* Smarty version 3.1.39, created on 2021-09-01 10:44:56
  from '/opt/lampp/htdocs/CodeIgniter/ci-TodoApp2/app/Views/mainTemplate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_612f9ff832aa40_02974501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '244d005c70dd2cb0179cd176fa3ded0d4b26f1e5' => 
    array (
      0 => '/opt/lampp/htdocs/CodeIgniter/ci-TodoApp2/app/Views/mainTemplate.tpl',
      1 => 1630511092,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_612f9ff832aa40_02974501 (Smarty_Internal_Template $_smarty_tpl) {
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1921383576612f9ff831bd21_52861868', 'title');
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
                        <li class="nav-item">
                            <a class="nav-link <?php if ($_smarty_tpl->tpl_vars['activemenu']->value == 'Szerkeszt') {?>active<?php }?>" href="Todo-Szerkesztes" onclick="feladatSzerkesztesAJAX()">Szerkesztés</a>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_583673085612f9ff8321dd4_90828645', 'BodyMain');
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
</html>
<?php }
/* {block 'title'} */
class Block_1921383576612f9ff831bd21_52861868 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_1921383576612f9ff831bd21_52861868',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ci-TodoApp - Főoldal<?php
}
}
/* {/block 'title'} */
/* {block 'BodyMain'} */
class Block_583673085612f9ff8321dd4_90828645 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'BodyMain' => 
  array (
    0 => 'Block_583673085612f9ff8321dd4_90828645',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <h1 class="m-5">Feladatlista...</h1>
                    
                    <div class="row ml-2 mr-2 justify-content-center">
                        <div class="col-md-3 border border-primary">
                                                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['feladatlista']->value, 'value');
$_smarty_tpl->tpl_vars['value']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->do_else = false;
?>
                                                                <p>
                                    <a id="feladatID<?php echo $_smarty_tpl->tpl_vars['value']->value->fid;?>
" class="feladatlista" onclick="feladatLista(<?php echo $_smarty_tpl->tpl_vars['value']->value->fid;?>
)"><?php echo $_smarty_tpl->tpl_vars['value']->value->fcim;?>
</a>
                                </p>
                            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                        </div>
                        <div class="col-md-6 border border-primary">
                                                        <?php if ($_smarty_tpl->tpl_vars['feladatlista']->value) {?>
                                <p class="kivalasztott_feladat">Válassz ki egy feladatot a bal oldali listából!!</p>
                            <?php }?>                                  
                        </div>
                        <input type="hidden" name="feladat_id" id="feladat_id" value="">
                        <div class="btn-group m-2 h-25" role="group" aria-label="Feladat műveletek">
                            <a href="" class="btn btn-secondary">Törlés</a>
                            <a href="" onclick="feladatSzerkesztesAJAX()" class="btn btn-secondary">Szerkesztés</a>
                            <a href="" class="btn btn-secondary">Küldés...</a>
                            <a href="Todo-ujFeladat" class="btn btn-secondary">Új feladat</a>
                        </div>
                    </div>
                <?php
}
}
/* {/block 'BodyMain'} */
}
