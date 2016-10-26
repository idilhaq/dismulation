<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Nuclear Disaster Simulation</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <!-- Bootstrap 3.3.6 -->
        <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="assets/css/AdminLTE.min.css">
        <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
        <link rel="stylesheet" href="assets/css/skins/_all-skins.min.css">
        <link rel="stylesheet" href="leaflet/leaflet.css" />
    </head>
    <body class="skin-blue">
        <div class="wrapper">
            <header class="main-header">
                <!-- Logo -->
                <a href="" class="logo">
                    <!-- mini logo for sidebar mini 50x50 pixels -->
                    <span class="logo-mini"><b>D</b>SM</span>
                    <!-- logo for regular state and mobile devices -->
                    <span class="logo-lg"><b>Disaster</b>Simulation</span>
                </a>
                <!-- Header Navbar: style can be found in header.less -->
                <nav class="navbar navbar-static-top">
                    <!-- Sidebar toggle button-->
                    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                        <span class="sr-only">Hide</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                </nav>
            </header>
            <!-- Left side column. contains the sidebar -->
            <aside class="main-sidebar">
                <!-- sidebar: style can be found in sidebar.less -->
                <section class="sidebar" style="height: auto;">
                    <!-- /.search form -->
                    <!-- sidebar menu: : style can be found in sidebar.less -->
                    <ul class="sidebar-menu">
                        <li class="header">CONFIGURATION</li>
                        <li class="treeview active">
                            <a href="#">
                                <i class="fa fa-dashboard"></i> <span>Disaster Type</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href=""><i class="fa fa-circle-o"></i> Nucler</a></li>
                                <li><a href=""><i class="fa fa-circle-o"></i> Typhoon</a></li>
                                <li><a href=""><i class="fa fa-circle-o"></i> Earthquake</a></li>
                                <li><a href=""><i class="fa fa-circle-o"></i> Bomb Explosion</a></li>
                            </ul>
                        </li>
                        <li class="treeview">
                            <a href="#">
                                <i class="fa fa-files-o"></i>
                                <span>Properties</span>
                                <span class="pull-right-container">
                                    <span class="label label-primary pull-right">4</span>
                                </span>
                            </a>
                            <ul class="treeview-menu">
                                <li><a href=""><i class="fa fa-circle-o"></i> Population</a></li>
                                <li><a href=""><i class="fa fa-circle-o"></i> Wind</a></li>
                                <li><a href=""><i class="fa fa-circle-o"></i> Weather</a></li>
                                <li><a href=""><i class="fa fa-circle-o"></i> Collapsed Sidebar</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <!-- /.sidebar -->
            </aside>

            <div class="content-wrapper" style="min-height: 1053px;">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        Disaster Simulation
                        <small>Evacuation Simulation Against Disaster</small>
                    </h1>
                </section>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-green">
                                <div class="inner">
                                    <h3>500</h3>

                                    <p>People Survive</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-bag"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-aqua">
                                <div class="inner">
                                    <h3>20<sup style="font-size: 20px">%</sup></h3>

                                    <p>Level of Damage</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-stats-bars"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-yellow">
                                <div class="inner">
                                    <h3>50</h3>

                                    <p>Remain on Site</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-xs-6">
                            <!-- small box -->
                            <div class="small-box bg-red">
                                <div class="inner">
                                    <h3>10</h3>

                                    <p>People Die</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-pie-graph"></i>
                                </div>
                                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                    <div class="callout callout-info">
                        <h4>Map</h4>
                        <div id="MyMap" style="width: 100%; height: 400px"></div>
                    </div>
                    <!-- Default box -->
                    <div class="box">
                        <div class="box-header with-border">
                            <h3 class="box-title">Information</h3>

                            <div class="box-tools pull-right">
                                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                                    <i class="fa fa-minus"></i></button>
                                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                                    <i class="fa fa-times"></i></button>
                            </div>
                        </div>
                        <div class="box-body">
                            <div class='box box-primary direct-chat direct-chat-primary'>
                                <div class='box-header with-border'>
                                    <h3 class='box-title'>User Tweets</h3>
                                </div>
                                <div class='box-body'>
                                    <div class='direct-chat-messages'>
                                        <?php
                                        ini_set('display_errors', 1);
                                        require_once('TwitterAPIExchange.php');

                                        /** Set access tokens here - see: https://dev.twitter.com/apps/ * */
                                        $settings = array(
                                            'oauth_access_token' => "69822768-fXmZWL35y4q7X54Uch3QDi2cnw8xikn7e27Szqam2",
                                            'oauth_access_token_secret' => "A2Kdh3W0s5EVOFYHIQm4tzJgJ8wRMPA5aFhnpOyeyGXt9",
                                            'consumer_key' => "mjoB5OdSwvYr02EB4EhO9HaLZ",
                                            'consumer_secret' => "wT0UzF1761MCrLSnd9B199jsxfIWUHBUBtIesOgJlnPnsf0Qfb"
                                        );

                                        /** Perform a GET request and echo the response * */
                                        /** Note: Set the GET field BEFORE calling buildOauth(); * */
                                        $url = 'https://api.twitter.com/1.1/search/tweets.json';
                                        $getfield = '?q=twice TT&count=10';
                                        $requestMethod = 'GET';
                                        $twitter = new TwitterAPIExchange($settings);
                                        $data = $twitter->setGetfield($getfield)
                                                ->buildOauth($url, $requestMethod)
                                                ->performRequest();

                                        $response = json_decode($data);

                                        foreach ($response->statuses as $tweet) {
                                            echo '</br>';
                                            $date = strtotime($tweet->created_at);

                                            echo "<div class='direct-chat-msg'>
                                                <div class='direct-chat-info clearfix'>
                                                <span class='direct-chat-name pull-left'>" . $tweet->user->screen_name . "</span>
                                                <span class='direct-chat-timestamp pull-right'>" . date('l M j \- g:i a', $date) . "</span>
                                            </div>
                                            <img class='direct-chat-img' src='" . $tweet->user->profile_image_url . "' alt='Message User Image'><!-- /.direct-chat-img -->
                                            <div class='direct-chat-text'>
                                                " . $tweet->text . "
                                            </div>
                                            <img class='img-responsive pad' src='" . $tweet->entities->media->media_url . "' alt='Message User Image'><!-- /.direct-chat-img -->
                                            ";
                                        }
                                        ?>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <div id="MyMap" style="width: 100%; height: 400px"></div>
            <div id="output"></div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->

