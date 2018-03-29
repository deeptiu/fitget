
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Plannar Module</title>
    <!-- Bootstrap CSS -->
  	

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css">
	
    <link rel="stylesheet" href="style4.css" type="text/css">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet" type="text/css">

	
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
 </head>
<body>
<div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Fitget</h3>
                    <strong>FG</strong>
                </div>

                <ul class="list-unstyled components">

                    <li class="active">
                        <a href="dailyCheckup2.html">
                            <i class="glyphicon glyphicon-home"></i>
                            Home
                        </a>
                    </li>
                    <li>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="fas fa-heartbeat"></i>
                            Workout
                        </a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="workout2.html">Graphs</a></li>
                            <li><a href="workout2.html/#Videos">Recommended Videos</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="planner2.html">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            Planner
                        </a>
                    </li>

                    <li class="active">
                        <a href="#commSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="fas fa-users"></i>
                            Community
                        </a>
                        <ul class="collapse list-unstyled" id="commSubmenu">
                            <li><a href="CommunityHomepage.html">Community Home</a></li>
                            <li><a href="friendsList2.html">Friends</a></li>
                            <li><a href="#">Groups</a></li>
                            <li><a href="challenges2.html">Challenges</a></li>
                        </ul>
                    </li>

                    <li>
                        <a href="profilepage.html">
                            <i class="glyphicon glyphicon-cog"></i>
                            Account Settings
                        </a>
                    </li>
                </ul>
            </nav> <!--end sidebar-->


            <!-- Page Content Holder -->
            <div id="content">


              <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <i class="glyphicon glyphicon-align-justify"></i>
                                <span></span>
                            </button>
                        </div>

                    </div>
                </nav>


<div class="container-fluid">
	<header>

		<h1><font size="8">Planner Module</font></h1>
	</header>
	
    	<div class="row">
    		<div class="col-lg-2 " > 
    			<h4><font size="5"></h4>
                    <script type="text/javascript"> 
                    var myDate = new Date(); 
                    document.write(myDate.toLocaleString()) 
                    </script> 
    			<h5></font></h5>
    			<div class="col-lg-12" >
    				<h6><b><font size="4">Events</font></b></h6>
                    
                    <head>
<title>Table</title>
</head>
<body>


<?php

    $name1 = $_POST["name1"];
    $date1 = $_POST["date1"];

    $name2 = $_POST["name2"];
    $date2 = $_POST["date2"];

    $name3 = $_POST["name3"];
    $date3 = $_POST["date3"];

    $name4 = $_POST["name4"];
    $date4 = $_POST["date4"];

    $name5 = $_POST["name5"];
    $date5 = $_POST["date5"];

  
                        
                             
 echo "<font size=\"4\" >$date1</font> <br>". "<font size=\"3\" >$name1</font>";
 echo "<br>";
 echo "<br>";
 echo "<font size=\"4\" >$date2</font><br>". "<font size=\"3\" >$name2</font>";
echo "<br>";
echo "<br>";
echo "<font size=\"4\" >$date3</font><br>". "<font size=\"3\" >$name3</font>";
 echo "<br>";
 echo "<br>";
 echo "<font size=\"4\" >$date4</font><br>". "<font size=\"3\" >$name4</font>";
 echo "<br>";
 echo "<br>";
 echo "<font size=\"4\" >$date5</font><br>". "<font size=\"3\" >$name5</font>";
                        

                    
?>


</body>
                
    			</div>
    		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<iframe src="https://calendar.google.com/calendar/embed?src=perrywu6%40gmail.com&ctz=America%2FNew_York" style="border: 0" width="660" height="480" frameborder="0" scrolling="no"></iframe>
				</div>
				<div class="col-sm-3 col-sm-offset-4"><!-- Start right side-->
					<div class="container-fluid">
						<div class="well">
						<table class="table table-bordered">
							<thead>
								<th><font size="4">Current Goals</font></th>
							</thead>
							<tr>
								<td>&bull; Workout 10 times this month <p> </p>
								End at 4/1/2018
								<svg width="180" height="20" > 
  								<rect width="100%" height="90%" fill="url(#fill1)" stroke-width="1" stroke="black" />
                          	  <linearGradient id="fill1">            
        							<stop offset="70%" stop-color="green"/>
        							<stop offset="70%" stop-color="white"/>
    							</linearGradient>
								</svg>
								</td>
								
							</tr>
							<tr>
								<td>&bull; Run 10 miles <p> </p>
								End at 5/3/2018
								<svg width="180" height="20" > 
  								<rect width="100%" height="90%" fill="url(#fill3)" stroke-width="1" stroke="black" />
                          	  	<linearGradient id="fill3">            
        							<stop offset="20%" stop-color="red"/>
        							<stop offset="20%" stop-color="white"/>
    							</linearGradient>
								</svg>
								</td>

							</tr>
						</table>
						<!--<well style="background-color:#00ff00";>-->
					</div>
					</div>

					<div class="row">
						<div class="well">
							<r2><b><font size="4">Mood Tracker</font></b></r2>


						</div>
					</div>
					<div class="row">
						<div class="well">
							<r3><b><font size="4">Daily Tips</font></b></r3>
							<ul>
								<font size="2">
								<li>
                                <?php
                                $name1 = $_POST["name1"];
    $date1 = $_POST["date1"];

    $name2 = $_POST["name2"];
    $date2 = $_POST["date2"];

    $name3 = $_POST["name3"];
    $date3 = $_POST["date3"];

    $name4 = $_POST["name4"];
    $date4 = $_POST["date4"];

    $name5 = $_POST["name5"];
    $date5 = $_POST["date5"];


