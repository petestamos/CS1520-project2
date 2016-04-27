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

    <link href="css/bootstrap.min.css" rel="stylesheet" type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" type='text/css'>
    <link href="css/style.css" rel="stylesheet" type='text/css'>
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

<!--                          CONTACT SECTION
============================================================================ -->

    <?php
      if(isset($_POST['submit'])) {
        $receiver = "pes46@pitt.edu";
        $sender = $_POST['email'];
        $name = $_POST['name'];
        $subject = "Contact Submission";
        $message = $_POST['message'] . "\n\n" . $name;
        $header = "From: " . $from;
        mail($receiver,$subject,$message,$header);
        $website = new mysqli('localhost', 'root', '', 'website');
        if ($website->connect_error) {
          die("Connection failed: " . $website->connect_error);
        }
        $sql = "CREATE TABLE contacts (
               id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
               name VARCHAR(30) NOT NULL,
               email VARCHAR(50)";
        if (!($website->query($sql) === TRUE)) {
          echo "Error creating table: " . $website->error;
        }
        $sql = "INSERT INTO contacts (name, email)
                VALUES ('$name', '$sender')";
        if (!($website->query($sql) === TRUE)) {
          echo "Error: " . $sql . "<br>" . $website->error;
        }
        $website->close();
      }
    ?>

    <div class="container contact" id="contact_section">
        <h1 id="contactme">Have Your People Call My People</h3>
        <div class="contact-form">
          <form action="" method="POST">
            <div class="row">
              <input id="name" class="input" name="name" type="text" value="" size="29" placeholder="name"/>
            </div>
            <br />
            <div class="row">
              <input id="email" class="input" name="email" type="text" value="" size="29" placeholder="email"/>
            </div>
            <br />
            <div class="row">
              <textarea id="message" class="input" name="message" rows="5" cols="29" placeholder="message"></textarea>
            </div>
            <br />
            <input id="submit_button" type="submit" value="Send!" />
          </form>
        </div>
      </div>
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

    <script src='js/jquery-1.12.0.min.js' type='text/javascript'></script>
    <script src='js/script.js' type='text/javascript'></script>
  </body>
</html>
