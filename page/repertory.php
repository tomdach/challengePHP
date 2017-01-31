<?php
 ini_set("display_erros",1);
 error_reporting(E_ALL);
session_start();
include_once("connexion.php");
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
    <link href="../css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../css/main.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
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

    <!-- Navigation -->
    <nav id="navb"  class="navbar navbar-inverse <?php
     echo $data['navb']?>" role="navigation">
        <div class="container">
            <!-- Left -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a  id="urls" class="navbar-brand" href="index.php">Start Bootstrap</a>
            </div>
            <!-- Right -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a id="urls" href="../index.php">Home</a>
                    </li>
                    <li>
                        <a id="urls" href="page/repertory.php">Repertory</a>
                    </li>
                    <li>
                        <a id="urls" href="about.php">About</a>
                    </li>
                    <li>
                        <a id="urls" href="contact.php">Contact</a>
                    </li>
                    <li> <?php  
                    if ($_SESSION['connect']==true) {
                        echo ' <li>
                        <a id="urls" href="admin.php">administration</a>
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
                                 action="login.php" accept-charset="UTF-8" id="login-nav">
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
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>


    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Repertory</h1>
                <ol class="breadcrumb">
                    <li><a href="../index.php">Home</a>
                    </li>
                    <li class="active">Portfolio</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Friends Row -->
        <div class="row">
           <?php
            $query = mysqli_query($cnx, "SELECT *, DATE_FORMAT(anniv,'%d/%m/%Y') AS dateanniv FROM form WHERE displayrepertory=1");
            while($data=mysqli_fetch_assoc($query ))
            {
              $age= floor((time()-strtotime($data["anniv"]))/60/60/24/365.224);  
            ?>
            <div class="col-md-4 img-portfolio">
                <img class="img-responsive img-hover" src="../img/<?= $data['img'] ?>">
                <h3><?= $data['pseudo'] ?></h3>
                <p><?= $age ?>ans <span><?= $data['dateanniv'] ?></span></p>

                <p><?= $data['mess'] ?></p>
                <h4><?= $data['jeux'] ?></h4>
                <table class="table table-striped  table-hover">
                    <thead>
                        <tr>
                            <th><?= $data['pseudo'] ?></td>
                            <th><?= $data['prenom'] ?></td>
                        </tr>
                    </thead>
                    <tr>
                        <td>Lorem</td>
                        <td>Ipsum</td>
                    </tr>
                </table>
            </div>
            <?php
            }
            ?>

        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; SimplonBSM 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="../js/bootstrap.min.js"></script>


</body>

</html>
