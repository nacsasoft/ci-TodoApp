<?php
/* Smarty version 3.1.39, created on 2021-07-19 11:20:40
  from '/opt/lampp/htdocs/CodeIgniter/ci-TodoApp/app/Views/ujFeladat.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60f5a658f005c9_56309841',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd16df1f8e4559330031bcc9b3784d74d91aa0fc9' => 
    array (
      0 => '/opt/lampp/htdocs/CodeIgniter/ci-TodoApp/app/Views/ujFeladat.tpl',
      1 => 1626711620,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60f5a658f005c9_56309841 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_207232595660f5a658efc373_06678338', 'title');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_120172465860f5a658efe009_26554476', 'BodyMain');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "mainTemplate.tpl");
}
/* {block 'title'} */
class Block_207232595660f5a658efc373_06678338 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_207232595660f5a658efc373_06678338',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
ci-TodoApp - Új feladat<?php
}
}
/* {/block 'title'} */
/* {block 'BodyMain'} */
class Block_120172465860f5a658efe009_26554476 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'BodyMain' => 
  array (
    0 => 'Block_120172465860f5a658efe009_26554476',
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
    
        //----------------------------------------------------------------------------------------------------
        /* Új adatok vagy a módosított adatok mentése AJAX-al */
        
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
                url = "TodoAppController/ujFelvitel";
            }
        
            // feladat hozzáadása AJAX-al:
            $('#btnUjFelvitel').html('Küldés...');
            $.ajax({
                url : url,
                type: "POST",
                data: $('#myform').serialize(),
                dataType: "json",
                success: function( response )
                {
                    $('#btnUjFelvitel').html('Új feladat rögzítése');
                    $('#res_message').html(response.msg);
                    $('#res_message').show();
                    $('#res_message').removeClass('d-none');
         
                    $("#myform").trigger("reset"); 
                    
                    setTimeout(function(){
                        $('#res_message').hide();
                        $('#res_message').html('');
                        location.replace("index.php");
                    },5000);
                    
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    alert('AJAX hiba!!');
                }
            });
        }

        //----------------------------------------------------------------------------------------------------
        
        <?php echo '</script'; ?>
>
    

<?php
}
}
/* {/block 'BodyMain'} */
}
