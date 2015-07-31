<?php namespace Blog\DB;

class Database {
  protected $conn;

  public function __construct()
  {
    try {
      $dsn = 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME;
      $conn = new \PDO($dsn, DB_USER, DB_PASS);
      $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
      $this->conn = $conn;
    } catch(\Exception $e) {
      echo $e->getMessage();
      die;
    }
  }

  public function getConn()
  {
    return $this->conn;
  }

  public function all($table, $limit = 10)
  {
    /**
     * Query method.
     */
    try {
      $conn = $this->getConn();
      $results = $conn->query("SELECT * FROM $table ORDER BY id DESC LIMIT $limit");
      return $results->fetchAll(\PDO::FETCH_ASSOC);
    } catch(\Exception $e) {
      echo $e->getMessage();
      die;
    }
  }

  function query($query, $bindings)
  {
    try {
      /**
       * Prepared Statements
       */
      $conn = $this->getConn();
      $stmt = $conn->prepare($query);
      $stmt->execute($bindings);
      return $stmt;
    } catch(\Exception $e) {
      echo $e->getMessage();
      die;
    }
  }

  function find($key, $value, $table)
  {
    $conn = $this->getConn();
    $query = $this->query("SELECT * FROM $table WHERE $key = :val LIMIT 1", [':val' => $value]);
    return $query->fetch(\PDO::FETCH_ASSOC);
  }

}
