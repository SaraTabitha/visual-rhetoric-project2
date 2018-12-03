<?php

  require_once('db_credentials.php');

  /* Connect to the database with the credentials given in the file above
     Return a handle to the PDO instance or output an error message and exit (stop execution)
   */
  function db_connect() {

    try{
      //pdo
      $dsn = "mysql:host=" . DB_SERVER . ";dbname=" . DB_NAME;
      $username = DB_USER;
      $password = DB_PWD;
      $pdo = new PDO($dsn, $username, $password);
      return $pdo;
      
    }catch(PDOException $exception){

      echo "Failed: " . $exception->getMessage();
    }
    
  }

  /* disconnect from the database, if needed
   */
  function db_disconnect() {

    $pdo = null;
    
  }

 ?>
