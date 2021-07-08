<?php
/* Smarty version 3.1.39, created on 2021-07-08 12:20:21
  from '/opt/lampp/htdocs/codeigniter/ci-TodoApp/app/Views/ujFeladat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60e733d51333d6_41507226',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '505ad94183b77c67016c4e6314200f01b4ff3933' => 
    array (
      0 => '/opt/lampp/htdocs/codeigniter/ci-TodoApp/app/Views/ujFeladat.tpl',
      1 => 1625764815,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60e733d51333d6_41507226 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14635863260e733d5131417_24640005', 'title');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_109667761960e733d5132462_04684344', 'BodyMain');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "mainTemplate.tpl");
}
/* {block 'title'} */
class Block_14635863260e733d5131417_24640005 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14635863260e733d5131417_24640005',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ci-TodoApp - Új feladat<?php
}
}
/* {/block 'title'} */
/* {block 'BodyMain'} */
class Block_109667761960e733d5132462_04684344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'BodyMain' => 
  array (
    0 => 'Block_109667761960e733d5132462_04684344',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1 class="m-5">Új feladat felvitele...</h1>

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

<span class="d-none alert alert-success mb-3" id="res_message"></span>




<?php echo '<script'; ?>
 type="text/javascript">
/* Új adatok vagy a módosított adatok mentése AJX-al */
var uj_szerkeszt;    //értéke lehet : "ujfelvitel" vagy "frissites"


function ujFelvitelJS() {
    uj_szerkeszt = 'ujfelvitel';
    adatokMentese();
    //$('#form')[0].reset();  //form adatok törlése  -ezt majd a sikeres művelet végén!!

}

function adatokMentese() {
    var url;

    if (uj_szerkeszt == 'ujfelvitel') {
        //új feladatot kell felvenni:
        url = 'TodoAppController/ujFelvitel';
    }

    // feladat hozzáadása AJAX-al:
    $('#btnUjFelvitel').html('Küldés...');
    $.ajax({
        url : url,
        type: "post",
        data: $('#myform').serialize(),
        dataType: "json",
        success: function( response )
        {
            console.log(response);
            console.log(response.success);
            $('#btnUjFelvitel').html('Új feladat rögzítése');
            $('#res_message').html(response.msg);
            $('#res_message').show();
            $('#res_message').removeClass('d-none');
 
            document.getElementById("myform").reset(); 
            
            setTimeout(function(){
                $('#res_message').hide();
                $('#res_message').html('');
                location.replace("index.php");
            },10000);
            
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
