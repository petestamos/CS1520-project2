<!DOCTYPE html>
<html lang="EN">

<!--                         META INFORMATION
========================================================================== -->

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

<!--                        WEBSITE INFORMATION
========================================================================== -->

    <title>Peter Stamos | Web Development</title>
    <meta name="author" content="Peter Stamos">
    <meta name="description" content="A personal webpage, full of personal things.">
    <meta name="keywords" content="keywords go here">
    <link rel="canonical" href="https://pestamos.com">

<!--                         FONT STYLESHEETS
========================================================================== -->

    <link href='https://fonts.googleapis.com/css?family=Raleway:400,900,700,200,500' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>

<!--                    CSS / BOOTSTRAP STYLESHEETS
========================================================================== -->

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" >
    <link href="css/style.css" rel="stylesheet">
  </head>

<!--                          TOP NAVIGATION
========================================================================== -->

  <body>
    <nav class="navbar navbar-default navbar-fixed-top slide-down">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" id="ps">Peter Stamos | Web Development</a>
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>

<!--                            LANDING PAGE
============================================================================ -->

    <div class="jumbotron"></div>
    <div class="cover-text">
      <h1 id="top">Hello, my name is Peter Stamos and I'm a</h1>
      <h1 id="middle">Software Engineer</h1>
      <h1 id="bottom">specializing in Front-End Web Development</h1>
      <br/>
      <p><a href="#" class="myButton">Click me after you uncomment the javascript!</a></p>
    </div>

<!--                          BOTTOM NAVIGATION
========================================================================== -->

    <nav class="navbar nav-bottom navbar-default navbar-fixed-bottom">
      <div class="container-fluid">
        <div class="navbar-footer">
          <ul class="social pull-left">
            <li><a target="_blank" href="https://twitter.com/northernlodges"><i class="fa fa-twitter-square"></i></a></li>
            <li><a target="_blank" href="https://github.com/petestamos"><i class="fa fa-github-square"></i></a></li>
            <li><a target="_blank" href="https://linkedin.com/in/pestamos"><i class="fa fa-linkedin-square"></i></a></li>
          </ul>
          <p id="legal" class="pull-right">&copy; 2016 Peter Stamos</p>
        </div>
      </div>
    </nav>

<!--                     JAVASCRIPT / JQUERY SCRIPTS
========================================================================== -->

    <script type='text/javascript' src="js/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="js/script.js"></script>
    <!-- Comment out the above scripts and uncomment these ones for a suprise
         when you "Click Me! on the landing page."
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.3/jquery.min.js"></script>
    <script src="js/jquery.raptorize.1.0.js"></script>
    <script type="text/javascript">
      $(window).load(function() {
        $('.myButton').raptorize();
      });
    </script>
    -->
  </body>
</html>
