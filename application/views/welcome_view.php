<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Finnet - Marketing Finnet</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css">
    <link href="<?php echo base_url();?>/assets/agency/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>/assets/agency/vendor/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css'>
    <link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.0/css/bootstrapValidator.min.css'>

    <!-- Custom fonts for this template -->
    <link href="<?php echo base_url();?>/assets/agency/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="<?php echo base_url();?>/assets/agency/css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="font-size: 15px;">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Marketing Finnet</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#admin"  data-toggle="modal" data-target=".login-register-form">ADMIN</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#portfolio" data-toggle="modal" data-target=".login-register-form">CUSTOMER CARE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about" data-toggle="modal" data-target=".login-register-form">EVENT</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" data-toggle="modal" data-target=".login-register-form">SPONSORSHIP</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team" data-toggle="modal" data-target=".login-register-form">MARKETING KITS</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
              
    <!-- Header -->
    <header class="masthead">
    <?php
    if(!empty($notif)){
        echo '<div class="alert alert-danger">';
        echo $notif;
        echo '</div>';
      }
    ?>
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in">Welcome To Marketing Finnet!</div>
          <div class="intro-heading">It's Nice To Meet You</div>
        </div>
      </div>
        <div class="modal fade login-register-form" role="dialog" style="font-size: 20px">
          <div class="modal-dialog modal-sm">
              <div class="modal-content">
                  <div class="modal-header" style="color: #fed136; background-color: #222" >
                      <center>LOGIN
                      <button type="button" class="close" data-dismiss="modal">
                          <span class="glyphicon glyphicon-remove" style="color: white"></span>
                      </button>
                      </center>
                  </div>
                  <div class="modal-body" >
                      <div class="tab-content" >
                          <div id="login-form" >
                              <form action="<?php echo base_url();?>index.php/main/do_login" method="post">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Username" name="username" type="text" autofocus required>
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="" required>
                                    </div>
                                    <div class="form-group">
                                    <input type="submit" class="btn btn-md btn-success btn-block" value="LOGIN" name="submit">
                                    </div>
                                </fieldset>
                              </form>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>

    </header>

    <!-- Footer -->
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <span class="list-inline-i">Copyright &copy; PT. FINNET INDONESIA</span>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <span class="list-inline-i">Copyright &copy; Jayana Citra</span>
          </div>
        </div>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>/assets/agency/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>/assets/agency/vendor/popper/popper.min.js"></script>
    <script src="<?php echo base_url();?>/assets/agency/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="<?php echo base_url();?>/assets/agency/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="<?php echo base_url();?>/assets/agency/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo base_url();?>/assets/agency/js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="<?php echo base_url();?>/assets/agency/js/agency.min.js"></script>

  </body>

</html>