function getChaBetweenTwoDate($date){
    $showtime=date("Y-m-d");
    $Date_List_a1=explode("-",$date);
    $Date_List_a2=explode("-",$showtime);
    $d1=mktime(0,0,0,$Date_List_a1[1],$Date_List_a1[2],$Date_List_a1[0]);
    $d2=mktime(0,0,0,$Date_List_a2[1],$Date_List_a2[2],$Date_List_a2[0]);
    $Days=round(($d1-$d2)/3600/24);
    return $Days;}
   

$Days = getChaBetweenTwoDate($date1);

if($Days<3){
    $TIP1 = " will come in less than 3 days. You should prepare for it.";
echo $name1 . $TIP1;
}
else{
    $TIP10 ="Drink Some Water, Especially Before Meals";
echo $TIP10;
}

?>
</li>
								<li>
                                    <?php
                                $name1 = $_POST["name1"];
    $date1 = $_POST["date1"];

    $name2 = $_POST["name2"];
    $date2 = $_POST["date2"];

    $name3 = $_POST["name3"];
    $date3 = $_POST["date3"];

    $name4 = $_POST["name4"];
    $date4 = $_POST["date4"];

    $name5 = $_POST["name5"];
    $date5 = $_POST["date5"];


function getChaBetweenTwoDate1($date){
    $showtime=date("Y-m-d");
    $Date_List_a1=explode("-",$date);
    $Date_List_a2=explode("-",$showtime);
    $d1=mktime(0,0,0,$Date_List_a1[1],$Date_List_a1[2],$Date_List_a1[0]);
    $d2=mktime(0,0,0,$Date_List_a2[1],$Date_List_a2[2],$Date_List_a2[0]);
    $Days2=round(($d1-$d2)/3600/24);
    return $Days2;}
   

$Days2 = getChaBetweenTwoDate1($date2);

if($Days2<3){
    $TIP1 = " will come in less than 3 days. You should prepare for it.";
echo $name2 . $TIP1;
}
else{
    $TIP11 ="Never skip breakfast";
echo $TIP11;
}

?>
                                </li>


								<li>
                                    <?php
                                $name1 = $_POST["name1"];
    $date1 = $_POST["date1"];

    $name2 = $_POST["name2"];
    $date2 = $_POST["date2"];

    $name3 = $_POST["name3"];
    $date3 = $_POST["date3"];

    $name4 = $_POST["name4"];
    $date4 = $_POST["date4"];

    $name5 = $_POST["name5"];
    $date5 = $_POST["date5"];


function getChaBetweenTwoDate2($date){
    $showtime=date("Y-m-d");
    $Date_List_a1=explode("-",$date);
    $Date_List_a2=explode("-",$showtime);
    $d1=mktime(0,0,0,$Date_List_a1[1],$Date_List_a1[2],$Date_List_a1[0]);
    $d2=mktime(0,0,0,$Date_List_a2[1],$Date_List_a2[2],$Date_List_a2[0]);
    $Days3=round(($d1-$d2)/3600/24);
    return $Days3;}
   

$Days3 = getChaBetweenTwoDate2($date3);

if($Days3<3){
    $TIP1 = " will come in less than 3 days. You should prepare for it.";
echo $name3 . $TIP1;
}
else{
    $TIP12 ="Don't Smoke or do Drugs, and Only Drink in Moderation.";
echo $TIP12;
}

?>
                                </li>


							</font>
							</ul>

						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
</div>
	<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<!-- jQuery CDN -->
         <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
         <!-- Bootstrap Js CDN -->
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
</body>	
</html>
