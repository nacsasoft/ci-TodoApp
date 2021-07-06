<?php
/* Smarty version 3.1.39, created on 2021-07-06 12:43:03
  from '/opt/lampp/htdocs/codeigniter/ci-TodoApp/app/Views/ujFeladat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e49627932e56_42676225',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '505ad94183b77c67016c4e6314200f01b4ff3933' => 
    array (
      0 => '/opt/lampp/htdocs/codeigniter/ci-TodoApp/app/Views/ujFeladat.tpl',
      1 => 1625593378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e49627932e56_42676225 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_100056109860e49627931021_60086929', 'title');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_157798067060e49627931f62_38484354', 'BodyMain');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "mainTemplate.tpl");
}
/* {block 'title'} */
class Block_100056109860e49627931021_60086929 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_100056109860e49627931021_60086929',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ci-TodoApp - Új feladat<?php
}
}
/* {/block 'title'} */
/* {block 'BodyMain'} */
class Block_157798067060e49627931f62_38484354 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'BodyMain' => 
  array (
    0 => 'Block_157798067060e49627931f62_38484354',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 class="m-5">Új feladat felvitele...</h1>

    <form action="#" id="form" class="col-lg-8">
        <div class="form-group">
            <label for="txtFeladatCim">Feladat címe</label> 
                <div class="input-group">
                    <div class="input-group-prepend">
                        <div class="input-group-text">
                            <i class="fa fa-address-card"></i>
                        </div>
                    </div> 
                <input id="txtFeladatCim" name="txtFeladatCim" type="text" required="required" maxlength="50" class="form-control">
            </div>
        </div>
        <div class="form-group">
            <label for="txaFeladatLeiras">Feladat részletei</label> 
            <textarea id="txaFeladatLeiras" name="txaFeladatLeiras" cols="40" rows="5" aria-describedby="txaFeladatLeirasHelpBlock" required="required" class="form-control"></textarea> 
            <span id="txaFeladatLeirasHelpBlock" class="form-text text-muted">Írja ide a fealadat részleteit!</span>
        </div> 
        <div class="form-group">
            <button type="submit" id="btnUjFelvitel" class="btn btn-primary" onclick="ujFelvitel()">Új feladat rögzítése</button>
            <a href="index.php" class="btn btn-secondary float-right">Mégsem</a>
        </div>
</form>




<?php echo '<script'; ?>
 type="text/javascript">
/* Új adatok vagy a módosított adatok mentése AJX-al */
var uj_szerkeszt;    //értéke lehet : "ujfelvitel" vagy "frissites"


function ujFelvitel() {
    uj_szerkeszt = 'ujfelvitel';
    adatokMentese();
    //$('#form')[0].reset();  //form adatok törlése  -ezt majd a sikeres művelet végén!!

}

function adatokMentese() {
    var url;

    if (uj_szerkeszt == 'ujfelvitel') {
        //új feladatot kell felvenni:
        url = 'ujFelvitel';
        //url = "index.php/ujFelvitel";
    }

    // feladat hozzáadása AJAX-al:
    $.ajax({
        url : 'TodoAppController/ujFelvitel',
        headers: {'X-Requested-With': 'XMLHttpRequest'},
        type: "POST",
        data: $('#form').serialize(),
        contentType: 'application/json; charset=utf-8',
        dataType: "JSON",
        success: function(data)
        {
            //if success close modal and reload ajax table
            //$('#modal_form').modal('hide');
            console.log("Pure jQuery Pure JS object");
            //console.log( returnedJson );
            location.replace("index.php");
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error adding / update data');
        }
    });
}
<?php echo '</script'; ?>
>



<?php
}
}
/* {/block 'BodyMain'} */
}
