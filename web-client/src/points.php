<?php
session_start();

?>
<html>
    <head>               
        <link rel="stylesheet" href="styles/bootstrap-3.2.0/bootstrap.min.css">
        <link rel="stylesheet" href="styles/bootstrap-3.2.0/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.css"/>
        <?php
        include_once('html_headers.php');
        ?>
        <script src="scripts/jquery/jquery-1.11.1.min.js"></script>
        <script src="scripts/bootstrap/bootstrap.min.js"></script>               
        <script src="http://cdn.leafletjs.com/leaflet-0.7.2/leaflet.js"></script>
        <script src="scripts/logger.min.js"></script>
        <script src="scripts/gets/models/Categories.Class.js"></script>
        <script src="scripts/gets/models/Points.Class.js"></script>
        <script src="scripts/gets/models/User.Class.js"></script>
        <script src="scripts/gets/models/Utils.Class.js"></script>
        <script src="scripts/gets/models/Map.Class.js"></script>
        <script src="scripts/gets/views/PointsMain.View.js"></script>
        <script src="scripts/gets/views/Map.View.js"></script>
        <script src="scripts/gets/views/PointInfo.View.js"></script>
        <script src="scripts/gets/views/PointAdd.View.js"></script>
        <script src="scripts/gets/views/Header.View.js"></script>
        <script src="scripts/gets/views/Message.View.js"></script>
        <script src="scripts/gets/controllers/PointsPage.Ctrl.js"></script>
        <script src="scripts/gets/controllers/Map.Ctrl.js"></script>    
        <script>
            $(document).ready(function() {
                Logger.useDefaults();
                MessageBox = new MessageView($(document).find('.main-container'));
                var _pointsPageCtrl = new PointsPage(document, window);
                _pointsPageCtrl.initPage();               
            });    
        </script>
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
                    <?php
                    require_once('./widgets/PointsMain.inc');
                    require_once('./widgets/PointInfo.inc');
                    if (isset($_SESSION['g2t_token'])) {
                        require_once('./widgets/PointEdit.inc');
                    }
                    ?>
                </div>
                <div id="map"></div> 
            </div>
        </div>       
    </body>
</html>