<footer class="main-footer">
    <div class="pull-right hidden-xs">
        <b>Version</b> 2.3.6
    </div>
    <strong>Copyright © 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
    reserved.
</footer>
</div>        
<script src="leaflet/leaflet.js"></script>
<script src="assets/js/map.js"></script>
<!-- jQuery 2.2.3 -->
<script src="assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="assets/plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/app.min.js"></script>
<script>
    //pre-set attributes: initial zoom level and center point
    var zoom = 12;
    var lat = 39.1671;
    var long = -86.5343;

    var MyMap = L.map('MyMap').setView([lat, long], zoom);
    L.tileLayer('http://{s}.tile.osm.org/{z}/{x}/{y}.png', {
        maxZoom: 18,
        attribution: 'Map data &copy; <a href = "http://openstreetmap.org" > OpenStreetMap < /a> contributors, <a href = "http://creativecommons.org/licenses/by-sa/2.0/" > CC - BY - SA < /a>, Imagery © <a href = "http://cloudmade.com" > CloudMade < /a>'}).addTo(MyMap);

    $(document).ready(function ()
    {
        function parseXml(xml) {
            $(xml).find("point").each(function () {
                $(this).attr("name");
                $(this).find("lat").text();
                $(this).find("long").text();
                mapPoint = L.marker([$(this).find("lat").text(), $(this).find("long").text()]).addTo(MyMap);
                mapPoint.bindPopup($(this).attr("name"));
            });
        }

        $.ajax({
            type: "GET",
            url: "542Tutorial_01.xml",
            dataType: "xml",
            success: parseXml
        });
    });


</script>
</body>
</html>