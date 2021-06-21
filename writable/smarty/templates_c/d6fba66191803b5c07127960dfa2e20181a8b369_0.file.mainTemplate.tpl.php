<?php
/* Smarty version 3.1.39, created on 2021-06-21 14:19:42
  from '/opt/lampp/htdocs/codeigniter/ci-TodoApp/app/Views/mainTemplate.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d0e64e522851_01299995',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6fba66191803b5c07127960dfa2e20181a8b369' => 
    array (
      0 => '/opt/lampp/htdocs/codeigniter/ci-TodoApp/app/Views/mainTemplate.tpl',
      1 => 1624303181,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d0e64e522851_01299995 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css">

        <!-- sajat stiluslap -->
        <link rel = "stylesheet" type = "text/css" href = "css/style.css">

        <title>Hello, world!</title>
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
                            <a class="nav-link active" href="index.php">Kezdőlap<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_162851844060d0e64e5214d5_04862401', 'BodyMain');
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
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 src="scripts/myscripts.js"><?php echo '</script'; ?>
>

    </body>
</html><?php }
/* {block 'BodyMain'} */
class Block_162851844060d0e64e5214d5_04862401 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'BodyMain' => 
  array (
    0 => 'Block_162851844060d0e64e5214d5_04862401',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <h1 class="text-uppercase">Hello, world!</h1>
                <?php
}
}
/* {/block 'BodyMain'} */
}
