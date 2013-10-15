<!DOCTYPE html>
<html lang="<?php echo Yii::app()->language;?>">
  <head>
    <meta charset="<?php echo Yii::app()->charset;?>">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
   <!-- Le fav and touch icons -->
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/bootstrap-responsive.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/main.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/font-awesome.min.css">
    <link href="<?php echo Yii::app()->theme->baseUrl; ?>/css/shopfrog.css" rel="stylesheet" media="screen">   
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/respond.min.js"></script>
    <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>    
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/modernizr.min.js"></script> 
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/imagesloaded.min.js"></script>  
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.masonry.min.js"></script>  
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.rateit.min.js"></script>   
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/jquery.magnific-popup.min.js"></script>       
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/bootstrap.js"></script>
    <script src="<?php echo Yii::app()->theme->baseUrl; ?>/js/shopfrog.js"></script>
  
    <link rel="shortcut icon" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php echo Yii::app()->theme->baseUrl;?>/ico/apple-touch-icon-57-precomposed.png">


  </head>

  <body>
    <div class="container" id="app">
      <?php echo $content; ?>
    </div><!--/.fluid-container-->
     <!--  <footer class="footer">
      <div class="container" style="padding-left: 20px;padding-right: 20px">
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>Copyright &copy; <?php echo date('Y'); ?> by My Company. 
          All Rights Reserved.</p>
        <ul class="footer-links">
          <li><?php #echo Yii::powered(); ?></li>
        </ul>
      </div>
    </footer>
 -->
  </body>
</html>
