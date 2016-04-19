<?php
$status = file_get_contents($path.'status/apStatus.txt');
if($status == '9'){
  $ap_status = '<button type="button" class="btn btn-info">Stand Alone</button>
  <button type="button" class="btn btn-default">Lightweight</button>';
  $ap_button = '<a class="btn btn-danger btn-status" href="#" role="button"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span> OFF</a>';
}
else {
  $ap_status = '<button type="button" class="btn btn-default">Stand Alone</button>
  <button type="button" class="btn btn-info">Lightweight</button>';
  $ap_button = '<a class="btn btn-success btn-status" href="#" role="button"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> ON</a>';
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="img/App-Network-Monitor-icon.png">

    <title>Network Monitoring</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-inverse navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a class="navbar-brand" href="#">Network Monitoring</a>
            </div>
            
          </div>
        </nav>

      </div>
    </div>

    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->

    <div class="container marketing">

      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4">
          <img class="img-circle" src="img/controller.png" alt="Controller" width="140" height="140">
          <h2 class="padding-header">Controller</h2>
          <p class="detail">Controller is used in combination with the Lightweight Access Point Protocol to manage light-weight access points by the network administrator. The controller automatically handles the configuration of wireless access-points.</p>
          <p>
          <?=$ap_button;?>
          </p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="img-circle" src="img/switch.png" alt="Switch" width="140" height="140">
          <h2 class="padding-header">Switch</h2>
          <p class="detail">Switch is a computer networking device that connects devices together on a computer network, by using packet switching to receive, process and forward data to the destination device.</p>
          <p><a class="btn btn-success btn-status" href="#" role="button"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> ON</a></p>
        </div><!-- /.col-lg-4 -->

        <div class="col-lg-4">
          <img class="img-circle" src="img/accesspoint.png" alt="Access Point" width="140" height="140">
          <h2>Access Point</h2>
          <p><div class="btn-group" role="group" aria-label="...">
          <?=$ap_status;?>

            </div></p>
          <p class="detail">Access point is a networking hardware device that allows a Wi-Fi compliant device to connect to a wired network.</p>
          <p>
            <a class="btn btn-success btn-status" href="#" role="button"><span class="glyphicon glyphicon-ok-circle" aria-hidden="true"></span> ON</a>            
          </p>
        </div><!-- /.col-lg-4 -->
      </div><!-- /.row -->

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
