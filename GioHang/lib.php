<?php

class GioHang
{
    protected $conn;
    public function connection()
    {
        $this->conn = mysqli_connect("localhost", "root", "", "banhangmvc") or die("Connec error");
        mysqli_set_charset($this->conn, "utf8");
    }

    public function getAllPro()
    {
        $sql = "SELECT * FROM db_product LIMIT 0,10";
        $ketqua = mysqli_query($this->conn, $sql) or die($sql);
        return $ketqua;
    }

    public function getProById($id)
    {
        $sql = "SELECT * FROM db_product WHERE id = $id";
        $ketqua = mysqli_query($this->conn, $sql) or die($sql);
        return $ketqua;
    }
}
