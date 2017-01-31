<?php
 ini_set("display_erros",1);
 error_reporting(E_ALL);
session_start();
include_once("page/connexion.php");
$ress = mysqli_query($cnx,"SELECT * FROM `couleur` WHERE 1");
$data =  mysqli_fetch_assoc($ress);

?>


<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Challenge PHP de </title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/main.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<style>
@font-face{
    font-family:anton;
    
    src: url(fonts/anton/Anton-Regular.ttf);


}
 @font-face{
    font-family:biter;
    
    src: url(fonts/biter/Bitter-Bold.ttf);


}   
@font-face{
    font-family:vt;
    
    src: url(fonts/vt/VT323-Regular.ttf);


}

h1,h2,h3,h4{
    color: <?php echo $data['titre']

  ?>;
   font-family: <?php echo $data ['police'] ?>;

}
#navb{
 background-color: <?php echo $data ['navbar']
    ?>;
   
   <?php if ($data ['navb']=="") {
       echo " margin-top:-50px;
    margin-bottom: 0px;";
   }
    ?>


    
}

#urls{
   color: <?php echo $data ['urls']  ?>;
}
#btn11{
     background-color: <?php echo $data ['boutton']  ?>;

}














</style>
<body>

    <!-- Navigation -->



    <nav id="navb"  class="navbar navbar-inverse <?php
     echo $data['navb']?>" role="navigation">
        <div class="container">                                                                                                                                                                                                                                                                                                      
            <!-- Left -->
            <div  class="navbar-header">
                <button   type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="urls" class="navbar-brand" href="index.php">Start Bootstrap</a>
            </div>
            <!-- Right -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a  id="urls"  href="index.php">Home</a>
                    </li>
                    <li>
                        <a id="urls" href="page/repertory.php">Repertory</a>
                    </li>
                    <li>
                        <a id="urls"  href="page/about.php">About</a>
                    </li>
                    <li>
                        <a  id="urls" href="page/contact.php">Contact</a>

                    </li>
                    <li> <?php  
                    if ($_SESSION['connect']==true) {
                        echo ' <li>
                        <a id="urls" href="page/admin.php">administration</a>
                    </li> ';
                    }
                    elseif ($_SESSION['connect']==false) {
                       echo' <a  href="#" class="dropdown-toggle" data-toggle="dropdown"><b id="urls">Login</b> <span class="caret"></span></a>
            <ul id="login-dp" class="dropdown-menu">
                <li>
                     <div class="row">
                            <div class="col-md-12">
                                Login via
                                <div class="social-buttons">
                                    <a href="#" class="btn btn-fb"><i class="fa fa-facebook"></i> Facebook</a>
                                    <a href="#" class="btn btn-tw"><i class="fa fa-twitter"></i> Twitter</a>
                                </div>
                             
                                 or
                                 <form class="form" role="form" method="post" 
                                 action="page/login.php" accept-charset="UTF-8" id="login-nav">
                                        <div class="form-group">
                                             
                                             <input type="text" class="form-control" id="username" placeholder="username" name="username" required>
                                        </div>
                                        <div class="form-group">
                                             <label class="sr-only" for="exampleInputPassword2">Password</label>
                                             <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
                                             <div class="help-block text-right"><a href="">Forget the password ?</a></div>
                                        </div>
                                        <div class="form-group">
                                             <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                        </div>
                                        <div class="checkbox">
                                             <label>
                                             <input type="checkbox"> keep me logged-in
                                             </label>
                                        </div>
                                 </form>
                            </div>
                            <div class="bottom text-center">
                                New here ? <a href="#"><b>Join Us</b></a>
                            </div>
                     </div>
                </li>
            </ul>
        </li>
      </ul>';


  }
                   



                    ?>
                         
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Header Carousel -->
    <header id="myCarousel" class="carousel slide">
        <!-- Indic -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('img/slide1.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Title 1</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slide2.jpg');"></div>
                <div class="carousel-caption">
                    <h2>Title 2</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('img/slide3.jpg');"></div>
                <div class="carousel-caption">
                    <h2>title 3</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a id="urls" class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a id="urls" class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>

    <!-- Page Content -->
    <div class="container">

        <!-- Icons Section -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Welcome !
                </h1>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-check"></i> Lorem ipsum7</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a id="btn11"  href="#" class="btn btn-default"><span id="urls">Learn More</span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-gift"></i> Dolor Sit</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a id="btn11"  href="#" class="btn btn-default"><span id="urls">Learn More </span></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4><i class="fa fa-fw fa-compass"></i> Amet</h4>
                    </div>
                    <div class="panel-body">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque, optio corporis quae nulla aspernatur in alias at numquam rerum ea excepturi expedita tenetur assumenda voluptatibus eveniet incidunt dicta nostrum quod?</p>
                        <a id="btn11" id="urls" href="#" class="btn btn-default"><span id="urls">Learn More</span></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.row -->

        <!-- Repertory Section -->
        <div class="row">
            <div class="col-lg-12">
                <h2 class="page-header">Last creation</h2>
            </div>
            <div class="portfolio-item col-md-4 col-sm-6">
                <a href="page/repertory.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/portfolio1.jpg" alt="">
                </a>
            </div>
            <div class="portfolio-item col-md-4 col-sm-6">
                <a href="page/repertory.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/portfolio1.jpg" alt="">
                </a>
            </div>
            <div class="portfolio-item col-md-4 col-sm-6">
                <a href="page/repertory.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/portfolio1.jpg" alt="">
                </a>
            </div>
            <div class="portfolio-item col-md-4 col-sm-6">
                <a href="page/repertory.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/portfolio1.jpg" alt="">
                </a>
            </div>
            <div class="portfolio-item col-md-4 col-sm-6">
                <a href="page/repertory.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/portfolio1.jpg" alt="">
                </a>
            </div>
            <div class="portfolio-item col-md-4 col-sm-6">
                <a href="page/repertory.php">
                    <img class="img-responsive img-portfolio img-hover" src="img/portfolio1.jpg" alt="">
                </a>
            </div>
        </div>
        <!-- /.row -->


        <hr>

        <!-- Call to Action Section -->
        <div class="well">
            <div class="row">
                <div class="col-md-8">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias, expedita, saepe, vero rerum deleniti beatae veniam harum neque nemo praesentium cum alias asperiores commodi.</p>
                </div>
                <div class="col-md-4">
                    <a id="btn11" class="btn btn-lg btn-default btn-block" href="#"><span id="urls">Call to Action</span></a>
                </div>
            </div>
        </div>

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p id="zomb">Copyright &copy; SimplonBSM 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $('.carousel').carousel({
            interval: 5000
        })
    </script>

</body>

</html>
