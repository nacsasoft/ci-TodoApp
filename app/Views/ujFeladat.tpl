{* Fősablon kell nekünk *}
{extends file="mainTemplate.tpl"}

{block name=title}ci-TodoApp - Új feladat{/block}

    {block name=BodyMain}
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


{literal}

<script type="text/javascript">
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
</script>

{/literal}

{/block}