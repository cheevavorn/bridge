<!DOCTYPE html>
<html lang="th">
    <head>
    <?php include("./partials/meta.php"); ?>
    <?php include("./partials/script-link-import.php"); ?>
    <style>
        * {
        font-family: 'Pridi', serif;
        }
        main {
            padding-top: 60px;
        }
        .purple-btn {
            background-color:#460D5C!important;
            border-color:#460D5C!important;
        }
    </style>
    </head>
    <body>
        <header>
        <?php include("./partials/nav-bar.php"); ?>
        </header>
        <main>
            <?php include("./partials/carousel.php"); ?>
            <br class="clearfix"/>
            <div class="container">
                <div class="row">
                    <div class="col col-sm-12 col-md-8 col-lg-8">
                        <?php include("./partials/bridge-info.php"); ?>
                        <br class="clearfix"/>
                        <?php include("./partials/news.php"); ?>
                        <br class="clearfix"/>
                        <?php include("./partials/map.php"); ?>
                    </div>
                    <div class="col col-sm-12 col-md-4 col-lg-4">
                        <?php include("./partials/bridge-president.php"); ?>
                        <br class="clearfix"/>
                        <?php include("./partials/bridge-logo.php"); ?>
                        <br class="clearfix"/>
                        <?php include("./partials/links.php"); ?>
                        <br class="clearfix"/>
                        <?php include("./partials/socials-link.php"); ?>
                    </div>
                </div>
            </div>
            <br/>
        </main>
        <footer class="footer">
        <?php include ("./partials/footer.php"); ?>
        </footer>
        <script src="./pages_script/index.js"></script>
    </body>
</html>