<?php

//db connection class using singleton pattern
class dbConn{

  protected static $db;
  private function __construct() {
    try {
      self::$db = new PDO( 'mysql:host=sql2.njit.edu;dbname=ml473', 'ml473', 'Z93KhFEP' );
      self::$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    }
    catch (PDOException $e) {
      echo "Connection Error: " . $e->getMessage();
    }
  }

  public static function getConnection() {
    if (!self::$db) {
      new dbConn();
    }
    return self::$db;
  }
}
//PDO Database Connection: https://github.com/MeilinLu/IS218_program1/blob/master/PDO_SQL/pdo.php
?>
