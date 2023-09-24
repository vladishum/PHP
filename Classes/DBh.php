<?php
//class that handles the database connection
  class DBh
  {
      protected function connect() {
        try {
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost; dbname=testassignment02' , $username, $password);
            $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $dbh;
            }
        catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br />";
            die();
        }

      }
  }
 ?>
