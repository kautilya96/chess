
<?php
session_start();

include("config.php");
if(!isset($_SESSION['name'])){
  header("Location:login.php");
}

if(!isset($_GET['x'])){
  $_GET['x']=0;
}
if($_GET['x']==1){
    session_destroy();
$email=$_SESSION['email'];
$q=mysqli_query($connect,"UPDATE `user` SET online='0' WHERE email_id='$email'");
  header("Location:login.php");
}
if (!isset($_GET['abort'])) 
{
  $_GET['abort']=0;
}
if ($_GET['abort']==1) 
{
  $id=$_GET['id'];
  $q=mysqli_query($connect,"UPDATE `chess` SET winner='3' WHERE id='$id'");
}
?>
<?php
$page = $_SERVER['PHP_SELF'];
$sec = "2";
?>
<!DOCTYPE html>

<html lang="en">
<head>
    
    <meta http-equiv="refresh" content="<?php echo $sec?>;URL='<?php echo $page?>'">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/clean-blog.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

    <link href="css2/bootstrap.min.css" rel="stylesheet">
    <link href="css2/font-awesome.min.css" rel="stylesheet">
    <link href="css2/prettyPhoto.css" rel="stylesheet">
    <link href="css2/price-range.css" rel="stylesheet">
    <link href="css2/animate.css" rel="stylesheet">
    <link href="css2/main.css" rel="stylesheet">
    <link href="css2/responsive.css" rel="stylesheet">
    <link href="css2/starrr.css" rel="stylesheet">
    

    <link rel="shortcut icon" href="images2/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images2/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images2/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images2/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images2/ico/apple-touch-icon-57-precomposed.png">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style type="text/css">
    .input-group{
        margin-top: 15px;
    }
    #search_param{
        font-size: 10px;
        height: 50px !important;
    }
   #search1{
        height: 50px !important;  
        width: 300px !important;  
        font-family: FontAwesome;
   
   }
   .search-form .form-group {
  float: right !important;
  transition: all 0.35s, border-radius 0s;
  width: 32px;
  height: 32px;
  background-color: #fff;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
  border-radius: 25px;
  border: 1px solid #ccc;
}
.search-form .form-group input.form-control {
  padding-right: 20px;
  border: 0 none;
  background: transparent;
  box-shadow: none;
  display:block;
}
.search-form .form-group input.form-control::-webkit-input-placeholder {
  display: none;
}
.search-form .form-group input.form-control:-moz-placeholder {
  /* Firefox 18- */
  display: none;
}
.search-form .form-group input.form-control::-moz-placeholder {
  /* Firefox 19+ */
  display: none;
}
.search-form .form-group input.form-control:-ms-input-placeholder {
  display: none;
}
.search-form .form-group:hover,
.search-form .form-group.hover {
  width: 100%;
  border-radius: 4px 25px 25px 4px;
}
.search-form .form-group span.form-control-feedback {
  position: absolute;
  top: -1px;
  right: -2px;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  color: #3596e0;
  left: initial;
  font-size: 14px;

}


.star-rating {
  margin: 0;
  padding: 0;
  display: inline-block;
  
  .star {
    padding: 1px;
    color: #ddd;
    font-size: 20px;
    text-shadow: .05em .05em #aaa;
    list-style-type: none;
    display: inline-block;
    cursor: pointer;

    &.filled {
      color: #fd0;
    }
  }

  &.readonly .star.filled {
    color: #666;
  }
}
@import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);

fieldset, label { margin: 0; padding: 0; }
body{ margin: 20px; }
h1 { font-size: 1.5em; margin: 10px; }

/****** Style Star Rating Widget *****/

.rating { 
  border: none;
  float: left;
}

.rating > input { display: none; } 
.rating > label:before { 
  margin: 5px;
  font-size: 1.25em;
  font-family: FontAwesome;
  display: inline-block;
  content: "\f005";
}

.rating > .half:before { 
  content: "\f089";
  position: absolute;
}

.rating > label { 
  color: #ddd; 
 float: right; 
}

/***** CSS Magic to Highlight Stars on Hover *****/

