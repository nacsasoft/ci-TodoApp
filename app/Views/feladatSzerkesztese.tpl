{* Fősablon behúzása *}
{extends file="mainTemplate.tpl"}

{block name=title}ci-TodoApp - Feladat szerkesztése{/block}

    {block name=BodyMain}
    <h1 class="m-5">Feladat szerkesztése...</h1>

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
                        <input type="hidden" id="feladatID" value="">
                        <input name="txtFeladatCim" type="text" class="form-control" value="{$txtFeladatCim}">
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="txaFeladatLeiras">Feladat részletei</label>
                    <textarea name="txaFeladatLeiras" required minlength="2" cols="40" rows="5" aria-describedby="txaFeladatLeirasHelpBlock" class="form-control">{$txaFeladatLeiras}</textarea> 
                    <span id="txaFeladatLeirasHelpBlock" class="form-text text-muted">Írja ide a fealadat részleteit!</span>
                    <div>{$txaFeladatLeiras_error|default:""}</div>
                </div>
                <div class="form-group">
                    <button type="submit" id="btnModositas" class="btn btn-primary" onclick="ModositasJS()">Feladat módosítása</button>
                    <a id="modositasMegsem" href="javascript:void(0)" class="btn btn-secondary float-right">Mégsem</a>
                </div>
                <div class=""></div>
            </form>
        </div>
        <div class="row">
            <span class="d-none alert alert-success mb-3" id="res_message"></span>
        </div>
    </div>

    <script src="scripts/{$jsfile}.js"></script>

{/block}