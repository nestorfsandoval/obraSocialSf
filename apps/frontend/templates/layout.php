<!doctype html>
<?php $lang = $sf_user->getCulture();?>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="<?php echo $lang;?>"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="<?php echo $lang;?>"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="<?php echo $lang;?>"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php echo $lang;?>"> <!--<![endif]-->
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>

    <!-- more metas -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width">

    <!-- include just the script loader, inlined -->
    <?php include_partial('default/script_loader'); ?>
    
    <!-- include base js files, in parallel -->
    <?php include_partial('default/mpProjectPlugin_js_assets'); ?>
    
    <?php include_partial('default/mpProjectPlugin_css_assets'); ?>
    <?php include_stylesheets() ?>
  </head>
  <body>
  <!--[if lt IE 8]><p class=chromeframe>Your browser is <em>ancient!</em> <a href="http://browsehappy.com/">Upgrade to a different browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to experience this site.</p><![endif]-->
    <!-- sample navbar -->
    <?php /*
    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container-fluid">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="nav-collapse">
          <?php if(!include_slot('layout_header')):?>
            <a class="brand" href="#">Aladeen Conducccion</a>
            <?php include_partial('default/menu');?>
          <?php endif;?>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>
    */ ?>
    <div class="navbar navbar-fixed-top">
                <div class="navbar-inner">
                    <div class="container">
                    <ul class="nav">
                        <li ><a href="index.php">Afiliados</a></li>
                        <li ><a href="index.php?op=1">Prestadores</a></li>
                        <li ><a href="index.php?op=2">Planes</a></li>
                    </ul>
                    </div>
                </div>    
            </div>
    <div class="container-fluid">
      <?php echo $sf_content ?>
      <hr>
      <footer>
      <?php if(!include_slot('layout_footer')):?>
        <p>&copy; TiranoSoft</p>
      <?php endif;?>
      </footer>
    </div> <!-- /container -->
    <!-- include every other js files in the project -->
    <?php include_javascripts() ?>
  </body>
</html>
