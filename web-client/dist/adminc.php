<?php 
require_once('./config.php'); 
require_once(TRANSLATIONS_SCRIPT); 
session_start();
?>
<html>
    <head>   
    
        <link rel="stylesheet" id="font-awesome-css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" type="text/css" media="screen"> 

        <link rel="stylesheet" href="styles/bootstrap/bootstrap.min.css">
        <link rel="stylesheet" href="styles/bootstrap/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="styles/leaflet/leaflet.css"/>
        <link rel="stylesheet" type="text/css" href="styles/bootstrap/ekko-lightbox.min.css"/>
        <link rel="stylesheet" type="text/css" href="styles/bootstrap/bootstrap-slider.min.css"/>
        <link rel="stylesheet" href="styles/languages.min.css">
        <link rel="stylesheet" type="text/css" href="styles/leaflet/leaflet.contextmenu.css"/>
        <?php
        include_once('html_headers.php');
        ?>
       
        <!-- ADD ACTION CONSTANTS SPECIFIC FOR DOMAIN -->
        <script src="generateActionNames.php"></script>
        <!-- ADD IMAGE CONSTANTS SPECIFIC FOR DOMAIN -->
        <script src="generateImagesPaths.php"></script>
	<!-- ADD JS CONFIG VARIABLES -->
        <script src="js_config.php"></script>
        
        <script src="scripts/jquery/jquery-3.2.0.min.js"></script>
        <script src="scripts/jquery/jquery.cookie.js"></script>
        <script src="scripts/bootstrap/bootstrap.min.js"></script>
        <script src="scripts/bootstrap/ekko-lightbox.min.js"></script>
        <script src="scripts/leaflet/leaflet.js"></script>
        <script src="scripts/logger.min.js"></script>
        <script src="scripts/readmore.min.js"></script>
        <script src="scripts/bootstrap/bootstrap-slider.min.js"></script>
        <script src="scripts/leaflet/leaflet.contextmenu.js"></script>
        <script src="scripts/Polyline.encoded.js"></script>
        <script src="scripts/graham_scan.min.js"></script>
        <script src="scripts/jquery.inputmask.bundle.min.js"></script>
        <script src="scripts/admin/scrollToTop.js"></script>

        <!-- Admin scripts -->
        <script src="scripts/admin/sortElements.js"></script>

        <script>

            $(function(){

                $( document ).ready(function() {

                    $("#seeMoreRecords").click();
                });

                var currentIndex = 0;

                $("#seeMoreRecords").click(function () { 

                    $(".maintr").slice(currentIndex, currentIndex + 10).fadeIn();
                    currentIndex += 10;

                    if (currentIndex >= $(".maintr").length){
                        $("#seeMoreRecords").fadeOut();
                    }
                });   


                $('.maintr').on("click", function () {
                   
                    $('.subtr').fadeOut();
                   
                    var subtr = $(this).next();              

                    subtr.is(":visible") ? subtr.fadeOut() : subtr.fadeIn();                 
                });   
               
            });            

        </script>
<style>
tr{
    display:none;
}
</style>
        <title>GeTS Web Client</title>
    </head>
    <body>
        <div class="main-container">
            <div class="main-header">
                <?php
                require_once('./widgets/Header.inc');
                echo get_navbar_depend_on_page(basename(__FILE__, '.php'));
                ?>
            </div>
            <div class="main-content">

                <div class="action-menu">
                    <div class="menu-admin-container">
                            <?php
                                require_once('./widgets/AdminsMenu.inc');
                                echo get_admin_menu_item(basename(__FILE__, '.php'));   
                            ?> 
                    </div>
                </div>
                <div class="main-action">
                  
                        <h1><?php echo getString('list-of-all-categories','List of all categories') ?></h1>
                        
                        <table class="table table-hover tablesorter">
                            <?php 
                               require_once('./actions/getCategoriesAdmin.php');
                            ?>
                        </table>
                        <input id="seeMoreRecords" type="button" value="<?php echo getString('more','More') ?>" class="btn btn-primary"/>

                        <h1><?php echo getString('adding-a-category','Adding a category') ?></h1>   
                           
                        <?php 
                               require_once('./widgets/AddCategory.inc');
                        ?>
                        <!--     -->
                         
                </div> 
            </div>
            <div class="scroll-top-wrapper ">
                <span class="scroll-top-inner">
                    <i class="fa fa-2x fa-arrow-circle-up"></i>
                </span>
            </div>
           <!--- <div class="main-footer">
                <?php
                /*require_once('./widgets/Footer.inc');
                //$xml = simplexml_load_file('./actions/getCategories.php');
                //$xml = require_once('./actions/getCategories.php');
                echo "zaza\n";
echo $xml;*/
              /*  foreach($xml->xpath("content/categories/category") as $i){
                    echo "ИМЯ:" . $i->name . "<br/> " ;  
                }*/
            ?>
            </div> -->
        </div>         
    </body>
</html>