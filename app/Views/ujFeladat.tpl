{* Fősablon kell nekünk *}
{extends file="mainTemplate.tpl"}

{block name=title}ci-TodoApp - Új feladat{/block}

    {block name=BodyMain}
    <h1 class="m-5">Új feladat felvitele...</h1>

    <form action="#" id="myform" class="col-lg-8">
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
            <button type="button" id="btnUjFelvitel" class="btn btn-primary" onclick="ujFelvitel()">Új feladat rögzítése</button>
            <a href="index.php" class="btn btn-secondary float-right">Mégsem</a>
        </div>
</form>


{literal}

<script type="text/javascript">
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
        url = 'TodoAppController/ujFelvitel';
    }

    // feladat hozzáadása AJAX-al:
    $.ajax({
        url : url,
        headers: {'X-Requested-With': 'XMLHttpRequest'},
        type: "POST",
        data: { "txtFeladatCim": "nacsa", "txaFeladatLeiras": "DUMADUMA" },          //$('#myform').serialize(),
        contentType: 'application/json; charset=utf-8',
        dataType: "JSON",
        success: function(data)
        {
            //if success close modal and reload ajax table
            //$('#modal_form').modal('hide');
            alert(data);
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
</script>

{/literal}

{/block}