.rating > input:checked ~ label, /* show gold star when clicked */
.rating:not(:checked) > label:hover, /* hover current star */
.rating:not(:checked) > label:hover ~ label { color: #FFD700;  } /* hover previous stars in list */

.rating > input:checked + label:hover, /* hover current star when changing rating */
.rating > input:checked ~ label:hover,
.rating > label:hover ~ input:checked ~ label, /* lighten current selection */
.rating > input:checked ~ label:hover ~ label { color: #FFED85;  } 


</style>

</head>
<body>
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
           <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    Menu <i class="fa fa-bars"></i>
                </button>
            </div><div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               
                <ul class="nav navbar-nav navbar-left">
                    <li>
                       <h3 style="color: gray;"><b>chess</b></h3>
                    </li>
                    </ul>
                <ul class="nav navbar-nav navbar-right">
            
                    <li>
                        <a style="color: gray"><i class="fa fa-user"></i>&nbsp;&nbsp;&nbsp;<span >Welcome &nbsp;<?php echo $_SESSION["name"]; ?></span></a>
                    </li>
                    <li>
                        <a style="color: gray" href="home.php?x=1">Logout&nbsp;&nbsp;</a>
                    </li>
                </ul>
            </div>
           
        </div>
        
    </nav>
    <header class="intro-header">
        <div class="container">
            <div class="row">
                 <div class="col-lg-2 col-lg-offset-1 col-md-2 col-md-offset-0">
                     <div class="site-heading">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-4 col-md-offset-3">
<!--                                           <form class="search-form">
                                                <div class="form-group has-feedback">
                                                         <input type="text" class="form-control" name="search" id="search" placeholder="search hotels"  onkeyup="setsearch(this.value)">
                                                         <span class="glyphicon glyphicon-search form-control-feedback" style="color: orange"></span>

                                                </div>

                                           </form>
                                            -->
                                                     
                                    </div>
                                </div>
                            </div>                 
             
                     </div>
                </div>
            </div>
        </div>
    </header>



    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        
                       

                       
                   </div>
                        
                </div>
                   <div class="col-sm-9 padding-right"  id="cardss" ng-app="fetch" ng-controller="dbCtrl">
                    <div class="features_items" > 
                        <h2 class="title text-center">Features Items</h2>
             
          
      
                </div>
                </div>
<div id="livesearch"></div>

<?php
  $email=$_SESSION['email'];
$query=mysqli_query($connect,"SELECT * FROM chess WHERE email_first='$email' OR email_second='$email'");
$row=mysqli_num_rows($query);     
           
     if ($query) 
     {
      if ($row>0) 
      {
        
     echo'<center>
     <table class="table" width="200px">
    <thead>
      <tr>
        <th>Opponent</th>
        <th>Opponent\'s Email Address</th>
        <th>User Status</th>   
        <th>Game Status</th>
        <th>Action/Remark</th>
      </tr>
    </thead>
    <tbody>
    ';
      while ($value=mysqli_fetch_assoc($query)) 
      {
      $flag=1;  
      $femail=$value['email_first'];
      $semail=$value['email_second'];
      if ($_SESSION['email']==$femail) {
        $you=1;
        $opponent=$semail;
        $color="white";
      }
      else
      {
        $you=2;
        $opponent=$femail;
        $color="black";
      }
      if ($value['winner']==0) 
      {
        $status="In Progress";
        $action="Go to the game";
      }
      else
      {
        if ($value['winner']==1) 
        {
          if ($you==1) 
          {
            $status="You won the game";
            $ustatus="--";
            $flag=0;
            $raction="Congratulations";
          }
          else
          {
            $status="Opponent won the game";
            $ustatus="--";
            $flag=0;
            $raction="Tough Luck";
          }
          $q=mysqli_query($connect,"SELECT * from `user` WHERE email_id='$opponent'");
            while ($values=mysqli_fetch_assoc($q)) 
            {
              $online=$values['online'];
              $name=$values['firstname'];
            }
        }
        else if ($value['winner']==2) 
        {
         
          if ($you==2) 
          {
            $status="You won the game";
            $ustatus="--";
            $flag=0;
            $raction="Congratulations";
          }
          else
          {
            $ustatus="--";
            $flag=0;
            $status="Opponent won the game";
            $raction="Tough Luck";
          } 
          $q=mysqli_query($connect,"SELECT * from `user` WHERE email_id='$opponent'");
            while ($values=mysqli_fetch_assoc($q)) 
            {
              $online=$values['online'];
              $name=$values['firstname'];
            }
        }
        else
        {
          $status="Game was aborted";
          $ustatus="--";
            $flag=0;
           $raction="--";

           $q=mysqli_query($connect,"SELECT * from `user` WHERE email_id='$opponent'");
            while ($values=mysqli_fetch_assoc($q)) 
            {
              $online=$values['online'];
              $name=$values['firstname'];
            }  
        }
      }
      $online=1;
      $id=$value['id'];
      if ($flag==1) 
      {
         $q=mysqli_query($connect,"SELECT * from `user` WHERE email_id='$opponent'");
        while ($values=mysqli_fetch_assoc($q)) 
        {
          $online=$values['online'];
          $name=$values['firstname'];
        }
        if ($online==1) 
        {
             $ustatus="Online";  
             $raction="<a href='newchess1.php'>".$action."</a> | <a href='home.php?abort=1&id=".$id."'>Abort the game</a>";
        }
        else
        {
             $ustatus="Offline";
             $raction="Opponent is offline | <a href='home.php?abort=1&id=".$id."'>Abort the game</a>";
        }
      }  
        echo "<tr>
              <td><b>".$name."(".$color.")</b></td>
              <td><b>".$opponent."</b></td>
              <td><b>".$ustatus."</b></td>
              <td><b>".$status."</b></td>        
              <td><b>".$raction."</b></td>
              </tr>";

      }
}
}
/*echo "</tbody>
</table></center>";
echo '<br><br><br><br><br><center><div class="f">
<input type="submit" name="submit" class="btn btn-default" value="Save changes">
</center></form></div>';
*/


?>
                    

    

    
    <script src="js2/ratings.js"></script>
    <script src="js2/jquery.js"></script>
    <script src="js2/bootstrap.min.js"></script>
    <script src="js2/jquery.scrollUp.min.js"></script>
    <script src="js2/price-range.js"></script>
    <script src="js2/jquery.prettyPhoto.js"></script>
    <script src="js2/main.js"></script>
     
           
<!--<script type="text/javascript">
     function get(){
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("livesearch").innerHTML=this.responseText;
    }
  }
  var email="<?php echo $_SESSION['email'] ?>";
  xmlhttp.open("GET","getdetails.php?email="+email,true);
  xmlhttp.send(); 
}
setInterval(get,50);
</script>-->

</body>
</html>
