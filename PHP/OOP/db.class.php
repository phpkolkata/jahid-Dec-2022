<?php
abstract class db
{
    private $host = "locahost";
    private $user = "asif";
    private $pass = "asif";
    private $db = "mobile_store";
    private $con = null;

    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }

    public function execute($sql)
    {
        return mysqli_query($this->con, $sql);
    }

    // public function update($sql)
    // {
    //     return mysqli_query($this->con, $sql);
    // }

}

$db = new db();
