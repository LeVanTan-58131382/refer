<?php
//
session_start();
include("lib.php");
$giohang = new GioHang;
$giohang->connection();

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $kq = $giohang->getProById($id);
    $sp = mysqli_fetch_array($kq);

    $kt = 0;
    for ($i = 0; $i < count($_SESSION["giohang"]); $i++) {
        if ($id == $_SESSION["giohang"][$i]["id"]) {
            $_SESSION["giohang"][$i]["sl"] += 1;
            $_SESSION["giohang"][$i]["ten"] = $sp["name"];
            $_SESSION["giohang"][$i]["dongia"] = $sp["price"];
            $_SESSION["giohang"][$i]["tongtien"] = $sp["price"] * $_SESSION["giohang"][$i]["sl"];
            $kt = 1;
        }
    }
    if ($kt == 0) {
        $i = count($_SESSION["giohang"]);
        $_SESSION["giohang"][$i]['id'] = $id;
        $_SESSION["giohang"][$i]['sl'] = 1;
        $_SESSION["giohang"][$i]["ten"] = $sp["name"];
        $_SESSION["giohang"][$i]["dongia"] = $sp["price"];
        $_SESSION["giohang"][$i]["tongtien"] = $sp["price"] * $_SESSION["giohang"][$i]["sl"];
    }
    header("location:index.php");
}

if (isset($_GET["capnhat"])) {
    for ($i = 0; $i < count($_SESSION["giohang"]); $i++) {
        $id = $_SESSION["giohang"][$i]["id"];
        $_SESSION["giohang"][$i]["sl"] = $_GET["soluong_$id"];
        $_SESSION["giohang"][$i]["tongtien"] = $_SESSION["giohang"][$i]["dongia"] * $_SESSION["giohang"][$i]["sl"];
        $kt = 1;
    }
    header("location:index.php");
}

if (isset($_GET["xoa"])) {
    $vt = count($_SESSION["giohang"]);
    $id = $_GET["id_xoa"];
    for ($i = 0; $i < $vt - 1; $i++) {
        if ($_SESSION["giohang"][$i]["id"] == $id) {
            $_SESSION["giohang"][$i] = $_SESSION["giohang"][$i + 1];
        }
    }
    unset($_SESSION["giohang"][$vt - 1]);
    header("location:index.php");
}
