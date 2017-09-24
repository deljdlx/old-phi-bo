<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{{title}}}</title>



    <!-- include summernote -->
    <link rel="stylesheet" href="./vendor/SummerNote/dist/summernote.css">



    <?php include(__DIR__.'/css.php'); ?>
</head>

<body class="nav-md">
<div class="container body">
  <div class="main_container">
    <div class="col-md-3 left_col">
      <div class="left_col scroll-view">
        <?php include(__DIR__.'/fragment/left-bar/left-bar.php'); ?>
      </div>
    </div>

    <!-- top navigation -->
        <?php include(__DIR__.'/top-nav.php'); ?>
    <!-- /top navigation -->

    <!-- page content -->
    <div class="right_col" role="main">




      <!-- top tiles -->
            <div class="row tile_count">
              <?php include(__DIR__.'/fragment/top-details.php'); ?>
            </div>
      <!-- /top tiles -->

      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="dashboard_graph">
                <?php include(__DIR__.'/fragment/network-activities.php'); ?>
                <?php include(__DIR__.'/fragment/top-campain.php'); ?>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>


        <phibo-editor>
            <property name="content">


                <div class="row">
                    <div style="width: 300px;">
                        <phibo-card></phibo-card>
                    </div>
                    <div>
                        <?php include(__DIR__.'/fragment/timeline.php');?>
                    </div>

                </div>
            </property>
        </phibo-editor>


        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-6">
                <phibo-card></phibo-card>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <phibo-card></phibo-card>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-6">
                <phibo-card></phibo-card>
            </div>
            <div class="row">


      <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <?php include(__DIR__.'/fragment/app-usage.php'); ?>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <?php include(__DIR__.'/fragment/device-usage.php'); ?>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <?php include(__DIR__.'/fragment/quick-settings.php'); ?>
          </div>
      </div>


      <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
              <phibo-panel title="Timeline">
                  <property name="content">
                    <?php include(__DIR__.'/fragment/timeline.php');?>
                  </property>
              </phibo-panel>

          </div>


        <div class="col-md-8 col-sm-8 col-xs-12">
          <div class="row">
            <?php include(__DIR__.'/fragment/visitor-location.php');?>
          </div>
          <div class="row">


            <!-- Start to do list -->
            <?php include(__DIR__.'/fragment/todo-list.php');?>
            <!-- End to do list -->

            <!-- start of weather widget -->
            <?php include(__DIR__.'/fragment/weather.php');?>
            <!-- end of weather widget -->
          </div>
        </div>
      </div>
    </div>
    <!-- /page content -->

    <!-- footer content -->
        <?php include(__DIR__.'/footer.php')?>;
    <!-- /footer content -->
  </div>
</div>

<?php include(__DIR__.'/javascript.php'); ?>




<link rel="stylesheet" href="./vendor/codemirror/lib/codemirror.css">


<script src="./vendor/codemirror/lib/codemirror.js"></script>
<script src="./vendor/codemirror/mode/xml/xml.js"></script>
<script src="./vendor/codemirror/addon/selection/active-line.js"></script>

<link rel="stylesheet" href="./vendor/codemirror/theme/blackboard.css">
<link rel="stylesheet" href="./vendor/codemirror/theme/monokai.css">








</body>
</html>
