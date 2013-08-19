<?php
include "../config.php";
$ip=$_SERVER['REMOTE_ADDR'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
i<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ip.Henchman21.net</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Theo Baschak">

    <!-- Le styles -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <link href="assets/css/ipfowl.css" rel="stylesheet">
    <link href="assets/css/bootstrap-responsive.css" rel="stylesheet">

    <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
                    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
                                   <link rel="shortcut icon" href="assets/ico/favicon.png">
  </head>

  <body>

  <a href="https://github.com/tbaschak/ipfowl"><img style=
  "position: absolute; top: 0; right: 0; border: 0;" src=
  "https://s3.amazonaws.com/github/ribbons/forkme_right_red_aa0000.png"
  alt="Fork me on GitHub"></a>

    <div class="container">
    
      <hr class="featurette-divider">
      <div class="featurette">
        <img class="featurette-image pull-left" src="assets/img/chicken.png">
        <h2 class="featurette-heading">Your IP address <span class="muted">is: </span></h2>
        <p class="lead"><?php echo $ip; ?></p>
        <p class="lead"><?php echo <<<EOF
<hr width=95% noshade>
<a href="$proto$site4">IPv4 Only</a> - 
<a href="$proto$site">IPv4/IPv6</a> -
<a href="$proto$site6">IPv6 Only</a>
EOF;
?>
	</p>
      </div>

      
      <hr class="featurette-divider">
      <!-- /END THE FEATURETTES -->

      <div class="footer">
        <p>&copy; Theo Baschak 2013</p>
      </div>

    </div> <!-- /container -->


    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap-transition.js"></script>
    <script src="assets/js/bootstrap-alert.js"></script>
    <script src="assets/js/bootstrap-modal.js"></script>
    <script src="assets/js/bootstrap-dropdown.js"></script>
    <script src="assets/js/bootstrap-scrollspy.js"></script>
    <script src="assets/js/bootstrap-tab.js"></script>
    <script src="assets/js/bootstrap-tooltip.js"></script>
    <script src="assets/js/bootstrap-popover.js"></script>
    <script src="assets/js/bootstrap-button.js"></script>
    <script src="assets/js/bootstrap-collapse.js"></script>
    <script src="assets/js/bootstrap-carousel.js"></script>
    <script src="assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>


