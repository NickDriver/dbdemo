
<?php 

// Page Refresher (for development purposes)
header("refresh: 1");

require("controllers/header.php");


// Connection to MySQL server
require("dbconnections/mysql.connection.php");

// Connection to PostgreSQL server
require("dbconnections/postgresql.connection.php");

?>

 <?php require("controllers/footer.php"); ?>