<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pangai-Search Trending</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/simple-sidebar.css" rel="stylesheet">

    <link href="css/search.css" rel="stylesheet" type="text/css">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        Pangai-Search
                    </a>
                </li>
                <li>
                    <a href="About-us.php">About-US</a>
                </li>
                <li>
                    <a href="trending.php">Trending Websites</a>
                </li>
                 <li>
                    <a href="news_section/index.html">News Today</a>
                </li>
                <li>
                    <a href="#"><del>Sign-UP<del></a>
                </li>
                <li>
                    <a href="login.php"><del>Login</del></a>
                </li>
                 <li>
                    <a href="PangaiGO/index.html">PangaiGO</a>
                </li
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                      <!-- <h1>Simple Sidebar</h1>-->
                        

				<div class="flexsearch">
		<div class="flexsearch--wrapper">
<form class="flexsearch--form" action="search.php" method="GET">
				<div class="flexsearch--input-wrapper">
					<h2>
			    <input class="flexsearch--input" type="search" placeholder="search" name="search"><input class="flexsearch--submit" type="submit" value="&#10140;" name="submit" style="right: 63px; top: 14px"/>
</div>
				</h2>
			</form>
                                                <a href="#menu-toggle" class="btn btn-default" id="menu-toggle">Menu</a><a href="index.html" class="btn btn-default" id="menu-toggle">&nbsp;Home&nbsp;</a><a href="search.php" class="btn btn-default" id="menu-toggle">&nbsp;Web&nbsp;</a><a href="#" class="btn btn-default" id="menu-toggle">&nbsp;Images&nbsp;</a><a href="#" class="btn btn-default" id="menu-toggle">&nbsp;Videos&nbsp;</a><a href="#" class="btn btn-default" id="menu-toggle">&nbsp;Music&nbsp;</a>

<br>
<br>
<?php 

  mysql_pconnect("localhost", "zredkshd_user", "a1b2c3d4e5") or die("Can't connect!");

  mysql_select_db("zredkshd_searchengine") or die("Can't select database!"); 

   $button = $_GET [ 'submit' ];
   $search = $_GET [ 'search' ]; 

  $query= mysql_query("SELECT * FROM trending ");

  $result= mysql_numrows($query);

  if ($result == 0)

  {

    echo "<font color=#999><font-family=Trebuchet MS, Arial, Helvetica, sans-serif><font-size=13px>Sorry admin has not yet updated the list!<hr></hr>";

    exit; //No results found, why bother executing the rest of the script?

  }

  else if ($result == 1)

  {

    echo "<font color=#999><font-family=Trebuchet MS, Arial, Helvetica, sans-serif><font-size=13px> <b>1</b> match found!<br><hr></hr>";

  }

  else {

    echo "<font color=#999><font-family=Trebuchet MS, Arial, Helvetica, sans-serif><font-size=13px>These are the top trending websites updated !<br></br><hr></hr>";
    
  }

  while ($row= mysql_fetch_array($query))

  {

    

    echo "<a href=$row[pageurl]><font color=#3083A3><font size=15>$row[title]</a></font><br><font color=green>$row[pageurl]</font><br><font color=#999>$row[pagecontent]<br/>";
    echo "<br></br>";
  }

?> 


                    </div>
                </div>
            </div>
        </div>
        <!-- /#page-content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Menu Toggle Script -->
    <script>
    $("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
    </script>

</body>

</html>
