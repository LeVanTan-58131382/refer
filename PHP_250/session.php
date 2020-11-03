<?php

session_start();

$_SESSION["dang_toi"] = "Tới rồi";

if (isset($_SESSION["dang_toi"])) {
    echo "Session " . $_SESSION["dang_toi"] . "đang active";
}

session_unset(); // hủy tất cả session

if (!isset($_SESSION["dang_toi"])) {
    echo "Session đã được hủy";
}
