<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>{{{title}}}</title>

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
                      <phibo-timeline>
                          <property name="content">

                              <phibo-timeline-item title="An item" date="<?php echo date('Y-m-d H:i');?>" source="El Biniou">
                                  <property name="content">Car s'il suffisait de se tromper pour apprendre, le monde serait peuplé de génies</property>
                              </phibo-timeline-item>

                              <phibo-timeline-item title="An item" date="<?php echo date('Y-m-d H:i');?>" source="El Biniou">
                                  <property name="content">Car s'il suffisait de se tromper pour apprendre, le monde serait peuplé de génies</property>
                              </phibo-timeline-item>

                              <phibo-timeline-item title="An item" date="<?php echo date('Y-m-d H:i');?>" source="El Biniou">
                                  <property name="content">Car s'il suffisait de se tromper pour apprendre, le monde serait peuplé de génies</property>
                              </phibo-timeline-item>

                          </property>
                      </phibo-timeline>
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
</body>
</html>
