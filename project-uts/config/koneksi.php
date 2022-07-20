<?php

class Database
{
  private static ?mysqli $con = null;

  public static function getConnection(): mysqli
  {
    if (is_null(self::$con)) {
      self::$con = new mysqli(
        "localhost",
        "root",
        ""
      );
      self::$con->select_db("crud_uts");
    }
    return self::$con;
  }
}
