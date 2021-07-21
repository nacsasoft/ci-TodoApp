{* Fősablon kell nekünk *}
{extends file="mainTemplate.tpl"}

{block name=title}ci-TodoApp - Új feladat{/block}

    {block name=BodyMain}
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

    <script src="assets/{$jsfile}.js" type="text/javascript"></script>

{/block}