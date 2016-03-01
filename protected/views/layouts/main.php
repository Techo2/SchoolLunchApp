<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=100%; initial-scale=1; maximum-scale=1; minimum-scale=1; user-scalable=no;"/>
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="shortcut icon" href="/images/favicon.ico">
        <title>EAT</title>

        <!-- Bootstrap Core CSS -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" type="text/css">

        <!-- Custom Fonts -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/font-awesome/css/font-awesome.css" type="text/css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/creative.css" type="text/css">
        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css" type="text/css">

        <!-- Angularjs -->


        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/angular.min.js"></script>

        <!-- jQuery -->
        <script  src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>

        <!-- Captcha -->
        <script type="text/javascript" src="/js/validate.js"></script>
        <script type="text/javascript" src="/js/captcha.js"></script>
        <script type="text/javascript" src="/js/modernizr-custom.js"></script>

        <!--[if lt IE 9]>
<link href="css/bootstrapie8.css" rel="stylesheet">
<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<![endif]-->
    <!--<![endif]-->
    </head>
    
    <body id="page-top" ng-app="NationalSchoolLuchProgram" ng-controller="childinformationController" data-ng-init="init()" >       
        <nav id="mainNav" class="navbar-default " style="left:0;right:0; z-index:99;left:0;right:0;top:0;">
            <div class="container" >
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <a class="navbar-brand" ><img src="/images/logo.png" class="img-responsive" alt="EAT"></a>

                    <!-- /.navbar-collapse --> 
                  
                </div>
               
            </div>
            <div class="top_menu">
                <ul>
                   <li id="MoveApp" style="display: block;" ng-hide="Applicant" class="menu1"></li>
                   <li id="Movechild" style="display: block;" ng-hide="Child" class="menu2"></li>
                   <span ng-hide="applicantInfo.progrmmeoptions == 'Yes'">
                       <li  style="display: block;" id="Movehouse" ng-hide="portfolio" class="menu3"></li></span>
                   <li style="display: block;" id="Movegen" ng-hide="contact" class="menu4"></li>
                </ul>
            </div>
            
        </nav>
        
        <?php echo $content; ?>
        <footer class="footer_box navbar-bottom">
            
            <div class="container">
                <div class=" pull-left footer_left"> 
       <ul class="links">

                    
                </ul>
                </div>
           </div>
        </footer>
           
        <script type="text/javascript">
        $(document).ready(function(){
                    $("#MoveApp").click(function(){
            $('html, body').animate({
                
                scrollTop: $("#applicantInfo").offset().top
            });
        });
                $("#Movechild").click(function(){
            $('html, body').animate({
                
                scrollTop: $("#child").offset().top
            });
        });
                $("#Movehouse").click(function(){
            $('html, body').animate({
                
                scrollTop: $("#househ").offset().top
            });
        });
                $("#Movegen").click(function(){
            $('html, body').animate({
                
                scrollTop: $("#gen").offset().top               
            });
        });
        });
        
            </script>
   <script type="text/javascript">

$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>
        <!-- Bootstrap Core JavaScript -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script><!-- Realated for script for header fix and scroll down code -->

        <!-- Plugin JavaScript -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.easing.min.js"></script><!-- Realated for script for header fix and scroll down code -->
        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.fittext.js"></script><!-- Use for fit header text  and logo fix -->

        <!-- Custom Theme JavaScript -->
<!--        <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/creative.js"></script>-->

    </body>
    
    <script src="/js/commonangular.js" ></script>
</html>


