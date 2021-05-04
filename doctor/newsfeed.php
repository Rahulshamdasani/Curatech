<?php 
include('../connect.php');
session_start();
if(!isset($_SESSION['username'])){
    header("location: ../index.php");
}
$user=$_SESSION['username'];
 ?>

<!doctype html>
<html lang="en">
    <head>

    
        <meta charset="utf-8">
        <title>CuraTech</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300">
        <link href='http://fonts.googleapis.com/css?family=PT+Sans' rel='stylesheet' type='text/css'>
        <link href="http://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/style.css">
        <link rel="stylesheet" href="../assets/css/animate.min.css">
        <link rel="stylesheet" type="text/css" media="all" href="../assets/css/style-projects.css">
        

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="../assets/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

        <style type="text/css">
            .animated {
                -webkit-transition: height 0.2s;
                -moz-transition: height 0.2s;
                transition: height 0.2s;
            }
        </style>

        <script src='https://code.jquery.com/jquery-2.1.3.min.js'></script>
    </head>


    <body>
<?php
    $username = "root";
    $password = "";
    $servername = "localhost";
    $dbname = "test";
    
    $con = mysqli_connect($servername,$username,$password,$dbname) or die("\n Connection Failed !" . $con->connect_error);
include('../sosf.php');

?>
<a href="../messaging/message.php"><img src="../chat.png" style="float: right; z-index: 20; position: fixed; bottom: 75px; right: 30px; width: 7%;"></a>
    <!-- Header -->
         <div style="margin: 0px; width: 100px;"><?php include('../language_support.php');?></div>
    <nav id="navbar-section" class="navbar navbar-default navbar-static-top navbar-sticky" role="navigation">
        <div class="container">
        
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand wow fadeInDownBig" href="index.php"><img src="../assets/img/slider/Office.png" width="100" alt="Office"></a>      
            </div>
        
            <div id="navbar-spy" class="collapse navbar-collapse navbar-responsive-collapse">
                <ul class="nav navbar-nav pull-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="blog.php">Blog</a>
                    </li>
                    <li class="active">
                        <a href="newsfeed.php">Prescribe</a>
                    </li>
                    <li>
                        <a href="indexsearch.php">Search Medicine</a>
                    </li>
                    <li>
                        <a href="contact.php"><span>Contact</span></a>
                    </li>
                    <li>
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <?php echo $user; ?> </a>

                          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="padding: 10px; line-height: 45px;">
                            <a class="dropdown-item" href="../docprofile.php?user=<?php echo $user; ?>">View Profile</a><br>
                            <a class="dropdown-item" href="../logout.php">Log Out</a>
                          </div>
                    </li>
                </ul>         
            </div>
        </div>
    </nav>

    <div class="row container-kamn">  
        <img src="../assets/img/slider/slide9.jpg" width="100%" class="blog-post" alt="Feature-img" align="right" width="100%"> 
    </div>

    <!--End Header -->

    <!-- Main Container -->

    <div class="container">
    <!-- <div class="row">
    <div class="col-lg-2"></div>    
    <div class="col-lg-8">
        <div class="well well-lg">
            <div class="media1">
                <a class="pull-left" href="#">
                  <img class="media-object img-circle" width="80px" src="../profilepic/<?php echo $user; ?>.jpg" alt="">
                </a>
            <div class="media-body">                                    
                <div class="form-group" style="padding:12px;">

                    <form action="patient-feed.php" method="post" id="blogshare">
                        <input class="form-control" type="text" name="title" id="title" placeholder="Title"><br>
                        <textarea class="form-control animated" name="msg" id="msg" placeholder="Update your status"></textarea>
                        <button class="btn btn-info pull-right" style="margin-top:10px" type="submit" id="share">Share</button>
                        <span class="success" id="result"></span>
                        <script src="insert.js"></script>
                    </form>

                    <form action="patient-feed.php" method="post" id="feedshare">
                        <textarea class="form-control animated" name="msg_patient" id="msg_patient" placeholder="Want to consult a Doctor?"></textarea>
                        <button class="btn btn-info pull-right" style="margin-top:10px" type="submit" id="post_patient">Post</button>
                        <script src="feedinsert.js"></script>
                    </form>
                </div>
            </div>
            </div>
        </div>  
    </div>
    </div> -->

    <div class="row">
    <div class="col-lg-2"></div>    
    <div class="col-lg-8" id="blog-view">
        
    </div>    
    </div>

    <div class="row">
    <div class="col-lg-2"></div>    
    <div class="col-lg-8">
        <!--<div class="well well-lg">
            <div class="media1">
                <a class="pull-left" href="#">
                  <img class="media-object img-circle" style="margin-right: 10px;" width="80px" src="../profilepic/person1.jpg" alt="">
                </a>
            <div class="media-body">                                    
                <h3>Username</h3>
                <h5><small class="text-muted">16-1-18 12:23:15</small></h5>
                <hr>
                <p>I am having severe headaches.</p>
                <p class="text-primary">Comments:-</p>
                <a class="pull-left" href="#">
                    <img class="media-object img-circle" style="margin-right: 10px;" width="40px" src="../profilepic/person1.jpg" alt="">
                </a><h6>doctor's name</h6>
                <p>Comment xyz</p>
                    <form class="form-inline" action="#" method="post" id="blogshare">
                        <div class="form-group">
                        <a class="pull-left" href="#">
                            <img class="media-object img-circle" style="margin-right: 10px;" width="40px" src="../profilepic/person1.jpg" alt="">
                        </a>
                        <input class="form-control" style="border-radius: 1rem; " type="text" name="cmnt" id="cmnt" placeholder="Comment">
                        </div>
                        <button class="btn btn-info pull-right" style="margin-top:10px" type="submit" id="share">Comment</button>
                    </form>
            </div>
            </div>
        </div> -->

        <?php
                $query1="select * from `newsfeed_patient` order by id desc";
                $sql1=mysqli_query($con,$query1);

                while($res = mysqli_fetch_assoc($sql1))
                {
                    $id=$res['id'];
                    $_SESSION['commentid']=$id;
                    $sender=$res['name'];
                    $msg=$res['msg'];
                    $date=$res['date'];
                    $time=$res['time'];

                    echo '<div class="well well-lg"><div class="media1">';
                    echo '<a class="pull-left" href="../profile.php?user='.$sender.'"><img class="media-object img-circle" style="margin: 10px;" width="80px" src="../profilepic/'.$sender.'.jpg" alt=""></a>';
                    echo '<div class="media-body"><h3>'.$sender.'</h3><h5><small class="text-muted">'.$date.' '.$time.'</small></h5><hr><p>'.$msg.'</p>';
                    
                    $query2="select * from category where id=$id";
                    $sql2=mysqli_query($con,$query2);
                    if(mysqli_num_rows($sql2) == 0){
                    ?>

                    <div class="form-group">
                        <form action="categoryUpdate.php" method="post" id="category-insert">
                        <input type="hidden" name="cat-id" value="<?php echo $id; ?>">
                        <label for="exampleFormControlSelect1">Select Category:</label>
                        <select class="form-control" name="categorylist">
                          <option value="physical">Physical disease</option>
                          <option value="infectious">Infectious disease</option>
                          <option value="non-infectious">Non-infectious disease</option>
                          <option value="deficiency">Deficiency disease</option>
                          <option value="degenerative">Degenerative disease</option>
                        </select>
                        <button class="btn btn-info pull-right" style="margin-top:10px" type="submit" name="submit" id="category-submit">Submit</button>
                        <script src="categoryInsert.js"></script>
                        </form>
                    </div>

                    <?php
                    }
                    
                    $cmntquery="select * from comment where id = '$id'";
                    $cmntsql=mysqli_query($con,$cmntquery);
                    if($cmntsql){
                        echo '<p class="text-primary">Comments:-</p>';
                        while($cmntres = mysqli_fetch_assoc($cmntsql)){
                            $cmntid=$cmntres['id'];
                            $cmnt=$cmntres['comment'];
                            $cmntuser=$cmntres['user'];

                            echo'<a class="pull-left" href="#"><img class="media-object img-circle" style="margin-right: 10px;" width="40px" src="../profilepic/'.$cmntuser.'.jpg" alt=""></a><h6>'.$cmntuser.'</h6><p>'.$cmnt.'</p>';
                        }    
                    }
                    
                    echo '<div id="cmnt-view"></div>';
                    
                    echo '
                    <form class="form-inline" action="comment.php" method="post" id="cmntshare">
                        <div class="form-group">
                            <a class="pull-left" href="#">
                                <img class="media-object img-circle" style="margin-right: 10px;" width="40px" src="../profilepic/'.$user.'.jpg" alt="">
                            </a>
                            <input class="form-control" style="border-radius: 1rem; " type="text" name="cmnt" id="cmnt" placeholder="Comment">
                            <input type="hidden" name="id" value="'.$id.'">
                        </div>
                        <button class="btn btn-info pull-right" style="margin-top:10px" type="submit" id="cmntbtn">Comment</button>
                        <script src="cmnt.js"></script>
                    </form>';
                    echo '</div></div></div>';
                }
            ?>

    </div>
    </div>
    </div>

    <!--End Main Container -->


    <!-- Footer -->
    <footer> 
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3><i class="fa fa-map-marker"></i> Contact:</h3>
                    <p class="footer-contact">
                        Via Ludovisi 39-45, Rome, 54267, Italy<br>
                        Phone: 1.800.245.356 Fax: 1.800.245.357<br>
                        Email: hello@LawOffice.org<br>
                    </p>
                </div>
                <div class="col-md-4">
                    <h3><i class="fa fa-external-link"></i> Links</h3>
                    <p> <a href="about.php"> About ( Who we are )</a></p>
                    <p> <a href="blog.php"> Blog</a></p>
                    <p> <a href="newsfeed.php"> Prescribe </a></p>
                    <p> <a href="indexsearch.php"> Search Medicine ( Find a generic )</a></p>
                    <p> <a href="contact.php"> Contact ( Feel free to contact )</a></p> 
                </div>
        </div>
      </div>
    </footer>

    
    <div class="copyright text center">
        <p>&copy; Copyright 2018, <a href="#">CuraTech</a></p>
    </div>

    
    <script type="text/javascript" src="../js/jquery-1.10.2.min.js"></script>
    <script src="../assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/textexpand.js"></script>
    <script>
      new WOW().init();
    </script>
    <script>
            $(function(){
                $('.normal').autosize();
                $('.animated').autosize({append: "\n"});
            });
        </script>

  </body>
</html>
