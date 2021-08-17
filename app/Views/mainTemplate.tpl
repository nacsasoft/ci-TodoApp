{* Fő smarty sablon *}
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


    <title>{block name=title}ci-TodoApp - Főoldal{/block}</title>

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
                            <a class="nav-link {if $activemenu == 'index'}active{/if}" href="Todo-FeladatLista">Kezdőlap</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {if $activemenu == 'ujFeladat'}active{/if}" href="Todo-ujFeladat">Új feladat</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {if $activemenu == 'Szerkeszt'}active{/if}" href="#" onclick="feladatSzerkesztesAJAX()">Szerkesztés</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Feladat keresése" aria-label="Search">
                        <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Keresés</button>
                    </form>
                </div>
            </nav>
            
            

            {* Tartalom : *}
            <section class="BodyMain">                    
                {block name=BodyMain}
                    <h1 class="m-5">Feladatlista...</h1>
                    
                    <div class="row ml-2 mr-2 justify-content-center">
                        <div class="col-md-3 border border-primary">
                            {* itt lesznek a feladatok *}
                            {foreach $feladatlista as $value}
                                {* <p class="feladatlista" id="{$value->fid}">{$value->fcim}</p> *}
                                <p>
                                    <a id="feladatID{$value->fid}" class="feladatlista" onclick="feladatLista({$value->fid})" href="#">{$value->fcim}</a>
                                </p>
                            {/foreach}
                        </div>
                        <div class="col-md-6 border border-primary">
                            {* ide csak a kiválasztott feladat kerül *}
                            {if $feladatlista}
                                <p class="kivalasztott_feladat">Válassz ki egy feladatot a bal oldali listából!!</p>
                            {/if}                                  
                        </div>
                        <input type="hidden" name="feladat_id" id="feladat_id" value="">
                        <div class="btn-group m-2 h-25" role="group" aria-label="Feladat műveletek">
                            <a href="" class="btn btn-secondary">Törlés</a>
                            <a href="#" onclick="feladatSzerkesztesAJAX()" class="btn btn-secondary">Szerkesztés</a>
                            <a href="" class="btn btn-secondary">Küldés...</a>
                            <a href="Todo-ujFeladat" class="btn btn-secondary">Új feladat</a>
                        </div>
                    </div>
                {/block}
            </section>

            {* Lábléc *}
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.js"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

        <script src="scripts/global.js"></script>
        <script src="scripts/jquery-confirm.min.js"></script>

    </body>
</html>
