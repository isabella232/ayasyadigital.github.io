<?php
      $hostname_MyConnectionPHP = "localhost";
      $database_MyConnectionPHP = "zredkshd_searchengine";
      $username_MyConnectionPHP = "zredkshd_user";
      $password_MyConnectionPHP = "a1b2c3d4e5";
      $connections = mysql_connect($hostname_MyConnectionPHP, $username_MyConnectionPHP, $password_MyConnectionPHP) or die ( "Unabale to connect to the database" );
?>