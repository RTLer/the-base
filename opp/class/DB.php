<?php

class DB
{
    public $con;
    public $host;
    public $username;
    public $password;
    public $dbName;


    public function __construct($host, $username, $password, $dbName)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->dbName = $dbName;
        $this->openConnection();
    }

    public function openConnection()
    {
        $this->con = mysqli_connect($this->host, $this->username, $this->password, $this->dbName);

        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
        }
    }

    public function runSQL($sql)
    {
        $result = mysqli_query($this->con, $sql);
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    }

}

$db = new DB("localhost", "root", "root", "shop_db");
$db->runSQL('select * from test');