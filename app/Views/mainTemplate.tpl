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

    <title>{block name=title}ci-TodoApp - Főoldal{/block}</title>

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
                            <a class="nav-link {if $activemenu == 'index'}active{/if}" href="index.php">Kezdőlap</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {if $activemenu == 'ujFeladat'}active{/if}" href="ujFeladat">Új feladat</a>
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
                    <div class="row ml-2 mr-2 justify-content-center" style="min-height: 65vh;">
                        <div class="col-md-3  border border-primary">
                            {* itt lesznek a feladatok *}
                            {foreach $feladatlista as $value}
                                <p class="feladatlista" id="{$value->fid}">{$value->fcim}</p>
                            {/foreach}
                        </div>
                        <div class="col-md-6 border border-primary">
                            {* ide csak a kiválasztott feladat kerül *}
                            {$kivalasztott_feladat|default:""}
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

    </body>
</html>